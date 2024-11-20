<?php

namespace App\Http\Controllers\App\ScheduleTransaction;

use App\Actions\ScheduleTransaction\CreateScheduleTransaction;
use App\Actions\ScheduleTransaction\UpdateScheduleTransaction;
use App\Actions\Transaction\UpdateTransaction;
use App\Http\Controllers\Controller;
use App\Models\Transaction\ScheduleTransaction;
use App\Models\Transaction\Transaction;
use App\Models\User;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

#[Attributes\Prefix('schedule-transaction')]
#[Attributes\Name('schedule-transaction', true, false)]
class ScheduleTransactionController extends Controller
{
    /**
     * @return View
     */
    #[Attributes\Get(uri: '')]
    public function index(): View
    {
        return $this->view('schedule-transaction.index');
    }

    /**
     * @return View
     */
    #[Attributes\Get(uri: 'create')]
    public function create(): View
    {
        return $this->view('schedule-transaction.index');
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
        return back();
    }

    /**
     * @param ScheduleTransaction $scheduleTransaction
     * @return View
     */
    #[Attributes\Get(uri: '{scheduleTransaction}')]
    public function show(ScheduleTransaction $scheduleTransaction): View
    {
        return $this->view('schedule-transaction.index');
    }

    /**
     * @param ScheduleTransaction $scheduleTransaction
     * @return View
     */
    #[Attributes\Get(uri: '{scheduleTransaction}/edit')]
    public function edit(ScheduleTransaction $scheduleTransaction): View
    {
        return $this->view('schedule-transaction.index');
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
        return back();
    }
}
