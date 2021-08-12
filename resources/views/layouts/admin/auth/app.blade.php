<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="Mohamed Hassan">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset("app-assets/images/favicon/apple-touch-icon-152x152.png")}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("app-assets/images/favicon/favicon-32x32.png")}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/vendors.min.css")}}">
    <!-- END: VENDOR CSS-->

    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset("app-assets/css/themes/vertical-dark-menu-template/materialize.min.css")}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset("app-assets/css/themes/vertical-dark-menu-template/style.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/pages/login.css")}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/custom/custom.css")}}">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 1-column login-bg   blank-page blank-page"
    data-open="click" data-menu="vertical-dark-menu" data-col="1-column">
<div class="row">
    <div class="col s12">
        @yield('content')
    </div>
    <div class="content-overlay"></div>
</div>
</div>

<!-- BEGIN VENDOR JS-->
<script src="{{asset("app-assets/js/vendors.min.js")}}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{asset("app-assets/js/plugins.min.js")}}"></script>
<script src="{{asset("app-assets/js/search.min.js")}}"></script>
<script src="{{asset("app-assets/js/custom/custom-script.min.js")}}"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
@include('admin.partials._errors')
@include('admin.partials._session')
</body>
</html>
