<?php

namespace App\Http\Controllers\App\Budget;

use App\Actions\Budget\CreateBudget;
use App\Actions\Budget\UpdateBudget;
use App\Http\Controllers\Controller;
use App\Models\Budget\Budget;
use App\Models\User;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

#[Attributes\Prefix('budget')]
#[Attributes\Name('budget', true, false)]
class BudgetController extends Controller
{
    /**
     * @return View
     */
    #[Attributes\Get(uri: '')]
    public function index(): \Illuminate\Contracts\View\View
    {
        return $this->view('budget.index');
    }

    /**
     * @return View
     */
    #[Attributes\Get(uri: 'create')]
    public function create(): \Illuminate\Contracts\View\View
    {
        return $this->view('budget.index');
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
        (new CreateBudget(user: $user, inputs: $request->input()))
            ->handle();

        return back();
    }

    /**
     * @param Budget $budget
     * @return View
     */
    #[Attributes\Get(uri: '{budget}')]
    public function show(Budget $budget): \Illuminate\Contracts\View\View
    {
        return $this->view('budget.index');
    }

    /**
     * @param Budget $budget
     * @return View
     */
    #[Attributes\Get(uri: '{budget}/edit')]
    public function edit(Budget $budget): \Illuminate\Contracts\View\View
    {
        return $this->view('budget.index');
    }

    /**
     * @param Request $request
     * @param Budget $budget
     * @return RedirectResponse
     */
    #[Attributes\Put(uri: '{budget}/edit')]
    public function update(Request $request, Budget $budget): \Illuminate\Http\RedirectResponse
    {
        (new UpdateBudget(budget: $budget, inputs: $request->input()))
            ->handle();
        return back();
    }
}
