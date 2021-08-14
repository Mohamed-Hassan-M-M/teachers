<!DOCTYPE html>
<html class="loading" @if (app()->getLocale() == 'en') lang="en" data-textdirection="ltr" @else lang="ar"
      data-textdirection="rtl" @endif>
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
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/animate-css/animate.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/chartist-js/chartist.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/flag-icon/css/flag-icon.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/data-tables/css/jquery.dataTables.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/data-tables/css/select.dataTables.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/chartist-js/chartist-plugin-tooltip.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/sweetalert/sweetalert.css")}}">
    <link rel="stylesheet" href="{{asset("app-assets/vendors/select2/select2.min.css")}}" type="text/css">
    <link rel="stylesheet" href="{{asset("app-assets/vendors/select2/select2-materialize.css")}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset("app-assets/vendors/dropify/css/dropify.min.css")}}">
    <!-- END: VENDOR CSS-->
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/style-rtl.min.css")}}">
        <!-- BEGIN: Page Level CSS-->
        <link rel="stylesheet" type="text/css"
              href="{{asset("app-assets/css-rtl/themes/vertical-dark-menu-template/materialize.min.css")}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset("app-assets/css-rtl/themes/vertical-dark-menu-template/style.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/pages/dashboard-modern.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/pages/intro.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/pages/data-tables.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/pages/form-select2.min.css")}}">
        <!-- END: Page Level CSS-->
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css-rtl/custom/custom.css")}}">
        <!-- END: Custom CSS-->
    @else
    <!-- BEGIN: Page Level CSS-->
        <link rel="stylesheet" type="text/css"
              href="{{asset("app-assets/css/themes/vertical-dark-menu-template/materialize.min.css")}}">
        <link rel="stylesheet" type="text/css"
              href="{{asset("app-assets/css/themes/vertical-dark-menu-template/style.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/pages/dashboard-modern.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/pages/intro.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/pages/data-tables.min.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/pages/form-select2.min.css")}}">
        <!-- END: Page Level CSS-->
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset("app-assets/css/custom/custom.css")}}">
        <!-- END: Custom CSS-->
    @endif

</head>
<!-- END: Head-->
<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   "
    data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

<!-- BEGIN: Header-->
@include('layouts.admin._header')
<!-- END: Header-->

<!-- BEGIN: SideNav-->
@include('layouts.admin._aside')
<!-- END: SideNav-->

<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        @yield('content')
    </div>
</div>
<!-- END: Page Main-->

<!-- Theme Customizer -->

<a
    href="#"
    data-target="theme-cutomizer-out"
    class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"
><i class="material-icons">settings</i></a
>

