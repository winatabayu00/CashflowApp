<?php

namespace App\Http\Controllers\App\Budget;

use App\Actions\Budget\CreateBudget;
use App\Actions\Budget\UpdateBudget;
use App\Http\Controllers\Api\SelectOption\GlobalSelectOptionController;
use App\Http\Controllers\Controller;
use App\Models\Budget\Budget;
use App\Models\User;
use App\Queries\Budget\BudgetQuery;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

#[Attributes\Prefix('budget')]
#[Attributes\Name('budget', true, true)]
class BudgetController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->setPageTitle('Budget');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: '', name: 'index')]
    public function index(): \Illuminate\Contracts\View\View
    {
        $user = auth()->user();
        $budgets = BudgetQuery::byUser($user->id)
            ->with(['budgetable'])
            ->filterColumn()
            ->orderColumn()
            ->getAllDataPaginated();

        $this->setData('budgets', $budgets);
        return $this->view('pages.budget.index');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: 'create', name: 'create')]
    public function create(): \Illuminate\Contracts\View\View
    {
        $controller = new GlobalSelectOptionController();
        $budgetStatus = $controller->budgetStatus();

        $this->setData('budgetStatus', $budgetStatus);
        return $this->view('pages.budget.create');
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
        sendIndicator('SUCCESS', '', true)->duration(5000);
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
    #[Attributes\Get(uri: '{budget}/edit', name: 'edit')]
    public function edit(Budget $budget): \Illuminate\Contracts\View\View
    {
        $controller = new GlobalSelectOptionController();
        $budgetStatus = $controller->budgetStatus();

        $this->setData('budgetStatus', $budgetStatus);
        setDefaultRequest($budget->toArray());
        return $this->view('pages.budget.edit');
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
        sendIndicator('SUCCESS', '', true)->duration(5000);

        return back();
    }

    /**
     * @param Request $request
     * @param Budget $budget
     * @return RedirectResponse
     * @throws \Exception
     */
    #[Attributes\Delete(uri: '{budget}/destroy', name: 'destroy')]
    public function destroy(Request $request, Budget $budget): \Illuminate\Http\RedirectResponse
    {
        $budget->delete();
        sendIndicator('SUCCESS', '', true)->duration(5000);

        return back();
    }
}
