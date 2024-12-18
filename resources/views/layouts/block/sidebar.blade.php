<div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
    <!--begin::Aside menu-->
    <div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-y scroll-lg-ms d-flex" data-kt-scroll="true"
        data-kt-scroll-activate="{default: false, lg: trur}" data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
        data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
        <div id="kt_aside_menu"
            class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-500 menu-arrow-gray-500 fw-semibold fs-6 my-auto"
            data-kt-menu="true">

            <!--begin:Menu item-->
            <div class="menu-item {{ request()->routeIs('app.dashboard.index') ? 'here': null }} py-2">
                <span class="menu-link menu-center">
                    <span class="menu-icon me-0">
                        <a class="menu-link active" href="{{ route('app.dashboard.index') }}">
                            <i class="ki-duotone ki-home-2 fs-2x">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                    </span>
                </span>
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item {{ request()->routeIs('app.transaction.index') ? 'here': null }} py-2">
                <span class="menu-link menu-center">
                    <span class="menu-icon me-0">
                        <a class="menu-link active" href="{{ route('app.transaction.index') }}">
                            <i class="ki-duotone ki-notification-status fs-2x"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span>
                            </i>
                        </a>
                    </span>
                </span>
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item {{ request()->routeIs('app.schedule-transaction.index') ? 'here': null }} py-2">
                <span class="menu-link menu-center">
                    <span class="menu-icon me-0">
                        <a class="menu-link active" href="{{ route('app.schedule-transaction.index') }}">
                            <i class="ki-duotone ki-abstract-35 fs-2x">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                    </span>
                </span>
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                class="menu-item py-2">
                <!--begin:Menu link--><span class="menu-link menu-center"><span class="menu-icon text-primary me-0"><i
                            class="ki-duotone ki-abstract-26 fs-2x"><span class="path1"></span><span
                                class="path2"></span></i></span></span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu content-->
                        <div class="menu-content "><span class="menu-section fs-5 fw-bolder ps-1 py-1">Reports</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{ route('app.report.mutation') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar-8 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span><span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                            </span>
                            <span
                                class="menu-title">Mutations</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{ route('app.report.cash-summary') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar-8 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span><span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                            </span>
                            <span
                                class="menu-title">Cash Summaries</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{ route('app.report.account-summary') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar-8 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span><span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                            </span>
                            <span
                                class="menu-title">Account Summaries</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->

                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="{{ route('app.report.category-summary') }}">
                            <span class="menu-icon">
                                <i class="ki-duotone ki-calendar-8 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span><span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                            </span>
                            <span
                                class="menu-title">Category Summaries</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item py-2">
                <span class="menu-link menu-center">
                    <span class="menu-icon me-0">
                        <a class="menu-link active" href="{{ route('app.budget.index') }}">
                            <i class="ki-duotone ki-briefcase fs-2x">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                    </span>
                </span>
            </div>
            <!--end:Menu item-->
        </div>
    </div>
    <!--end::Aside menu-->
</div>
