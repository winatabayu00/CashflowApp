<?php

namespace App\Actions\Transactional\Mutation;

use App\Concerns\Base\ValidationInput;
use App\Contracts\Transactional\Mutation\HasMutable;
use App\Enums\ResponseCode\ResponseCode;

use App\Enums\Transactional\Mutation\MutationType;
use App\Models\Transactional\Mutation;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Winata\Core\Response\Exception\BaseException;
use Winata\PackageBased\Abstracts\BaseAction;

class CreateMutation extends BaseAction
{
    use ValidationInput;

    public function __construct(
        public readonly User       $user,
        public readonly HasMutable $mutable,
        public readonly float      $amount,
        public readonly string     $mutationInfo,
        public readonly string     $date,
        public readonly bool       $isLocking = false,
        public bool                $usingDBTransaction = false
    )
    {
        parent::__construct();
    }

    /**
     * @return BaseAction
     */
    #[\Override] public function rules(): BaseAction
    {
        return $this;
    }

    /**
     * @return mixed
     * @throws BaseException
     */
    #[\Override] public function handle(): mixed
    {
        $mutation = new Mutation();

        $mutableModel = ($this->isLocking) ? $this->mutable->freshLock() : $this->mutable;

        /**
         * $mutable Locking should set to false And lock should handle outside the method if using sequence mutable
         * to make sure data is integrated.
         *
         * @var Model|HasMutable $mutable
         */

        $startingAmount = $mutableModel->getStartingAmount();

        if (!$mutableModel->allowNegativeAmount() && ($startingAmount < (-1 * $this->amount))) {
            throw new BaseException(rc: ResponseCode::ERR_INSUFFICIENT_AMOUNT, data: ['amount' => $this->amount, 'current_amount' => $startingAmount]);
        }

        $mutation->mutable()->associate($mutableModel);
        $mutation->type = $this->amount < 0 ? MutationType::OUT->value : MutationType::IN->value;
        $mutation->info = $this->mutationInfo;
        $mutation->amount = $this->amount;
        $mutation->amount_before = $startingAmount;
        $mutation->user_id = $this->user->id;
        $mutation->date = $this->date;

        // update balance
        $mutation->amount_after = $startingAmount + $this->amount;

        $mutableModel->{$mutableModel->getAmountKey()} = $startingAmount + $this->amount;

        if ($mutableModel->getStartingPaidAmountKey()) {
            $mutableModel->{$mutableModel->getStartingPaidAmountKey()} = $mutableModel->getStartingPaidAmount() - $this->amount;
        }

        $mutation->save();
        $mutableModel->save();

        return $mutation;
    }
}
