@extends('layouts.guest')

@section('app-content')
    <div
        class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
        <!--begin::Wrapper-->
        <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">

            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                  method="post"
                  data-kt-redirect-url="{{ route('app.dashboard.index') }}" action="">
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-11">
                    <!--begin::Title-->
                    <h1 class="text-gray-900 fw-bolder mb-3">
                        Sign In
                    </h1>
                    <!--end::Title-->

                    <!--begin::Subtitle-->
                    <div class="text-gray-500 fw-semibold fs-6">
                        Your Social Campaigns
                    </div>
                    <!--end::Subtitle--->
                </div>
                <!--begin::Heading-->

                <!--begin::Separator-->
                <div class="separator separator-content my-14">
                    <span class="w-150px text-gray-500 fw-semibold fs-7">Sign In with email</span>
                </div>
                <!--end::Separator-->

                <!--begin::Input group--->
                <div class="fv-row mb-8">
                    <!--begin::Email-->
                    <input type="text" placeholder="Email" name="email" autocomplete="off"
                           class="form-control bg-transparent" value="{{ old('email') }}"/>
                    <!--end::Email-->

                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!--end::Input group--->
                <div class="fv-row mb-3">
                    <!--begin::Password-->
                    <input type="password" placeholder="Password" name="password" autocomplete="off"
                           class="form-control bg-transparent"/>
                    <!--end::Password-->
                </div>
                <!--end::Input group--->

                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                    <div></div>

                    <!--begin::Link-->
                    {{--                    <a href="reset-password.html" class="link-primary">--}}
                    {{--                        Forgot Password ?--}}
                    {{--                    </a>--}}
                    <!--end::Link-->
                </div>
                <!--end::Wrapper-->

                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                    <button type="submit" id="" class="btn btn-primary">

                        <!--begin::Indicator label-->
                        <span class="indicator-label">
                                            Sign In</span>
                        <!--end::Indicator label-->

                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">
                                            Please wait... <span
                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                        <!--end::Indicator progress-->
                    </button>
                </div>
                <!--end::Submit button-->

                <!--begin::Sign up-->
                <div class="text-gray-500 text-center fw-semibold fs-6">
                    Not a Member yet?

                    <a href="{{ route('auth.register') }}" class="link-primary">
                        Sign up
                    </a>
                </div>
                <!--end::Sign up-->
            </form>
            <!--end::Form-->

        </div>
        <!--end::Wrapper-->
    </div>
@endsection
