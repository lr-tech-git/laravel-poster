<!DOCTYPE html>

<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ config('app.name', __('main.main_title')) }}</title>

    <meta name="description" content="{{ getSetting('meta-description') }}" />
    <meta name="keywords" content="{{ getSetting('meta-keywords') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="/css/fonts/boxicons.css" />
    <link rel="stylesheet" href="/css/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/css/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/css/core.css"/>
    <link rel="stylesheet" href="/css/theme-default.css" />
    <link rel="stylesheet" href="/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/css/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/css/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="/css/index.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="/css/page-auth.css">

    <!-- Helpers -->
    <script src="/js/helpers.js"></script>
    <script src="/js/config.js"></script>

</head>

<body>

@yield('content')

<!-- Core JS -->
<script src="/js/jquery.js"></script>
<script src="/js/popper.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/perfect-scrollbar.js"></script>
<script src="/js/hammer.js"></script>
<script src="/js/typeahead.js"></script>
<script src="/js/menu.js"></script>

<!-- Main JS -->
<script src="/js/main.js"></script>

<!-- Page JS -->
<script src="/js/pages-auth.js"></script>

</body>

</html>

<!-- beautify ignore:end -->

