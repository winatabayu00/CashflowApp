<!--begin::Header tablet and mobile-->
<div class="header-mobile py-3">
    <!--begin::Container-->
    <div class="container d-flex flex-stack">
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="#">
                <img alt="Logo" src="{{ asset('media/logos/demo9.svg') }}" class="h-35px" />
            </a>
        </div>
        <!--end::Mobile logo-->

        <!--begin::Aside toggle-->
        <button class="btn btn-icon btn-active-color-primary me-n4" id="kt_aside_toggle">
            <i class="ki-duotone ki-abstract-14 fs-2x"><span class="path1"></span><span class="path2"></span></i>
        </button>
        <!--end::Aside toggle-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header tablet and mobile-->

<!--begin::Header-->
<div id="kt_header" class="header  py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header"
    data-kt-sticky-offset="{lg: '300px'}">
    <!--begin::Container-->
    <div class="header-container  container-xxl ">

        <!--begin::Page title-->
        <div
            class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">

            <!--begin::Heading-->
            <h1 class="d-flex flex-column text-gray-900 fw-bold my-1">
                <span class="text-white fs-1">
                    {{ $pageTitle ?? null }} </span>

                <small class="text-gray-600 fs-6 fw-normal pt-2">Create a store with #YDR-124-346 code</small>
            </h1>
            <!--end::Heading-->

        </div>
        <!--end::Page title--->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-center flex-wrap">
            <!--begin::Action-->
            <div class="d-flex align-items-center py-3 py-lg-0">
                <!--begin::Item-->
                <div class="me-3">
                    <a href="#" class="btn btn-icon btn-custom btn-active-color-primary position-relative"
                        data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-notification-bing fs-1"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i> <span
                            class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                    </a>

                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true"
                        id="kt_menu_notifications">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column bgi-no-repeat rounded-top"
                            style="background-image:url('{{ asset('media/misc/menu-header-bg.jpg') }}')">
                            <!--begin::Title-->
                            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                Notifications <span class="fs-8 opacity-75 ps-3">{{ activeUser()->notifications->where('read_at', '=', null)->count() }} unread</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Tabs-->
                            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                <li class="nav-item">
                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                        data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                        data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                </li>


                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab panel-->
                            <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                <!--begin::Items-->
                                <div class="scroll-y mh-325px my-5 px-8">
                                    @foreach(activeUser()->notifications()->orderBy('created_at', 'desc')->limit(10)->get() as $notification)
                                        <!--begin::Item-->
                                        <div class="d-flex flex-stack py-4">
                                            <!--begin::Section-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-primary">
                                                    <i class="ki-duotone ki-abstract-28 fs-2 text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Title-->
                                                <div class="mb-0 me-2">
                                                    <a href="#"
                                                       class="fs-6 text-gray-800 text-hover-primary fw-bold">
                                                        {{ "{$notification->data['title']} - {$notification->data['metadata']['type']}"  }}
                                                    </a>
                                                    <div class="text-gray-500 fs-7">{{ "{$notification->data['metadata']['type']} {$notification->data['metadata']['amount']} {$notification->data['metadata']['description']}" }}</div>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Section-->

                                            <!--begin::Label-->
                                            <span class="badge badge-light fs-8">{{ \Illuminate\Support\Carbon::parse($notification->created_at)->diffForHumans() }}</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                    @endforeach


                                </div>
                                <!--end::Items-->

                                <!--begin::View more-->
                                <div class="py-3 text-center border-top">
                                    <a href="#"
                                        class="btn btn-color-gray-600 btn-active-color-primary">
                                        View All
                                        <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span
                                                class="path2"></span></i> </a>
                                </div>
                                <!--end::View more-->
                            </div>
                            <!--end::Tab panel-->

                            <!--begin::Tab panel-->
                            <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column px-9">
                                    <!--begin::Section-->
                                    <div class="pt-10 pb-0">
                                        <!--begin::Title-->
                                        <h3 class="text-gray-900 text-center fw-bold">
                                            Get Pro Access
                                        </h3>
                                        <!--end::Title-->

                                        <!--begin::Text-->
                                        <div class="text-center text-gray-600 fw-semibold pt-1">
                                            Outlines keep you honest. They stoping you from amazing poorly about drive
                                        </div>
                                        <!--end::Text-->

                                        <!--begin::Action-->
                                        <div class="text-center mt-5 mb-9">
                                            <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Illustration-->
                                    <div class="text-center px-4">
                                        <img class="mw-100 mh-200px" alt="image"
                                            src="{{ asset('media/illustrations/sigma-1/1.png') }}" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Tab panel-->
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="me-3">
                    <a href="#" class="btn btn-icon btn-custom btn-active-color-primary" data-kt-menu-trigger="click"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-user fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </a>

                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{ asset('media/svg/avatars/blank.svg') }}" />
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        {{ activeUser()->name }}
                                    </div>

                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                        {{ activeUser()->email }} </a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{ route('app.profile.index') }}" class="menu-link px-5">
                                My Profile
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->


                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                            <a href="#" class="menu-link px-5">
                                Settings
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <form method="post" action="{{ route('auth.logout') }}">
                                @method('DELETE')
                                @csrf

                                <button type="submit" class="btn btn-danger text-end" >
                                    Sign Out
                                </button>
                            </form>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                </div>
                <!--end::Item-->

                <!--begin::Theme mode-->
                <div class="d-flex align-items-center me-3">

                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-icon btn-custom btn-active-color-primary"
                        data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-night-day theme-light-show fs-1"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                class="path8"></span><span class="path9"></span><span class="path10"></span></i> <i
                            class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span
                                class="path2"></span></i></a>
                    <!--begin::Menu toggle-->

                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span><span
                                            class="path6"></span><span class="path7"></span><span
                                            class="path8"></span><span class="path9"></span><span
                                            class="path10"></span></i> </span>
                                <span class="menu-title">
                                    Light
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <span class="menu-title">
                                    Dark
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> </span>
                                <span class="menu-title">
                                    System
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->

                </div>
                <!--end::Theme mode-->

                <!--begin::Item-->
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
                    Quick Action
                </a>
                <!--end::Item-->
            </div>
            <!--end::Action-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
