<?php

namespace App\Http\Controllers\App\Transaction;

use App\Actions\Transaction\UpdateTransaction;
use App\Http\Controllers\Controller;
use App\Models\Transaction\Transaction;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

#[Attributes\Prefix('transaction')]
#[Attributes\Name('transaction', true, false)]
class TransactionController extends Controller
{
    /**
     * @return View
     */
    #[Attributes\Get(uri: '')]
    public function index(): \Illuminate\Contracts\View\View
    {
        return $this->view('transaction.index');
    }

    /**
     * @return View
     */
    #[Attributes\Get(uri: 'create')]
    public function create(): \Illuminate\Contracts\View\View
    {
        return $this->view('transaction.index');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    #[Attributes\Post(uri: 'create')]
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {

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
     */
    #[Attributes\Get(uri: '{transaction}/edit')]
    public function edit(Transaction $transaction): \Illuminate\Contracts\View\View
    {
        return $this->view('transaction.index');
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
