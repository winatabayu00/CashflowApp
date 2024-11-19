<?php

namespace App\Http\Controllers\App\Account;

use App\Actions\Account\UpdateAccount;
use App\Http\Controllers\Controller;
use App\Models\Account\Account;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

#[Attributes\Prefix('account')]
#[Attributes\Name('account', true, false)]
class AccountController extends Controller
{
    /**
     * @return View
     */
    #[Attributes\Get(uri: '')]
    public function index(): \Illuminate\Contracts\View\View
    {
        return $this->view('account.index');
    }

    /**
     * @return View
     */
    #[Attributes\Get(uri: 'create')]
    public function create(): \Illuminate\Contracts\View\View
    {
        return $this->view('account.index');
    }

    /**
     * @return RedirectResponse
     */
    #[Attributes\Post(uri: 'create')]
    public function store(): \Illuminate\Http\RedirectResponse
    {
        return back();
    }

    /**
     * @param Account $account
     * @return View
     */
    #[Attributes\Get(uri: '{account}')]
    public function show(Account $account): \Illuminate\Contracts\View\View
    {
        return $this->view('account.index');
    }

    /**
     * @param Account $account
     * @return View
     */
    #[Attributes\Get(uri: '{account}/edit')]
    public function edit(Account $account): \Illuminate\Contracts\View\View
    {
        return $this->view('account.index');
    }

    /**
     * @param Request $request
     * @param Account $account
     * @return RedirectResponse
     */
    #[Attributes\Put(uri: '{account}/edit')]
    public function update(Request $request, Account $account): \Illuminate\Http\RedirectResponse
    {
        $account = (new UpdateAccount(account: $account, inputs: $request->input()))
            ->handle();
        return back();
    }
}
