@extends('layouts.app')

@section('app-content')

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span
                            class="path2"></span></i> <input type="text" data-kt-customer-table-filter="search"
                                                             class="form-control form-control-solid w-250px ps-12"
                                                             placeholder="Search"/>
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">

                    <!--begin::Add customer-->
                    <a type="button" href="{{ route('app.budget.create') }}" class="btn btn-primary">
                        Add Budget
                    </a>
                    <!--end::Add customer-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none"
                     data-kt-customer-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-customer-table-select="selected_count"></span>
                        Selected
                    </div>

                    <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">
                        Delete Selected
                    </button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0 table-responsive">

            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                <thead>
                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                    <th class="text-start min-w-70px">Actions</th>
                    <th class="min-w-125px">Related</th>
                    <th class="min-w-125px">Budget Amount</th>
                    <th class="min-w-125px">Description</th>
                    <th class="min-w-125px">Status</th>
                </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                @foreach($budgets ?? [] as $model)
                    <tr>
                        <td class="text-start">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                               data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ route('app.budget.edit', ['budget' => $model->id]) }}"
                                       class="menu-link px-3">
                                        Edit
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <form method="post" action="{{ route('app.budget.destroy', ['budget' => $model->id]) }}">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit" class="menu-link px-3 text-danger" style="border: none; background: none; color: inherit; padding: 0; text-align: left;">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                        <td>
                            {{ "{$model->budgetable?->getBudgetableName()} | {$model->budgetable?->getBudgetableItemName()}"  }}
                        </td>
                        <td>
                            {{ number_format($model->amount) }}
                        </td>
                        <td>
                            {{ $model->description }}
                        </td>
                        <td>
                            {{ $model->status }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ !empty($budgets) ? $budgets->links() : null }}
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection
