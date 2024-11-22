<?php

namespace App\Http\Controllers\App\Authentication;

use App\Actions\User\CreateNewUser;
use App\Http\Controllers\Controller;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

#[Attributes\Prefix('auth')]
#[Attributes\Name('auth', false, true)]
#[Attributes\Middleware(['guest'])]
class RegisterController extends Controller
{
    /**
     * @return View
     */
    #[Attributes\Get(uri: 'register', name: 'register')]
    public function index(): \Illuminate\Contracts\View\View
    {
        return $this->view('pages.authentication.register.index');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    #[Attributes\Post(uri: 'register', name: 'register')]
    public function register(Request $request): \Illuminate\Http\RedirectResponse
    {
        Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string'],
        ])->validate();
        (new CreateNewUser(
            inputs: $request->input(),
        ))
            ->handle();
        return redirect()->route('auth.login');
    }

}
