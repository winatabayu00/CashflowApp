<?php

namespace App\Http\Controllers\App\ScheduleTransaction;

use App\Actions\ScheduleTransaction\CreateScheduleTransaction;
use App\Actions\ScheduleTransaction\UpdateScheduleTransaction;
use App\Http\Controllers\Api\SelectOption\GlobalSelectOptionController;
use App\Http\Controllers\Controller;
use App\Models\Transaction\ScheduleTransaction;
use App\Models\User;
use App\Queries\ScheduleTransaction\ScheduleTransactionQuery;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

#[Attributes\Prefix('schedule-transaction')]
#[Attributes\Name('schedule-transaction', true, true)]
class ScheduleTransactionController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->setPageTitle('Schedule Transaction');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: '', name: 'index')]
    public function index(): View
    {
        /** @var User $user */
        $user = auth()->user();
        $scheduleTransactions = ScheduleTransactionQuery::byUser($user->id)
            ->with(['account:id,name,currency', 'category:id,name'])
            ->filterColumn()
            ->orderColumn()
            ->getAllDataPaginated();

        $this->setData('scheduleTransactions', $scheduleTransactions);
        return $this->view('pages.schedule-transaction.index');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: 'create', name: 'create')]
    public function create(): View
    {
        $selectOption = new GlobalSelectOptionController();
        $accounts = $selectOption->accounts();
        $categories = $selectOption->categories();
        $transactionTypes = $selectOption->transactionTypes();
        $scheduleTypes = $selectOption->scheduleTypes();
        $scheduleActions = $selectOption->scheduleActions();

        $this->setData('accounts', $accounts);
        $this->setData('categories', $categories);
        $this->setData('transactionTypes', $transactionTypes);
        $this->setData('scheduleTypes', $scheduleTypes);
        $this->setData('scheduleActions', $scheduleActions);
        return $this->view('pages.schedule-transaction.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    #[Attributes\Post(uri: 'create')]
    public function store(Request $request): RedirectResponse
    {
        /** @var User $user */
        $user = auth()->user();
        (new CreateScheduleTransaction(user: $user, inputs: $request->input()))
            ->handle();
        sendIndicator('SUCCESS', '', true)->duration(5000);
        return back();
    }

    /**
     * @param ScheduleTransaction $scheduleTransaction
     * @return View
     */
    #[Attributes\Get(uri: '{scheduleTransaction}')]
    public function show(ScheduleTransaction $scheduleTransaction): View
    {
        return $this->view('pages.schedule-transaction.index');
    }

    /**
     * @param ScheduleTransaction $scheduleTransaction
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: '{scheduleTransaction}/edit', name: 'edit')]
    public function edit(ScheduleTransaction $scheduleTransaction): View
    {
        $selectOption = new GlobalSelectOptionController();
        $accounts = $selectOption->accounts();
        $categories = $selectOption->categories();
        $transactionTypes = $selectOption->transactionTypes();
        $scheduleTypes = $selectOption->scheduleTypes();
        $scheduleActions = $selectOption->scheduleActions();

        $this->setData('accounts', $accounts);
        $this->setData('categories', $categories);
        $this->setData('transactionTypes', $transactionTypes);
        $this->setData('scheduleTypes', $scheduleTypes);
        $this->setData('scheduleActions', $scheduleActions);

        setDefaultRequest($scheduleTransaction->toArray());
        return $this->view('pages.schedule-transaction.edit');
    }

    /**
     * @param Request $request
     * @param ScheduleTransaction $scheduleTransaction
     * @return RedirectResponse
     */
    #[Attributes\Put(uri: '{scheduleTransaction}/edit')]
    public function update(Request $request, ScheduleTransaction $scheduleTransaction): RedirectResponse
    {
        (new UpdateScheduleTransaction(scheduleTransaction: $scheduleTransaction, inputs: $request->input()))
            ->handle();
        sendIndicator('SUCCESS', '', true)->duration(5000);
        return back();
    }

    /**
     * @param Request $request
     * @param ScheduleTransaction $scheduleTransaction
     * @return RedirectResponse
     * @throws \Exception
     */
    #[Attributes\Delete(uri: '{scheduleTransaction}/destroy', name: 'destroy')]
    public function delete(Request $request, ScheduleTransaction $scheduleTransaction): RedirectResponse
    {
        $scheduleTransaction->delete();
        return back();
    }
}
