<!--begin::Header tablet and mobile-->
<div class="header-mobile py-3">
    <!--begin::Container-->
    <div class="container d-flex flex-stack">
        <!--begin::Mobile logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="index.html">
                <img alt="Logo" src="{{ asset('media/logos/demo9.svg') }}" class="h-35px"/>
            </a>
        </div>
        <!--end::Mobile logo-->

        <!--begin::Aside toggle-->
        <button class="btn btn-icon btn-active-color-primary me-n4" id="kt_aside_toggle">
            <i class="ki-duotone ki-abstract-14 fs-2x"><span class="path1"></span><span class="path2"></span></i>        </button>
        <!--end::Aside toggle-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header tablet and mobile-->

<!--begin::Header-->
<div id="kt_header" class="header  py-6 py-lg-0" 			data-kt-sticky="true"
     data-kt-sticky-name="header"
     data-kt-sticky-offset="{lg: '300px'}"

>
    <!--begin::Container-->
    <div class="header-container  container-xxl ">

        <!--begin::Page title-->
        <div
            class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">

            <!--begin::Heading-->
            <h1 class="d-flex flex-column text-gray-900 fw-bold my-1">
        <span class="text-white fs-1">
            Dashboard        </span>

                <small class="text-gray-600 fs-6 fw-normal pt-2">Create a store with #YDR-124-346 code</small>
            </h1>
            <!--end::Heading-->

        </div>
        <!--end::Page title--->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-center flex-wrap">
            <!--begin::Search-->
            <div class="header-search py-3 py-lg-0 me-3">

                <!--begin::Search-->
                <div
                    id="kt_header_search"
                    class="header-search d-flex align-items-center w-lg-250px"

                    data-kt-search-keypress="true"
                    data-kt-search-min-length="2"
                    data-kt-search-enter="enter"
                    data-kt-search-layout="menu"
                    data-kt-search-responsive="false"

                    data-kt-menu-trigger="auto"
                    data-kt-menu-permanent="true"
                    data-kt-menu-placement="bottom-end"


                >

                    <!--begin::Tablet and mobile search toggle-->
                    <div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
                        <div class="d-flex ">
                            <i class="ki-duotone ki-magnifier fs-1 "><span class="path1"></span><span class="path2"></span></i>                            </div>
                    </div>
                    <!--end::Tablet and mobile search toggle-->

                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden"/>
                        <!--end::Hidden input-->

                        <!--begin::Icon-->
                        <i class="ki-duotone ki-magnifier fs-2 search-icon position-absolute top-50 translate-middle-y ms-4"><span class="path1"></span><span class="path2"></span></i>    <!--end::Icon-->

                        <!--begin::Input-->
                        <input type="text" class="form-control custom-form-control ps-13" name="search" value="" placeholder="Find Goods" data-kt-search-element="input"/>
                        <!--end::Input-->

                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
        <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
    </span>
                        <!--end::Spinner-->

                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><span class="path1"></span><span class="path2"></span></i>    </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Menu-->
                    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
                        <!--begin::Wrapper-->
                        <div data-kt-search-element="wrapper">
                            <!--begin::Recently viewed-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Items-->
                                <div class="scroll-y mh-200px mh-lg-350px">
                                    <!--begin::Category title-->
                                    <h3 class="fs-5 text-muted m-0  pb-5" data-kt-search-element="category-title">
                                        Users            </h3>
                                    <!--end::Category title-->




                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <img src="{{ asset('media/avatars/300-6.jpg') }}" alt=""/>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Karina Clark</span>
                                            <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <img src="{{ asset('media/avatars/300-2.jpg') }}" alt=""/>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Olivia Bold</span>
                                            <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <img src="{{ asset('media/avatars/300-9.jpg') }}" alt=""/>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Ana Clark</span>
                                            <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <img src="{{ asset('media/avatars/300-14.jpg') }}" alt=""/>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Nick Pitola</span>
                                            <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <img src="{{ asset('media/avatars/300-11.jpg') }}" alt=""/>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                            <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Category title-->
                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                                        Customers            </h3>
                                    <!--end::Category title-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="{{ asset('media/svg/brand-logos/volicity-9.svg') }}" alt=""/>
                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Company Rbranding</span>
                                            <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="{{ asset('media/svg/brand-logos/tvit.svg') }}" alt=""/>
                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Company Re-branding</span>
                                            <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="{{ asset('media/svg/misc/infography.svg') }}" alt=""/>
                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Business Analytics App</span>
                                            <span class="fs-7 fw-semibold text-muted">Administration</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="{{ asset('media/svg/brand-logos/leaf.svg') }}" alt=""/>
                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                            <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <img class="w-20px h-20px" src="{{ asset('media/svg/brand-logos/tower.svg') }}" alt=""/>
                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Tower Group Website</span>
                                            <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->

                                    <!--begin::Category title-->
                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                                        Projects            </h3>
                                    <!--end::Category title-->


                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-notepad fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                            <span class="fs-7 fw-semibold text-muted">#45670</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-frame fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                            <span class="fs-7 fw-semibold text-muted">#45690</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                                            <span class="fs-7 fw-semibold text-muted">#21090</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->



                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">
                                <i class="ki-duotone ki-profile-circle fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                            <span class="fs-7 fw-semibold text-muted">#34560</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->


                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Recently viewed-->
                            <!--begin::Recently viewed-->
                            <div class="" data-kt-search-element="main">
                                <!--begin::Heading-->
                                <div class="d-flex flex-stack fw-semibold mb-4">
                                    <!--begin::Label-->
                                    <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                    <!--end::Label-->

                                    <!--begin::Toolbar-->
                                    <div class="d-flex" data-kt-search-element="toolbar">
                                        <!--begin::Preferences toggle-->
                                        <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2" data-bs-toggle="tooltip" title="Show search preferences">
                                        <i class="ki-duotone ki-setting-2 fs-2"><span class="path1"></span><span class="path2"></span></i>                </div>
                                    <!--end::Preferences toggle-->

                                    <!--begin::Advanced search toggle-->
                                    <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
                                        <i class="ki-duotone ki-down fs-2"></i>                </div>
                                    <!--end::Advanced search toggle-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Items-->
                            <div class="scroll-y mh-200px mh-lg-325px">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-laptop fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                                        <span class="fs-7 text-muted fw-semibold">#45789</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart-simple fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                    </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                                        <span class="fs-7 text-muted fw-semibold">#84050</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                                        <span class="fs-7 text-muted fw-semibold">#84250</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                                        <span class="fs-7 text-muted fw-semibold">#67945</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-sms fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                                        <span class="fs-7 text-muted fw-semibold">#84250</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-bank fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                                        <span class="fs-7 text-muted fw-semibold">#45690</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                    </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                                        <span class="fs-7 text-muted fw-semibold">#24005</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Recently viewed-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Icon-->
                            <div class="pt-10 pb-10">
                                <i class="ki-duotone ki-search-list fs-4x opacity-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>    </div>
                            <!--end::Icon-->

                            <!--begin::Message-->
                            <div class="pb-15 fw-semibold">
                                <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                <div class="text-muted fs-7">Please try again with a different query</div>
                            </div>
                            <!--end::Message-->
                        </div>
                        <!--end::Empty-->        </div>
                    <!--end::Wrapper-->

                    <!--begin::Preferences-->
                    <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                        <!--begin::Heading-->
                        <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <!--begin::Radio group-->
                            <div class="nav-group nav-group-fluid">
                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                    All
                </span>
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="type" value="users" />
                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Users
                </span>
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="type" value="orders" />
                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Orders
                </span>
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="type" value="projects" />
                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Projects
                </span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Radio group-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <!--begin::Radio group-->
                            <div class="nav-group nav-group-fluid">
                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                    Has attachment
                </span>
                                </label>
                                <!--end::Option-->

                                <!--begin::Option-->
                                <label>
                                    <input type="radio" class="btn-check" name="attachment" value="any" />
                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Any
                </span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Radio group-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                <option value="next">Within the next</option>
                                <option value="last">Within the last</option>
                                <option value="between">Between</option>
                                <option value="on">On</option>
                            </select>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-6">
                                <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-6">
                                <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                                    <option value="days">Days</option>
                                    <option value="weeks">Weeks</option>
                                    <option value="months">Months</option>
                                    <option value="years">Years</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>

                            <a href="utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Preferences-->
                    <!--begin::Preferences-->
                    <form data-kt-search-element="preferences" class="pt-1 d-none">
                        <!--begin::Heading-->
                        <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="pb-4 border-bottom">
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Projects
            </span>

                                <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
                            </label>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Targets
            </span>
                                <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
                            </label>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Affiliate Programs
            </span>
                                <input class="form-check-input" type="checkbox" value="1" />
                            </label>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Referrals
            </span>
                                <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
                            </label>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="py-4 border-bottom">
                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Users
            </span>
                                <input class="form-check-input" type="checkbox" value="1" />
                            </label>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end pt-7">
                            <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
                            <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Preferences-->    </div>
                <!--end::Menu-->
            </div>
            <!--end::Search-->            </div>
        <!--end::Search-->

        <!--begin::Action-->
        <div class="d-flex align-items-center py-3 py-lg-0">
            <!--begin::Item-->
            <div class="me-3">
                <a href="#" class="btn btn-icon btn-custom btn-active-color-primary position-relative" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-notification-bing fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                        <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                </a>

                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
                    <!--begin::Heading-->
                    <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('{{ asset('media/misc/menu-header-bg.jpg') }}')">
                        <!--begin::Title-->
                        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                            Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Tabs-->
                        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                            <li class="nav-item">
                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
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
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">
                                    <i class="ki-duotone ki-abstract-28 fs-2 text-primary"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                                            <div class="text-gray-500 fs-7">Phase 1 development</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">1 hr</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-danger">
                                    <i class="ki-duotone ki-information fs-2 text-danger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                                            <div class="text-gray-500 fs-7">Confidential staff documents</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">2 hrs</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">
                                    <i class="ki-duotone ki-briefcase fs-2 text-warning"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                                            <div class="text-gray-500 fs-7">Corporeate staff profiles</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">5 hrs</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-success">
                                    <i class="ki-duotone ki-abstract-12 fs-2 text-success"><span class="path1"></span><span class="path2"></span></i>
                                </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                                            <div class="text-gray-500 fs-7">New frontend admin theme</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">2 days</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-primary">
                                    <i class="ki-duotone ki-colors-square fs-2 text-primary"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                                            <div class="text-gray-500 fs-7">Product launch status update</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">21 Jan</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-info">
                                    <i class="ki-duotone ki-picture
 fs-2 text-info"></i>
                                </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
                                            <div class="text-gray-500 fs-7">Collection of banner images</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">21 Jan</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px me-4">
                                <span class="symbol-label bg-light-warning">
                                    <i class="ki-duotone ki-color-swatch fs-2 text-warning"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span></i>
                                </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Title-->
                                        <div class="mb-0 me-2">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
                                            <div class="text-gray-500 fs-7">Collection of SVG icons</div>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">20 March</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Items-->

                            <!--begin::View more-->
                            <div class="py-3 text-center border-top">
                                <a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                                    View All
                                    <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span class="path2"></span></i>                </a>
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
                                        <a href="#" class="btn btn-sm btn-primary px-6"  data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan" >Upgrade</a>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Section-->

                                <!--begin::Illustration-->
                                <div class="text-center px-4">
                                    <img class="mw-100 mh-200px" alt="image" src="{{ asset('media/illustrations/sigma-1/1.png') }}"/>
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Tab panel-->

                        <!--begin::Tab panel-->
                        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                            <!--begin::Items-->
                            <div class="scroll-y mh-325px my-5 px-8">
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">Just now</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">2 hrs</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">5 hrs</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">2 days</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">1 week</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">Mar 5</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">May 15</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">Apr 3</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">Jun 30</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">Jul 10</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">Sep 10</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-4">
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Code-->
                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                        <!--end::Code-->

                                        <!--begin::Title-->
                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Section-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light fs-8">Dec 10</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Items-->

                            <!--begin::View more-->
                            <div class="py-3 text-center border-top">
                                <a href="pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                                    View All
                                    <i class="ki-duotone ki-arrow-right fs-5"><span class="path1"></span><span class="path2"></span></i>                </a>
                            </div>
                            <!--end::View more-->
                        </div>
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Tab content-->
                </div>
                <!--end::Menu-->                </div>
            <!--end::Item-->

            <!--begin::Item-->
            <div class="me-3">
                <a href="#" class="btn btn-icon btn-custom btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-user fs-1"><span class="path1"></span><span class="path2"></span></i>                    </a>

                <!--begin::User account menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img alt="Logo" src="{{ asset('media/avatars/300-1.jpg') }}"/>
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Username-->
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5">
                                    Max Smith                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                </div>

                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                    max@kt.com                </a>
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
                        <a href="account/overview.html" class="menu-link px-5">
                            My Profile
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="apps/projects/list.html" class="menu-link px-5">
                            <span class="menu-text">My Projects</span>
                            <span class="menu-badge">
                <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
            </span>
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-title">My Subscription</span>
                            <span class="menu-arrow"></span>
                        </a>

                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="account/referrals.html" class="menu-link px-5">
                                    Referrals
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="account/billing.html" class="menu-link px-5">
                                    Billing
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="account/statements.html" class="menu-link px-5">
                                    Payments
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="account/statements.html" class="menu-link d-flex flex-stack px-5">
                                    Statements

                                    <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                        <i class="ki-duotone ki-information-5 fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3">
                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications"/>
                                        <span class="form-check-label text-muted fs-7">
                            Notifications
                        </span>
                                    </label>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="account/statements.html" class="menu-link px-5">
                            My Statements
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu separator-->
                    <div class="separator my-2"></div>
                    <!--end::Menu separator-->


                    <!--begin::Menu item-->
                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
                        <a href="#" class="menu-link px-5">
            <span class="menu-title position-relative">
                Language

                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                    English <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('media/flags/united-states.svg') }}" alt=""/>
                </span>
            </span>
                        </a>

                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="account/settings.html" class="menu-link d-flex px-5 active">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset('media/flags/united-states.svg') }}" alt=""/>
                    </span>
                                    English
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset('media/flags/spain.svg') }}" alt=""/>
                    </span>
                                    Spanish
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset('media/flags/germany.svg') }}" alt=""/>
                    </span>
                                    German
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset('media/flags/japan.svg') }}" alt=""/>
                    </span>
                                    Japanese
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="account/settings.html" class="menu-link d-flex px-5">
                    <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset('media/flags/france.svg') }}" alt=""/>
                    </span>
                                    French
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5 my-1">
                        <a href="account/settings.html" class="menu-link px-5">
                            Account Settings
                        </a>
                    </div>
                    <!--end::Menu item-->

                    <!--begin::Menu item-->
                    <div class="menu-item px-5">
                        <a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">
                            Sign Out
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::User account menu-->
            </div>
            <!--end::Item-->

            <!--begin::Theme mode-->
            <div class="d-flex align-items-center me-3">

                <!--begin::Menu toggle-->
                <a href="#" class="btn btn-icon btn-custom btn-active-color-primary" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-night-day theme-light-show fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>    <i class="ki-duotone ki-moon theme-dark-show fs-1"><span class="path1"></span><span class="path2"></span></i></a>
                <!--begin::Menu toggle-->

                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-duotone ki-night-day fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>            </span>
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
                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span class="path2"></span></i>            </span>
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
                <i class="ki-duotone ki-screen fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </span>
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
            <a href="#" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" >New Goal</a>
            <!--end::Item-->
        </div>
        <!--end::Action-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Container-->
