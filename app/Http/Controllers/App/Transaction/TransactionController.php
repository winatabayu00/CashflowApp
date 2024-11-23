<?php

namespace App\Http\Controllers\App\Transaction;

use App\Actions\Transaction\CreateTransaction;
use App\Actions\Transaction\UpdateTransaction;
use App\Http\Controllers\Api\SelectOption\GlobalSelectOptionController;
use App\Http\Controllers\Controller;
use App\Models\Transaction\Transaction;
use App\Models\User;
use App\Queries\Transaction\TransactionQuery;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

#[Attributes\Prefix('transaction')]
#[Attributes\Name('transaction', true, true)]
class TransactionController extends Controller
{
    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: '', name: 'index')]
    public function index(): \Illuminate\Contracts\View\View
    {
        $this->setPageTitle('Transaction');
        /** @var User $user */
        $user = auth()->user();
        $transactions = TransactionQuery::byUser($user->id)
            ->with(['account:id,name,currency', 'category:id,name'])
            ->filterColumn()
            ->orderColumn()
            ->getAllDataPaginated();
        $this->setData('transactions', $transactions);
        return $this->view('pages.transaction.index');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: 'create', name: 'create')]
    public function create(): \Illuminate\Contracts\View\View
    {
        $selectOption = new GlobalSelectOptionController();
        $accounts = $selectOption->accounts();
        $categories = $selectOption->categories();
        $transactionTypes = $selectOption->transactionTypes();

        $this->setData('accounts', $accounts);
        $this->setData('categories', $categories);
        $this->setData('transactionTypes', $transactionTypes);
        return $this->view('pages.transaction.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    #[Attributes\Post(uri: 'create')]
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        /** @var User $user */
        $user = auth()->user();
        (new CreateTransaction(user: $user, inputs: $request->input()))
            ->handle();
        return back();
    }

    /**
     * @param Transaction $transaction
     * @return View
     */
    #[Attributes\Get(uri: '{transaction}')]
    public function show(Transaction $transaction): \Illuminate\Contracts\View\View
    {
        return $this->view('transaction.index');
    }

    /**
     * @param Transaction $transaction
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: '{transaction}/edit', name: 'edit')]
    public function edit(Transaction $transaction): \Illuminate\Contracts\View\View
    {
        $selectOption = new GlobalSelectOptionController();
        $accounts = $selectOption->accounts();
        $categories = $selectOption->categories();
        $transactionTypes = $selectOption->transactionTypes();

        setDefaultRequest($transaction->toArray());
        $this->setData('accounts', $accounts);
        $this->setData('categories', $categories);
        $this->setData('transactionTypes', $transactionTypes);

        return $this->view('pages.transaction.edit');
    }

    /**
     * @param Request $request
     * @param Transaction $transaction
     * @return RedirectResponse
     */
    #[Attributes\Put(uri: '{transaction}/edit')]
    public function update(Request $request, Transaction $transaction): \Illuminate\Http\RedirectResponse
    {
        (new UpdateTransaction(transaction: $transaction, inputs: $request->input()))
            ->handle();
        return back();
    }
}
