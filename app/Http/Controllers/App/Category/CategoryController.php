<?php

namespace App\Http\Controllers\App\Category;

use App\Actions\Category\CreateCategory;
use App\Actions\Category\UpdateCategory;
use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\User;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

#[Attributes\Prefix('category')]
#[Attributes\Name('category', true, false)]
class CategoryController extends Controller
{
    /**
     * @return View
     */
    #[Attributes\Get(uri: '')]
    public function index(): \Illuminate\Contracts\View\View
    {
        return $this->view('category.index');
    }

    /**
     * @return View
     */
    #[Attributes\Get(uri: 'create')]
    public function create(): \Illuminate\Contracts\View\View
    {
        return $this->view('category.index');
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
        (new CreateCategory(user: $user, inputs: $request->input()))
            ->handle();

        return back();
    }

    /**
     * @param Category $category
     * @return View
     */
    #[Attributes\Get(uri: '{category}')]
    public function show(Category $category): \Illuminate\Contracts\View\View
    {
        return $this->view('category.index');
    }

    /**
     * @param Category $category
     * @return View
     */
    #[Attributes\Get(uri: '{category}/edit')]
    public function edit(Category $category): \Illuminate\Contracts\View\View
    {
        return $this->view('category.index');
    }

    /**
     * @param Request $request
     * @param Category $category
     * @return RedirectResponse
     */
    #[Attributes\Put(uri: '{category}/edit')]
    public function update(Request $request, Category $category): \Illuminate\Http\RedirectResponse
    {
        (new UpdateCategory(category: $category, inputs: $request->input()))
            ->handle();
        return back();
    }
}
