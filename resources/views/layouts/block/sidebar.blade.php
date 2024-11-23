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
                            <i
                                class="ki-duotone ki-notification-status fs-2x"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span>
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
            <div class="menu-item py-2">
                <span class="menu-link menu-center">
                    <span class="menu-icon me-0">
                        <a class="menu-link active" href="index.html">
                           <i class="ki-duotone ki-abstract-26 fs-2x">
                               <span class="path1"></span>
                               <span class="path2"></span>
                           </i>
                        </a>
                    </span>
                </span>
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item py-2">
                <span class="menu-link menu-center">
                    <span class="menu-icon me-0">
                        <a class="menu-link active" href="index.html">
                           <i class="ki-duotone ki-briefcase fs-2x">
                               <span class="path1"></span>
                               <span class="path2"></span>
                           </i>
                        </a>
                    </span>
                </span>
            </div>
            <!--end:Menu item-->s
        </div>
    </div>
    <!--end::Aside menu-->
</div>
