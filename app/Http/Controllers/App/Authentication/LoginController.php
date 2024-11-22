<?php

namespace App\Http\Controllers\App\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

#[Attributes\Prefix('auth')]
#[Attributes\Name('auth', false, true)]
class LoginController extends Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @return View
     */
    #[Attributes\Get(uri: 'login', name: 'login', middleware: ['guest'])]
    public function index(): \Illuminate\Contracts\View\View
    {
        return $this->view('pages.authentication.login.index');
    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    #[Attributes\Post(uri: '/login', name: 'login', middleware: ['guest'])]
    public function login(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('app.dashboard.index');
    }

    /**
     * Destroy an authenticated session.
     */
    #[Attributes\Delete(uri: 'logout', name: 'logout', middleware: ['auth'])]
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
