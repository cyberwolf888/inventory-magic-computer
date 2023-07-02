<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href=""/>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="
            The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        "/>
    <meta name="keywords" content="
            metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        "/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="
            Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails,
            Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template
        "/>
    <meta property="og:url" content="https://keenthemes.com/metronic"/>
    <meta property="og:site_name" content="Keenthemes | Metronic"/>
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
    <link rel="shortcut icon" href="{{ env('APP_URL') }}assets/media/logos/favicon.ico"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ env('APP_URL') }}assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{ env('APP_URL') }}assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
          type="text/css"/>
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ env('APP_URL') }}assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="{{ env('APP_URL') }}assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--layout-partial:partials/theme-mode/_init.html-->

<!--layout-partial:layout/partials/_page-loader.html-->
<!--begin::loader-->
<div class="page-loader flex-column">
    <img alt="Logo" class="theme-light-show max-h-50px" src="{{ env('APP_URL') }}assets/media/logos/keenthemes.svg"/>
    <img alt="Logo" class="theme-dark-show max-h-50px" src="{{ env('APP_URL') }}assets/media/logos/keenthemes-dark.svg"/>
    <div class="d-flex align-items-center mt-5">
        <span class="spinner-border text-primary" role="status"></span>
        <span class="text-muted fs-6 fw-semibold ms-5">Loading...</span>
    </div>
</div>
<!--end::Loader-->

<!--layout-partial:layout/_default.html-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
        <!--layout-partial:layout/partials/_header.html-->
        <!--begin::Header-->
        <div id="kt_app_header" class="app-header "
             data-kt-sticky="true" data-kt-sticky-activate-="true" data-kt-sticky-name="app-header-sticky"
             data-kt-sticky-offset="{default: '200px', lg: '300px'}"
        >
            <!--begin::Header container-->
            <div class="app-container  container-xxl d-flex align-items-stretch justify-content-between "
                 id="kt_app_header_container">
                <!--begin::Header wrapper-->
                <div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between"
                     id="kt_app_header_wrapper">
                    <!--layout-partial:layout/partials/header/_logo.html-->
                    <!--begin::Logo wrapper-->
                    <div
                        class="app-header-logo d-flex flex-shrink-0 align-items-center justify-content-between justify-content-lg-center">
                        <!--begin::Logo wrapper-->
                        <button
                            class="btn btn-icon btn-color-gray-600 btn-active-color-primary ms-n3 me-2 d-flex d-lg-none"
                            id="kt_app_sidebar_toggle">
                            <i class="ki-outline ki-abstract-14 fs-2"></i></button>
                        <!--end::Logo wrapper-->
                        <!--begin::Logo image-->
                        <a href="?page=index">
                            <img alt="Logo" src="{{ env('APP_URL') }}assets/media/logos/default-small.svg"
                                 class="h-30px h-lg-40px theme-light-show"/>
                            <img alt="Logo" src="{{ env('APP_URL') }}assets/media/logos/default-small-dark.svg"
                                 class="h-30px h-lg-40px theme-dark-show"/>
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Logo wrapper-->

                    <!--layout-partial:layout/partials/header/_menu.html-->
                    @include('layouts.includes.menu')

                    <!--layout-partial:layout/partials/header/_navbar.html-->
                    @include('layouts.includes.navbar')
                </div>
                <!--end::Header wrapper-->
            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->

        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
            <!--begin::Wrapper container-->
            <div class="app-container  container-xxl d-flex flex-row-fluid ">
                <!--layout-partial:layout/partials/_sidebar.html-->
                @include('layouts.includes.sidebar')


                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--layout-partial:layout/partials/_toolbar.html-->
                        @include('layouts.includes.toolbar')

                        <!--layout-partial:layout/partials/_content.html-->
                        @yield('content')
                    </div>
                    <!--end::Content wrapper-->
                    <!--layout-partial:layout/partials/_footer.html-->
                    <!--begin::Footer-->
                    <div id="kt_app_footer"
                         class="app-footer  d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4 ">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">{{ date('Y') }} &copy;</span>
                            <a href="https://imadehendrawijaya.com" target="_blank" class="text-gray-800 text-hover-primary">I Made Hendra Wijaya</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item"><a href="https://keenthemes.com" target="_blank"
                                                     class="menu-link px-2">About</a></li>
                            <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank"
                                                     class="menu-link px-2">Support</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->
<!--layout-partial:partials/_drawers.html-->


<!--layout-partial:partials/_scrolltop.html-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-outline ki-arrow-up"></i>
</div>
<!--end::Scrolltop-->


<!--begin::Modals-->
@include('layouts.includes.modals.modal_product')
<!--layout-partial:partials/modals/_upgrade-plan.html-->
<!--layout-partial:partials/modals/_invite-friends.html-->
<!--layout-partial:partials/modals/_new-target.html-->
<!--layout-partial:partials/modals/_view-users.html-->
<!--layout-partial:partials/modals/users-search/_main.html-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>
    var hostUrl = "{{ env('APP_URL') }}assets/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ env('APP_URL') }}assets/plugins/global/plugins.bundle.js"></script>
<script src="{{ env('APP_URL') }}assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<script>
    // Retrieve the CSRF token value from the meta tag
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Set the CSRF token as the default header for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });
</script>
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ env('APP_URL') }}assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<script src="{{ env('APP_URL') }}assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
@stack('vendor_js')
<script src="{{ env('APP_URL') }}assets/js/widgets.bundle.js"></script>
<script src="{{ env('APP_URL') }}assets/js/custom/widgets.js"></script>
{{--<script src="{{ env('APP_URL') }}assets/js/custom/apps/chat/chat.js"></script>--}}
{{--<script src="{{ env('APP_URL') }}assets/js/custom/utilities/modals/upgrade-plan.js"></script>--}}
<script src="{{ env('APP_URL') }}assets/js/custom/utilities/modals/new-target.js"></script>
{{--<script src="{{ env('APP_URL') }}assets/js/custom/utilities/modals/users-search.js"></script>--}}
@stack('custom_js')
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
