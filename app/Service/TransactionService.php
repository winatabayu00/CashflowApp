<?php

namespace App\Service;

use App\Actions\Transaction\CreateTransaction;
use App\Concerns\Transactional\Mutation\InteractsWithMutation;
use App\Enums\Transaction\TransactionType;
use App\Models\Transaction\Transaction;
use App\Models\User;
use App\Notifications\SendNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Winata\Core\Response\Exception\BaseException;
use Winata\PackageBased\Abstracts\BaseService;

class TransactionService extends BaseService
{
    use InteractsWithMutation;

    /**
     * @param User $user
     * @param array $inputs
     * @return Transaction
     * @throws BaseException
     * @throws ValidationException
     */
    public function create(User $user, array $inputs): Transaction
    {
        $validated = $this->validate(
            inputs: $inputs,
            rules: [
                'account_id' => ['required', 'uuid'],
                'category_id' => ['required', 'uuid'],
                'amount' => ['required', 'numeric', 'gt:0'],
                'description' => ['required', 'string'],
                'date' => ['required', 'date'],
                'type' => ['required', 'string', Rule::in(TransactionType::values())],
            ]
        );

        DB::beginTransaction();
        // create transaction
        $transaction = (new CreateTransaction(user: $user, inputs: $inputs))
            ->handle();
        $transaction->loadMissing('account');

        // update balance on account
        $amount = $validated['type'] == TransactionType::EXPENSE->value ? $validated['amount'] * -1 : $validated['amount'];
        $this->init($user)
            ->setMutable($amount, $transaction->account, $validated['type']);

        DB::commit();
        // create notification
        $user->notify(
            new SendNotification(
                title: 'Transaksi Baru',
                message: 'Transaksi baru berhasil dibuat',
                metadata: [
                    'amount' => $validated['amount'],
                    'description' => $validated['description'],
                    'type' => $validated['type'],
                ]
            )
        );

        return $transaction;
    }
}
