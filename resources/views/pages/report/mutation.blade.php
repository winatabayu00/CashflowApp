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
                                @include('components.filters.date-filter')

                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <label class="required" for="date_to">Account</label>
                                    <select class="form-select" data-control="select2" name="type" data-placeholder="Select an option" data-allow-clear="true">
                                        <option></option>
                                        @foreach($mutationTypes->data as $mutationType)
                                            <option value="{{ $mutationType['id'] }}" @selected(request()->input('type') == $mutationType['id'])>{{ $mutationType['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('type')
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
                    <th class="min-w-125px">Account</th>
                    <th class="min-w-125px">Info</th>
                    <th class="min-w-125px">type</th>
                    <th class="min-w-125px">Amount Before</th>
                    <th class="min-w-125px">Amount</th>
                    <th class="min-w-125px">Amount After</th>
                    <th class="min-w-125px">Date Transaction</th>
                    <th class="min-w-125px">Created Date</th>
                </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                @foreach($mutations ?? [] as $model)
                    <tr>
                        <td>
                            <a href="#" class="text-gray-800 text-hover-primary mb-1">
                                {{ $model->mutable->getMutableItemName() }}
                            </a>
                        </td>

                        <td>
                            {{ $model->info }}
                        </td>

                        <td>
                        <span
                            class="badge badge-{{ $model->type == \App\Enums\Transactional\Mutation\MutationType::IN->value ? 'success' : 'danger' }}">
                            {{ $model->type }}
                        </span>
                        </td>

                        <td>
                            {{ number_format($model->amount_before) }}
                        </td>
                        <td>
                            {{ number_format($model->amount) }}
                        </td>
                        <td>
                            {{ number_format($model->amount_after) }}
                        </td>
                        <td>
                            {{ \Illuminate\Support\Carbon::parse($model->date)->format('d M Y') }}
                        </td>

                        <td>
                            {{ \Illuminate\Support\Carbon::parse($model->created_at)->format('d M Y, h:i A') }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ !empty($mutations) ? $mutations->links() : null }}
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
@endsection