<div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
    <div class="col s12">
        <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
        <h5 class="theme-cutomizer-title">Theme Customizer</h5>
        <p class="medium-small">Customize & Preview in Real Time</p>
        <div class="menu-options">
            <h6 class="mt-6">Menu Options</h6>
            <hr class="customize-devider"/>
            <div class="menu-options-form row">
                <div class="input-field col s12 menu-color mb-0">
                    <p class="mt-0">Menu Color</p>
                    <div class="gradient-color center-align">
                        <span class="menu-color-option gradient-45deg-indigo-blue"
                              data-color="gradient-45deg-indigo-blue"></span>
                        <span
                            class="menu-color-option gradient-45deg-purple-deep-orange"
                            data-color="gradient-45deg-purple-deep-orange"
                        ></span>
                        <span
                            class="menu-color-option gradient-45deg-light-blue-cyan"
                            data-color="gradient-45deg-light-blue-cyan"
                        ></span>
                        <span
                            class="menu-color-option gradient-45deg-purple-amber"
                            data-color="gradient-45deg-purple-amber"
                        ></span>
                        <span
                            class="menu-color-option gradient-45deg-purple-deep-purple"
                            data-color="gradient-45deg-purple-deep-purple"
                        ></span>
                        <span
                            class="menu-color-option gradient-45deg-deep-orange-orange"
                            data-color="gradient-45deg-deep-orange-orange"
                        ></span>
                        <span class="menu-color-option gradient-45deg-green-teal"
                              data-color="gradient-45deg-green-teal"></span>
                        <span
                            class="menu-color-option gradient-45deg-indigo-light-blue"
                            data-color="gradient-45deg-indigo-light-blue"
                        ></span>
                        <span class="menu-color-option gradient-45deg-red-pink"
                              data-color="gradient-45deg-red-pink"></span>
                    </div>
                    <div class="solid-color center-align">
                        <span class="menu-color-option red" data-color="red"></span>
                        <span class="menu-color-option purple" data-color="purple"></span>
                        <span class="menu-color-option pink" data-color="pink"></span>
                        <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                        <span class="menu-color-option cyan" data-color="cyan"></span>
                        <span class="menu-color-option teal" data-color="teal"></span>
                        <span class="menu-color-option light-blue" data-color="light-blue"></span>
                        <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                        <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
                    </div>
                </div>
                <div class="input-field col s12 menu-bg-color mb-0">
                    <p class="mt-0">Menu Background Color</p>
                    <div class="gradient-color center-align">
                  <span
                      class="menu-bg-color-option gradient-45deg-indigo-blue"
                      data-color="gradient-45deg-indigo-blue"
                  ></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                            data-color="gradient-45deg-purple-deep-orange"
                        ></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                            data-color="gradient-45deg-light-blue-cyan"
                        ></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-purple-amber"
                            data-color="gradient-45deg-purple-amber"
                        ></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                            data-color="gradient-45deg-purple-deep-purple"
                        ></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                            data-color="gradient-45deg-deep-orange-orange"
                        ></span>
                        <span class="menu-bg-color-option gradient-45deg-green-teal"
                              data-color="gradient-45deg-green-teal"></span>
                        <span
                            class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                            data-color="gradient-45deg-indigo-light-blue"
                        ></span>
                        <span class="menu-bg-color-option gradient-45deg-red-pink"
                              data-color="gradient-45deg-red-pink"></span>
                    </div>
                    <div class="solid-color center-align">
                        <span class="menu-bg-color-option red" data-color="red"></span>
                        <span class="menu-bg-color-option purple" data-color="purple"></span>
                        <span class="menu-bg-color-option pink" data-color="pink"></span>
                        <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                        <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                        <span class="menu-bg-color-option teal" data-color="teal"></span>
                        <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                        <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                        <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Menu Dark
                        <label class="float-right"
                        ><input class="menu-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                            ></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Menu Collapsed
                        <label class="float-right"
                        ><input class="menu-collapsed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                            ></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        <p class="mt-0">Menu Selection</p>
                        <label>
                            <input
                                class="menu-selection-radio with-gap"
                                value="sidenav-active-square"
                                name="menu-selection"
                                type="radio"
                            />
                            <span>Square</span>
                        </label>
                        <label>
                            <input
                                class="menu-selection-radio with-gap"
                                value="sidenav-active-rounded"
                                name="menu-selection"
                                type="radio"
                            />
                            <span>Rounded</span>
                        </label>
                        <label>
                            <input class="menu-selection-radio with-gap" value="" name="menu-selection" type="radio"/>
                            <span>Normal</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="mt-6">Navbar Options</h6>
        <hr class="customize-devider"/>
        <div class="navbar-options row">
            <div class="input-field col s12 navbar-color mb-0">
                <p class="mt-0">Navbar Color</p>
                <div class="gradient-color center-align">
                    <span class="navbar-color-option gradient-45deg-indigo-blue"
                          data-color="gradient-45deg-indigo-blue"></span>
                    <span
                        class="navbar-color-option gradient-45deg-purple-deep-orange"
                        data-color="gradient-45deg-purple-deep-orange"
                    ></span>
                    <span
                        class="navbar-color-option gradient-45deg-light-blue-cyan"
                        data-color="gradient-45deg-light-blue-cyan"
                    ></span>
                    <span class="navbar-color-option gradient-45deg-purple-amber"
                          data-color="gradient-45deg-purple-amber"></span>
                    <span
                        class="navbar-color-option gradient-45deg-purple-deep-purple"
                        data-color="gradient-45deg-purple-deep-purple"
                    ></span>
                    <span
                        class="navbar-color-option gradient-45deg-deep-orange-orange"
                        data-color="gradient-45deg-deep-orange-orange"
                    ></span>
                    <span class="navbar-color-option gradient-45deg-green-teal"
                          data-color="gradient-45deg-green-teal"></span>
                    <span
                        class="navbar-color-option gradient-45deg-indigo-light-blue"
                        data-color="gradient-45deg-indigo-light-blue"
                    ></span>
                    <span class="navbar-color-option gradient-45deg-red-pink"
                          data-color="gradient-45deg-red-pink"></span>
                </div>
                <div class="solid-color center-align">
                    <span class="navbar-color-option red" data-color="red"></span>
                    <span class="navbar-color-option purple" data-color="purple"></span>
                    <span class="navbar-color-option pink" data-color="pink"></span>
                    <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
                    <span class="navbar-color-option cyan" data-color="cyan"></span>
                    <span class="navbar-color-option teal" data-color="teal"></span>
                    <span class="navbar-color-option light-blue" data-color="light-blue"></span>
                    <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
                    <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
                </div>
            </div>
            <div class="input-field col s12">
                <div class="switch">
                    Navbar Dark
                    <label class="float-right"
                    ><input class="navbar-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
            <div class="input-field col s12">
                <div class="switch">
                    Navbar Fixed
                    <label class="float-right"
                    ><input class="navbar-fixed-checkbox" type="checkbox" checked/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
        </div>
        <h6 class="mt-6">Footer Options</h6>
        <hr class="customize-devider"/>
        <div class="navbar-options row">
            <div class="input-field col s12">
                <div class="switch">
                    Footer Dark
                    <label class="float-right"
                    ><input class="footer-dark-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
            <div class="input-field col s12">
                <div class="switch">
                    Footer Fixed
                    <label class="float-right"
                    ><input class="footer-fixed-checkbox" type="checkbox"/> <span class="lever ml-0"></span
                        ></label>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Theme Customizer -->

