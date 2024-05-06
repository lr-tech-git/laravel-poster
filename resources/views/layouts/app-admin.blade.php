<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-compact layout-menu-fixed" dir="ltr"
      data-theme="theme-default"
      data-assets-path="admin-resources/" data-template="vertical-menu-template">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>{{ config('app.name', __('main.main_title')) }}</title>

    <meta name="description" content="{{ getSetting('meta-description') }}" />
    <meta name="keywords" content="{{ getSetting('meta-keywords') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="/admin-resources/css2" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="/admin-resources/boxicons.css">
    <link rel="stylesheet" href="/admin-resources/fontawesome.css">
    <link rel="stylesheet" href="/admin-resources/flag-icons.css">

    <!-- Core CSS -->

    <link rel="stylesheet" href="/admin-resources/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/admin-resources/perfect-scrollbar.css">
    <link rel="stylesheet" href="/admin-resources/typeahead.css">
    <link rel="stylesheet" href="/admin-resources/datatables.bootstrap5.css">
    <link rel="stylesheet" href="/admin-resources/responsive.bootstrap5.css">
    <link rel="stylesheet" href="/admin-resources/buttons.bootstrap5.css">
    <link rel="stylesheet" href="/admin-resources/select2.css">
    <link rel="stylesheet" href="/admin-resources/apex-charts.css">

    <!-- Helpers -->
    <script src="/admin-resources/helpers.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/admin-resources/config.js"></script>
    <link rel="stylesheet" type="text/css" href="/admin-resources/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" type="text/css" href="/admin-resources/theme-default.css"
          class="template-customizer-theme-css">

    <script type="text/javascript" src="/admin-resources/api.min.js" async="" data-user="252882"
            data-account="269977"></script>
    <script async="" src="/admin-resources/modules.0c2aac1b2d1ba79f2a01.js" charset="utf-8"></script>
</head>

<body>
<!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">

        <!-- Menu -->
        @include('layouts.parts.admin-menu')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

            <!-- Navbar -->
            @include('layouts.parts.admin-navbar')
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">

                <!-- Content -->
                @yield('content')
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column container-fluid">
                        <div class="mb-2 mb-md-0">© <script> document.write(new Date().getFullYear())
                            </script>2023, made by <a href="https://www.lr-technologies.net/" target="_blank" class="footer-link fw-medium">LR-technologies</a>
                        </div>
                        <div class="d-none d-lg-inline-block">
                            <a href="/license" class="footer-link me-4" target="_blank">{{ __('admin-main.footer-menu.license') }}</a>
                            <a href="/documentation" target="_blank" class="footer-link me-4">{{ __('admin-main.footer-menu.documentation') }}</a>
                            <a href="/support" target="_blank" class="footer-link d-none d-sm-inline-block">{{ __('admin-main.footer-menu.support') }}</a>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>

</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<script src="/admin-resources/jquery.js"></script>
<script src="/admin-resources/popper.js"></script>
<script src="/admin-resources/bootstrap.js"></script>
<script src="/admin-resources/perfect-scrollbar.js"></script>
<script src="/admin-resources/hammer.js"></script>
<script src="/admin-resources/i18n.js"></script>
<script src="/admin-resources/typeahead.js"></script>
<script src="/admin-resources/menu.js"></script>
<script src="/js/SortableTable.js"></script>

<!-- endbuild -->

<script>
    $(() => new SortableTable());
</script>

<!-- Vendors JS -->
<script src="/admin-resources/apexcharts.js"></script>
<script type="text/javascript" id="">console.log("TS:GTM Worked!");</script>
<script type="text/javascript" id="">(function (b, c, d) {
        var a = b.createElement("script");
        a.type = "text/javascript";
        a.src = "https://a.omappapi.com/app/js/api.min.js";
        a.async = !0;
        a.dataset.user = c;
        a.dataset.account = d;
        b.getElementsByTagName("head")[0].appendChild(a)
    })(document, 252882, 269977);</script>
<iframe id="_hjSafeContext_19179459" title="_hjSafeContext" tabindex="-1" aria-hidden="true"
        src="/admin-resources/saved_resource.html"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>

<!-- Main JS -->
<script src="/admin-resources/main.js"></script>


<!-- Page JS -->
<script src="/admin-resources/dashboards-analytics.js"></script>

<svg id="SvgjsSvg1412" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
     style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1413"></defs>
    <polyline id="SvgjsPolyline1414" points="0,0"></polyline>
    <path id="SvgjsPath1415"
          d="M-1 217.1625L-1 217.1625C-1 217.1625 61.09071568080357 217.1625 61.09071568080357 217.1625C61.09071568080357 217.1625 122.18143136160714 217.1625 122.18143136160714 217.1625C122.18143136160714 217.1625 183.27214704241072 217.1625 183.27214704241072 217.1625C183.27214704241072 217.1625 244.36286272321428 217.1625 244.36286272321428 217.1625C244.36286272321428 217.1625 305.45357840401783 217.1625 305.45357840401783 217.1625C305.45357840401783 217.1625 366.54429408482144 217.1625 366.54429408482144 217.1625C366.54429408482144 217.1625 427.635009765625 217.1625 427.635009765625 217.1625C427.635009765625 217.1625 427.635009765625 217.1625 427.635009765625 217.1625 "></path>
</svg>

</body>
</html>
