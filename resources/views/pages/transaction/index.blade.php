@extends('layouts.app')

@section('app-content')

<div class="row gy-5 gx-xl-10">
    <!--begin::Col-->
    <div class="col-sm-6 col-xl-3 mb-xl-10">
        <!--begin::Card widget 2-->
        <div class="card h-lg-100">
            <!--begin::Body-->
            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                <!--begin::Icon-->
                <div class="m-0">
                    <i class="ki-duotone ki-compass fs-2hx text-gray-600"><span class="path1"></span><span
                            class="path2"></span></i>
                    <span class="h3">Total Income</span>

                </div>
                <!--end::Icon-->

                <!--begin::Section-->
                <div class="d-flex flex-column my-7">
                    <!--begin::Number-->
                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ number_format($summaries['amount_income']) }}</span>
                    <!--end::Number-->
                    <!--begin::Follower-->
                    <div class="m-0">
                        <span class="fw-semibold fs-6 text-gray-500">
                            C APEX </span>

                    </div>
                    <!--end::Follower-->
                </div>
                <!--end::Section-->

                <!--begin::Badge-->
                <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span
                            class="path2"></span></i>
                    2.1%
                </span>
                <!--end::Badge-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card widget 2-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-sm-6 col-xl-3 mb-xl-10">

        <!--begin::Card widget 2-->
        <div class="card h-lg-100">
            <!--begin::Body-->
            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                <!--begin::Icon-->
                <div class="m-0">
                    <i class="ki-duotone ki-chart-simple fs-2hx text-gray-600"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    <span class="h3">Total Expense</span>

                </div>
                <!--end::Icon-->

                <!--begin::Section-->
                <div class="d-flex flex-column my-7">
                    <!--begin::Number-->
                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ number_format($summaries['amount_expense']) }}</span>
                    <!--end::Number-->

                    <!--begin::Follower-->
                    <div class="m-0">
                        <span class="fw-semibold fs-6 text-gray-500">
                            Stock Qty </span>

                    </div>
                    <!--end::Follower-->
                </div>
                <!--end::Section-->

                <!--begin::Badge-->
                <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span
                            class="path2"></span></i>

                    2.1%
                </span>
                <!--end::Badge-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card widget 2-->


    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-sm-6 col-xl-3 mb-xl-10">

        <!--begin::Card widget 2-->
        <div class="card h-lg-100">
            <!--begin::Body-->
            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                <!--begin::Icon-->
                <div class="m-0">
                    <i class="ki-duotone ki-abstract-39 fs-2hx text-gray-600"><span class="path1"></span><span
                            class="path2"></span></i>
                    <span class="h3">Total Balance</span>

                </div>
                <!--end::Icon-->

                <!--begin::Section-->
                <div class="d-flex flex-column my-7">
                    <!--begin::Number-->
                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ number_format($summaries['amount_total']) }}</span>
                    <!--end::Number-->

                    <!--begin::Follower-->
                    <div class="m-0">
                        <span class="fw-semibold fs-6 text-gray-500">
                            Stock Value </span>

                    </div>
                    <!--end::Follower-->
                </div>
                <!--end::Section-->

                <!--begin::Badge-->
                <span class="badge badge-light-danger fs-base">
                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span class="path1"></span><span
                            class="path2"></span></i>

                    0.47%
                </span>
                <!--end::Badge-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card widget 2-->


    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-sm-6 col-xl-3 mb-xl-10">

        <!--begin::Card widget 2-->
        <div class="card h-lg-100">
            <!--begin::Body-->
            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                <!--begin::Icon-->
                <div class="m-0">
                    <i class="ki-duotone ki-map fs-2hx text-gray-600"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span></i>
                    <span class="h3">Total Account</span>

                </div>
                <!--end::Icon-->

                <!--begin::Section-->
                <div class="d-flex flex-column my-7">
                    <!--begin::Number-->
                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ number_format($summaries['total_account']) }}</span>
                    <!--end::Number-->

                </div>
                <!--end::Section-->

                <!--begin::Badge-->
                <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span
                            class="path2"></span></i>

                    2.1%
                </span>
                <!--end::Badge-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card widget 2-->


    </div>
    <!--end::Col-->


