<?php

namespace App\Http\Controllers\App\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

#[Attributes\Prefix('profile')]
#[Attributes\Name('profile', true, true)]
class ProfileController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->setPageTitle('Profile');
    }

    /**
     * @return RedirectResponse
     */
    #[Attributes\Get(uri: '/', name: 'index')]
    public function index(): RedirectResponse
    {
        return redirect()->route('profile.overview');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: 'overview', name: 'overview')]
    public function overview(): View
    {
        /** @var User $user */
        $user = auth()->user();
        $this->setData('user', $user);
        return $this->view('pages.profile.fragment.overview');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: 'category', name: 'category')]
    public function category(): View
    {

        /** @var User $user */
        $user = auth()->user();
        $this->setData('user', $user);
        return $this->view('pages.profile.fragment.category');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: 'setting', name: 'setting')]
    public function setting(): View
    {

        /** @var User $user */
        $user = auth()->user();
        $this->setData('user', $user);
        return $this->view('pages.profile.fragment.setting');
    }
}
