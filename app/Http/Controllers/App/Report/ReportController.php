<?php

namespace App\Http\Controllers\App\Report;

use App\Http\Controllers\Api\SelectOption\GlobalSelectOptionController;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Queries\Mutation\MutationQuery;
use App\Queries\Summary\SummaryAccountCashFlowQuery;
use App\Queries\Summary\SummaryCashFlowQuery;
use App\Queries\Summary\SummaryCategoryCashFlowQuery;
use Dentro\Yalr\Attributes;
use Illuminate\Contracts\View\View;

#[Attributes\Prefix('report')]
#[Attributes\Name('report', true, true)]
class ReportController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->setPageTitle('Reports');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: 'mutation', name: 'mutation')]
    public function mutation(): View
    {
        /** @var User $user */
        $user = auth()->user();
        $mutations = MutationQuery::byUser($user->id)
            ->with(['mutable'])
            ->filterColumn()
            ->orderColumn()
            ->getAllDataPaginated();

        $selectOption = new GlobalSelectOptionController();
        $mutationTypes = $selectOption->mutationTypes();

        $this->setData('mutationTypes', $mutationTypes);
        $this->setData('mutations', $mutations);
        return $this->view('pages.report.mutation');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: 'cash-summary', name: 'cash-summary')]
    public function cashSummary(): View
    {
        /** @var User $user */
        $user = auth()->user();
        $summaries = SummaryCashFlowQuery::byUser($user->id)
            ->filterColumn()
            ->orderColumn()
            ->getAllDataPaginated();

        $this->setData('summaries', $summaries);
        return $this->view('pages.report.cash-summary');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: 'account-summary', name: 'account-summary')]
    public function accountSummary(): View
    {
        /** @var User $user */
        $user = auth()->user();
        $summaries = SummaryAccountCashFlowQuery::byUser($user->id)
            ->with(['account:id,name'])
            ->filterColumn()
            ->orderColumn()
            ->getAllDataPaginated();

        $selectOption = new GlobalSelectOptionController();
        $accounts = $selectOption->accounts();

        $this->setData('accounts', $accounts);

        $this->setData('summaries', $summaries);
        return $this->view('pages.report.account-summary');
    }

    /**
     * @return View
     * @throws \Exception
     */
    #[Attributes\Get(uri: 'category-summary', name: 'category-summary')]
    public function categorySummary(): View
    {
        /** @var User $user */
        $user = auth()->user();
        $summaries = SummaryCategoryCashFlowQuery::byUser($user->id)
            ->with(['category:id,name'])
            ->filterColumn()
            ->orderColumn()
            ->getAllDataPaginated();

        $selectOption = new GlobalSelectOptionController();
        $categories = $selectOption->categories();

        $this->setData('categories', $categories);

        $this->setData('summaries', $summaries);
        return $this->view('pages.report.category-summary');
    }
}
