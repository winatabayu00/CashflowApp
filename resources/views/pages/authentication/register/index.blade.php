@extends('layouts.guest')

@section('app-content')
    <div
        class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px"
    >
        <!--begin::Wrapper-->
        <div
            class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20"
        >
            <!--begin::Form-->
            <form
                class="form w-100"
                novalidate="novalidate"
                action=""
                method="post"
            >
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-11">
                    <!--begin::Title-->
                    <h1 class="text-gray-900 fw-bolder mb-3">Sign Up</h1>
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
                    <span class="w-125px text-gray-500 fw-semibold fs-7"
                    >Sign Up with email</span
                    >
                </div>
                <!--end::Separator-->

                <!--begin::Input group--->
                <div class="fv-row mb-8">
                    <!--begin::Name-->
                    <input
                        type="text"
                        placeholder="Name"
                        name="name"
                        autocomplete="off"
                        value="{{ old('name') }}"
                        class="form-control bg-transparent"
                    />
                    <!--end::Name-->
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!--begin::Input group--->
                <div class="fv-row mb-8">
                    <!--begin::Email-->
                    <input
                        type="text"
                        placeholder="Email"
                        name="email"
                        value="{{ old('email') }}"
                        autocomplete="off"
                        class="form-control bg-transparent"
                    />
                    <!--end::Email-->
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!--begin::Input group-->
                <div class="fv-row mb-8" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input
                                class="form-control bg-transparent"
                                type="password"
                                placeholder="Password"
                                name="password"
                                autocomplete="off"
                            />

                            <span
                                class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                data-kt-password-meter-control="visibility"
                            >
                          <i class="ki-duotone ki-eye-slash fs-2"></i>
                          <i class="ki-duotone ki-eye fs-2 d-none"></i>
                        </span>
                        </div>
                        <!--end::Input wrapper-->

                        <!--begin::Meter-->
                        <div
                            class="d-flex align-items-center mb-3"
                            data-kt-password-meter-control="highlight"
                        >
                            <div
                                class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"
                            ></div>
                            <div
                                class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"
                            ></div>
                            <div
                                class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"
                            ></div>
                            <div
                                class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"
                            ></div>
                        </div>
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->

                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <!--begin::Hint-->
                    <div class="text-muted">
                        Use 8 or more characters with a mix of letters, numbers &
                        symbols.
                    </div>
                    <!--end::Hint-->
                </div>
                <!--end::Input group--->

                <!--end::Input group--->
                <div class="fv-row mb-8">
                    <!--begin::Repeat Password-->
                    <input
                        placeholder="Repeat Password"
                        name="password_confirmation"
                        type="password"
                        autocomplete="off"
                        class="form-control bg-transparent"
                    />
                    <!--end::Repeat Password-->
                </div>
                <!--end::Input group--->

                <!--begin::Accept-->
                <div class="fv-row mb-8">
                    <label class="form-check form-check-inline">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            name="toc"
                            value="1"
                        />
                        <span
                            class="form-check-label fw-semibold text-gray-700 fs-base ms-1"
                        >
                        I Accept the
                        <a href="#" class="ms-1 link-primary">Terms</a>
                      </span>
                    </label>
                </div>
                <!--end::Accept-->

                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        <!--begin::Indicator label-->
                        <span class="indicator-label"> Sign up</span>
                        <!--end::Indicator label-->

                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">
                        Please wait...
                        <span
                            class="spinner-border spinner-border-sm align-middle ms-2"
                        ></span>
                      </span>
                        <!--end::Indicator progress-->
                    </button>
                </div>
                <!--end::Submit button-->

                <!--begin::Sign up-->
                <div class="text-gray-500 text-center fw-semibold fs-6">
                    Already have an Account?

                    <a href="{{ route('auth.login') }}" class="link-primary fw-semibold">
                        Sign in
                    </a>
                </div>
                <!--end::Sign up-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
@endsection
