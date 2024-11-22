<?php

namespace App\Http\Controllers\App\Dashboard;

use App\Actions\Category\CreateCategory;
use App\Actions\Category\UpdateCategory;
use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\User;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

#[Attributes\Prefix('dashboard')]
#[Attributes\Name('dashboard', true, true)]
class DashboardController extends Controller
{
    /**
     * @return View
     */
    #[Attributes\Get(uri: '', name: 'index')]
    public function index(): \Illuminate\Contracts\View\View
    {
        $this->setPageTitle('Dashboard');
        return $this->view('pages.dashboard.index');
    }
}
