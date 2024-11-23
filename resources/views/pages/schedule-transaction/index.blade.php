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
                                                             class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
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
                            <form>
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <label class="required" for="date_to">Account</label>
                                    <select class="form-select" data-control="select2" name="account_id" data-placeholder="Select an option" data-allow-clear="true">
                                        <option></option>
                                        @foreach($accounts->data as $account)
                                            <option value="{{ $account['id'] }}" @selected(request()->input('account_id') == $account['id'])>{{ $account['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('account_id')
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <label class="required" for="date_to">Category</label>
                                    <select class="form-select" data-control="select2" name="category_id" data-placeholder="Select an option" data-allow-clear="true">
                                        <option></option>
                                        @foreach($categories->data as $category)
                                            <option value="{{ $category['id'] }}" @selected(request()->input('category_id') == $category['id'])>{{ $category['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <label class="required" for="date_to">Transaction Type</label>
                                    <select class="form-select" data-control="select2" name="schedule_type" data-placeholder="Select an option">
                                        <option></option>
                                        @foreach($scheduleTypes->data as $scheduleType)
                                            <option value="{{ $scheduleType['id'] }}" @selected(old('schedule_type') == $scheduleType['id']) @disabled($scheduleType['id'] != \App\Enums\ScheduleTransaction\ScheduleType::DAILY->value)>{{ $scheduleType['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('schedule_type')
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <label class="required" for="date_to">Transaction Type</label>
                                    <select class="form-select" data-control="select2" name="transaction_type" data-placeholder="Select an option" data-allow-clear="true">
                                        <option></option>
                                        @foreach($transactionTypes->data as $type)
                                            <option value="{{ $type['id'] }}" @selected(request()->input('type') == $type['id'])>{{ $type['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('transaction_type')
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>

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
                            </form>
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
                    <th class="min-w-125px">Schedule Type</th>
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
                            {{ $model->schedule_type }}
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
