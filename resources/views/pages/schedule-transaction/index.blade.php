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
                    <a type="button" href="{{ route('app.schedule-transaction.create') }}" class="btn btn-primary">
                        Add Schedule Transaction
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
            <table class="table align-middle table-row-dashed fs-6 gy-5 " id="kt_customers_table">
                <thead>
                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                    <th class="text-start min-w-70px">Actions</th>
                    <th class="min-w-125px">Account</th>
                    <th class="min-w-125px">Category</th>
                    <th class="min-w-125px">Transaction Type</th>
                    <th class="min-w-125px">Transaction Amount</th>
                    <th class="min-w-125px">Created Date</th>
                    <th class="min-w-125px">Description</th>
                    <th class="min-w-125px">Last Execute</th>
                    <th class="min-w-125px">Repeat</th>
                    <th class="min-w-125px">Status</th>
                </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                @foreach($scheduleTransactions ?? [] as $model)
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
                                    <a href="{{ route('app.schedule-transaction.edit', ['scheduleTransaction' => $model->id]) }}" class="menu-link px-3">
                                        Edit
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <form method="post" action="{{ route('app.schedule-transaction.destroy', ['scheduleTransaction' => $model->id]) }}">
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
                            class="badge badge-{{ $model->transaction_type == \App\Enums\Transaction\TransactionType::INCOME->value ? 'success' : 'danger' }}">
                            {{ $model->transaction_type }}
                        </span>
                        </td>
                        <td>
                            {{ \App\Enums\Account\Currency::tryFrom($model->account->currency)->prefix(). ' '.
                            number_format($model->transaction_amount) }}
                        </td>
                        <td>
                            {{ \Illuminate\Support\Carbon::parse($model->created_at)->format('d M Y, h:i A') }}
                        </td>
                        <td>
                            <p data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $model->transaction_description }}">
                                {{ mb_strimwidth($model->transaction_description, 0, 15, '...') }}
                            </p>
                        </td>
                        <td>
                            {{ $model->last_executed }}
                        </td>
                        <td>
                            {{ $model->repeat }}
                        </td>
                        <td>
                            {{ $model->status }}
                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ !empty($scheduleTransactions) ? $scheduleTransactions->links() : null }}
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection
