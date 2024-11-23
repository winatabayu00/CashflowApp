@extends('layouts.app')

@section('app-content')
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Update Transaction</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Content-->
        <form class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" method="post">
            @csrf
            @method('PUT')
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                @include('pages.transaction._input')
            </div>
            <!--end::Card body-->

            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
            </div>
            <!--end::Actions-->
            <input type="hidden">
        </form>
        <!--end::Content-->
    </div>
@endsection