<!-- BEGIN: Footer-->

@include('layouts.admin._footer')

<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->
<script src="{{asset("app-assets/js/vendors.min.js")}}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset("app-assets/vendors/chartjs/chart.min.js")}}"></script>
<script src="{{asset("app-assets/vendors/chartist-js/chartist.min.js")}}"></script>
<script src="{{asset("app-assets/vendors/chartist-js/chartist-plugin-tooltip.js")}}"></script>
<script src="{{asset("app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js")}}"></script>
<script src="{{asset("app-assets/vendors/data-tables/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("app-assets/vendors/data-tables/js/dataTables.select.min.js")}}"></script>
<script src="{{asset("app-assets/vendors/sweetalert/sweetalert.min.js")}}"></script>
<script src="{{asset("app-assets/vendors/select2/select2.full.min.js")}}"></script>
<script src="{{asset("app-assets/vendors/dropify/js/dropify.min.js")}}"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{asset("app-assets/js/plugins.min.js")}}"></script>
<script src="{{asset("app-assets/js/search.min.js")}}"></script>
<script src="{{asset("app-assets/js/custom/custom-script.min.js")}}"></script>
<script src="{{asset("app-assets/js/scripts/customizer.min.js")}}"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset("app-assets/js/scripts/dashboard-modern.js")}}"></script>
<script src="{{asset("app-assets/js/scripts/intro.min.js")}}"></script>
<script src="{{asset("app-assets/js/scripts/data-tables.min.js")}}"></script>
<script src="{{asset("app-assets/js/scripts/extra-components-sweetalert.min.js")}}"></script>
<script src="{{asset("app-assets/js/scripts/form-select2.min.js")}}"></script>
<script src="{{asset("app-assets/js/scripts/form-file-uploads.min.js")}}"></script>
<!-- END PAGE LEVEL JS-->
<script>
    $(document).ready( function () {

        $('.dropify').dropify({
            messages: {
                'default2': '@lang("teacher.d and d")',
                'replace': '@lang("teacher.d and d r")',
                'remove':  '@lang("teacher.remove")',
                'error':   '@lang("teacher.err")'
            }
        });

        $('.dropify').dropify({
            error: {
                'imageFormat': `{{__("teacher.wrong format")}} (${value}  {{__("teacher.only")}}).`
            }
        });

        $('.dropify').dropify({
            tpl: {
                wrap:            '<div class="dropify-wrapper"></div>',
                loader:          '<div class="dropify-loader"></div>',
                message:         `<div class="dropify-message"><span class="file-icon" /> <p>${default2}</p></div>`,
                preview:         `<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">${replace}</p></div></div></div>`,
                filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
                clearButton:     `<button type="button" class="dropify-clear">${remove}</button>`,
                errorLine:       `<p class="dropify-error">${error}</p>`,
                errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
            }
        });

        var quill = new Quill('#editor', {
            modules: {
                toolbar: '#toolbar'
            },
            theme: 'snow'
        });

        $("#page-length-option").dataTable().fnDestroy();
        $('#page-length-option').DataTable({
            responsive: true,
            @if(app()->getLocale() == 'ar')
            "language": {
                "emptyTable": "لا يوجد بيانات",
                "info": "عرض صفحة _PAGE_ من _PAGES_",
                "infoEmpty": "لا يوجد بيانات لعرضها",
                "search": "بحث: ",
                "paginate": {
                    "next":       "التالي",
                    "previous":   "السابق"
                },
                "infoFiltered":   "(تمت التصفية من _MAX_ اجماي البيانات)",
                "zeroRecords":    "لم يتم العثور على بيانات مطابقة",
                "lengthMenu":     "عرض _MENU_ صفوف",
            }
            @endif
        });

        $("body").on("click",".removeModule",function(e){
            e.preventDefault();
            var formelem = $(this).parent();
            swal({
                title: "@lang('general.sure')",
                text: "@lang('general.cant recover')",
                icon: 'warning',
                dangerMode: true,
                buttons: {
                    cancel: "@lang('general.cancel')",
                    delete: "@lang('general.delete')",
                }
            }).then(function (willDelete) {
                if (willDelete) {
                    swal("@lang('general.poof')", {
                        icon: "success",
                        buttons: {
                            ok: "@lang('general.ok')"
                        }
                    }).then(function (yesDelete) {
                       if (yesDelete){
                           formelem.submit();
                       }
                    });
                } else {
                    swal("@lang('general.safe')", {
                        title: "@lang('general.cancelled')",
                        icon: "error",
                        buttons: {
                            ok: "@lang('general.ok')"
                        }
                    });
                }
            });
        });
    });
</script>

@include('admin.partials._errors')
@include('admin.partials._session')
@stack('scripts')
</body>
</html>