</div>

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
                    class="form-control form-control-solid w-250px ps-12" placeholder="Search Customers" />
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                <!--begin::Filter-->
                <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                    data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>
                    Filter
                </button>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true"
                    id="kt-toolbar-filter">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-4 text-gray-900 fw-bold">Filter Options</div>
                    </div>
                    <!--end::Header-->

                    <!--begin::Separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Separator-->

                    <!--begin::Content-->
                    <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-5 fw-semibold mb-3">Month:</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                data-placeholder="Select option" data-allow-clear="true"
                                data-kt-customer-table-filter="month" data-dropdown-parent="#kt-toolbar-filter">
                                <option></option>
                                <option value="aug">August</option>
                                <option value="sep">September</option>
                                <option value="oct">October</option>
                                <option value="nov">November</option>
                                <option value="dec">December</option>
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-5 fw-semibold mb-3">Payment
                                Type:</label>
                            <!--end::Label-->

                            <!--begin::Options-->
                            <div class="d-flex flex-column flex-wrap fw-semibold"
                                data-kt-customer-table-filter="payment_type">
                                <!--begin::Option-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                    <input class="form-check-input" type="radio" name="payment_type" value="all"
                                        checked="checked" />
                                    <span class="form-check-label text-gray-600">
                                        All
                                    </span>
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                    <input class="form-check-input" type="radio" name="payment_type" value="visa" />
                                    <span class="form-check-label text-gray-600">
                                        Visa
                                    </span>
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                    <input class="form-check-input" type="radio" name="payment_type"
                                        value="mastercard" />
                                    <span class="form-check-label text-gray-600">
                                        Mastercard
                                    </span>
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="radio" name="payment_type"
                                        value="american_express" />
                                    <span class="form-check-label text-gray-600">
                                        American Express
                                    </span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2"
                                data-kt-menu-dismiss="true" data-kt-customer-table-filter="reset">Reset
                            </button>

                            <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true"
                                data-kt-customer-table-filter="filter">Apply
                            </button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Menu 1-->
                <!--end::Filter-->

                <!--begin::Export-->
{{--                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"--}}
{{--                    data-bs-target="#kt_customers_export_modal">--}}
{{--                    <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>--}}
{{--                    Export--}}
{{--                </button>--}}
                <!--end::Export-->

                <!--begin::Add customer-->
                <a type="button" href="{{ route('app.transaction.create') }}" class="btn btn-primary">
                    Add Transaction
                </a>
                <!--end::Add customer-->
            </div>
            <!--end::Toolbar-->

            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
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
                    <th class="min-w-125px">Account</th>
                    <th class="min-w-125px">Category</th>
                    <th class="min-w-125px">Transaction Type</th>
                    <th class="min-w-125px">Transaction Amount</th>
                    <th class="min-w-125px">Created Date</th>
                    <th class="min-w-125px">Description</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                @foreach($transactions ?? [] as $model)
                <tr>
                    <td class="text-start">
                        <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i>
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                             data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="{{ route('app.transaction.edit', ['transaction' => $model->id]) }}" class="menu-link px-3">
                                    Edit
                                </a>
                            </div>
                            <!--end::Menu item-->

                            {{--                            <!--begin::Menu item-->--}}
                            {{--                            <div class="menu-item px-3">--}}
                            {{--                                <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">--}}
                            {{--                                    Delete--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            {{--                            <!--end::Menu item-->--}}
                        </div>
                        <!--end::Menu-->
                    </td>
                    <td>
                        <a href="#" class="text-gray-800 text-hover-primary mb-1">
                            {{ $model->account->name }}
                        </a>
                    </td>
                    <td>
                        <a href="#" class="text-gray-600 text-hover-primary mb-1">
                            {{ $model->category->name }}
                        </a>
                    </td>
                    <td>
                        <span
                            class="badge badge-{{ $model->type == \App\Enums\Transaction\TransactionType::INCOME->value ? 'success' : 'danger' }}">
                            {{ $model->type }}
                        </span>
                    </td>
                    <td>
                        {{ \App\Enums\Account\Currency::tryFrom($model->account->currency)->prefix(). ' '.
                        number_format($model->amount) }}
                    </td>
                    <td>
                        {{ \Illuminate\Support\Carbon::parse($model->created_at)->format('d M Y, h:i A') }}
                    </td>
                    <td>
                        <p data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $model->description }}">
                            {{ mb_strimwidth($model->description, 0, 15, '...') }}
                        </p>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ !empty($transactions) ? $transactions->links() : null }}
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
@endsection
