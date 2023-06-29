<!--begin::Menu wrapper-->
<div id="kt_app_header_menu_wrapper" class="d-flex align-items-center w-100">
    <!--begin::Header menu-->
    <div class="app-header-menu app-header-mobile-drawer align-items-start align-items-lg-center w-100"
         data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
         data-kt-drawer-activate="{default: true, lg: false}"
         data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end"
         data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
         data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
         data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
        <!--begin::Menu-->
        <div class="
                menu
                menu-rounded
                menu-column
                menu-lg-row
                menu-active-bg
                menu-state-primary
                menu-title-gray-700
                menu-arrow-gray-400
                menu-bullet-gray-400
                my-5
                my-lg-0
                align-items-stretch
                fw-semibold
                px-2
                px-lg-0
            " id="#kt_header_menu" data-kt-menu="true">
            <!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                 data-kt-menu-offset="-100,0"
                 class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                <!--begin:Menu link-->
                <span class="menu-link"><span class="menu-title">Dashboards</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span>
                <!--end:Menu link-->
            </div><!--end:Menu item--><!--begin:Menu item-->
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                 data-kt-menu-offset="-300,0" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                <!--begin:Menu link-->
                <a class="menu-link" href="{{ route('product.index') }}"><span class="menu-title">Product</span>
                    <span class="menu-arrow d-lg-none"></span>
                </a><!--end:Menu link-->
            </div><!--end:Menu item-->
            <!--begin:Menu item-->

            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                 class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                <!--begin:Menu link--><span class="menu-link"><span class="menu-title">Master Data</span><span
                        class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                    <!--begin:Menu item-->
                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                    href="{{ route('rak.index') }}"
                                                                    title="Check out over 200 in-house components, plugins and ready for use solutions"
                                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                    data-bs-dismiss="click"
                                                                    data-bs-placement="right"><span class="menu-icon"><i
                                    class="ki-outline ki-rocket fs-2"></i></span><span
                                class="menu-title">Rak</span></a><!--end:Menu link--></div>
                    <!--end:Menu item--><!--begin:Menu item-->
                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                                    href="{{ route('lokasi.index') }}"
                                                                    title="Check out the complete documentation"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-dismiss="click"
                                                                    data-bs-placement="right"><span
                                class="menu-icon"><i class="ki-outline ki-abstract-26 fs-2"></i></span><span
                                class="menu-title">Lokasi</span></a><!--end:Menu link--></div>
                    <!--end:Menu item--><!--begin:Menu item-->
                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="{{ route('category.index') }}"
                                                                    title="Build your layout and export HTML for server side integration"
                                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                    data-bs-dismiss="click"
                                                                    data-bs-placement="right"><span class="menu-icon"><i
                                    class="ki-outline ki-switch fs-2"></i></span><span class="menu-title">Kategori</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                    <div class="menu-item"><!--begin:Menu link--></div>
                    <!--end:Menu item-->
                </div><!--end:Menu sub-->
            </div><!--end:Menu item-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Header menu-->
</div>
<!--end::Menu wrapper-->
