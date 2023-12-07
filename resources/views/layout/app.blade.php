<!doctype html>
<html lang="ru">
<head lang="{{(store('languagedata') && store('languagedata')['lang']) ? store('languagedata')['lang'] : ''}}">

    <!--SystemJSvars--><script>var SystemJSvars={"ajaxPath":"\/js\/ajax.php","currentLang":"ru"};</script><!--.SystemJSvars-->
    <meta charset="UTF-8" />
    <title>Онлайн-квартира</title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link href="/apps/admin/admin/template1/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- link href="/apps/system/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" /-->
    <link href="/apps/admin/admin/template1/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/apps/admin/admin/template1/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <link rel="stylesheet" href="/apps/admin/admin/template1/assets/css/ace-fonts.css" />
    <!-- ace styles -->
    <link rel="stylesheet" href="/apps/admin/admin/template1/assets/css/colorbox.css" />
    <link rel="stylesheet" href="/apps/admin/admin/template1/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/apps/admin/admin/template1/assets/css/ace-responsive.min.css" />
    <link rel="stylesheet" href="/apps/admin/admin/template1/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="/apps/admin/admin/template1/assets/css/styles.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <link rel="stylesheet" href="/apps/admin/admin/template/css/admin.css">

    <script type="text/javascript" src="/apps/system/js/jquery/jquery.3.3.1.js"></script>
    <script type="text/javascript" src="/apps/system/js/jquery/jquery-migrate.min.js"></script>
    <script src="/apps/system/js/jquery.ui.touch-punch.min.js"></script>

    <script src="/apps/system/js/bootstrap/js/bootstrap.min.js"></script>

    <script src="/apps/system/js/bootstrap-editable/js/bootstrap-editable.min.js"></script>
    <link rel="stylesheet" href="/apps/system/js/bootstrap-editable/css/bootstrap-editable.css" />

    <script src="/js/interface.js"></script>
    <script src="/js/estate.js"></script>
    <script type="text/javascript" src="/js/jquery.tablesorter.min.js"></script>
    <link href="/css/jquery-ui-1.8.custom.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/apps/system/js/jqueryui/jquery-ui.js"></script>
    <script type="text/javascript" src="/apps/system/js/sitebillcore.js"></script>
    <script type="text/javascript" src="/apps/system/js/mycombobox.js"></script>
    <script type="text/javascript" src="/apps/system/js/jquery.cookie.js"></script>
    <link rel="stylesheet" href="/apps/system/css/jquery-ui.custom.css" />
    <link rel="stylesheet" href="/apps/system/css/mycombobox.css" />
    <link rel="stylesheet" href="/apps/admin/admin/template1/assets/css/jquery.gritter.css" />


    <script>
        var yandex_map_version = '2.1';
    </script>



    <!-- <script type="text/javascript" src="/js/jquery.ui.datepicker.js"></script> -->
    <script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=ru-RU"></script>
    <script src="/apps/admin/admin/template1/assets/js/ace-extra.min.js"></script>


    <script src="/apps/admin/admin/template1/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/apps/admin/admin/template1/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/apps/admin/admin/template1/assets/js/jquery.slimscroll.min.js"></script>
    <script src="/apps/admin/admin/template1/assets/js/jquery.easy-pie-chart.min.js"></script>
    <script src="/apps/admin/admin/template1/assets/js/jquery.sparkline.min.js"></script>
    <script src="/apps/admin/admin/template1/assets/js/flot/jquery.flot.min.js"></script>
    <script src="/apps/admin/admin/template1/assets/js/flot/jquery.flot.pie.min.js"></script>
    <script src="/apps/admin/admin/template1/assets/js/flot/jquery.flot.resize.min.js"></script>
    <script src="/apps/admin/admin/template1/assets/js/bootstrap-tag.min.js"></script>
    <script src="/apps/admin/admin/template1/assets/js/jquery.gritter.min.js"></script>
    <script src="/apps/admin/admin/template1/assets/js/bootbox.min.js"></script>


    <!-- ace scripts -->

    <script src="/apps/admin/admin/template1/assets/js/ace-elements.min.js"></script>
    <script src="/apps/admin/admin/template1/assets/js/ace.min.js"></script>

    <link rel="stylesheet" href="/apps/admin/admin/template1/css/custom.css?v=1" />

    <style>
        .modal.fade{top: -200%;}
        .inline-tags {
            position: relative;
            /*overflow-x: hidden;
            overflow-y: auto;*/
        }
        .inline-tags .tags {
            width: 40px;
        }
        .inline-tags .tags .tag {
            padding-left: 22px;
            padding-right: 9px;
        }
        .inline-tags .tags .tag .close {
            left: 0;
            right: auto;
        }
    </style>




    <script>
        var estate_folder = '';
    </script>
    @if(DEBUG_ENABLED)
        {!!\Sitebill::getdebugbarRenderer()->renderHead()!!}
    @endif

</head>
<body>
<div class="navbar p-0 m-0" id="navbar">
    <script type="text/javascript">
        try {
            ace.settings.check('navbar', 'fixed')
        } catch (e) {
        }
    </script>
    <div class="navbar-inner w-100">
        <div class="container-fluid  flex-row justify-content-start">
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="brand mybrand">
                <a href="{{$sitebill->createUrlTpl('')}}"><img src="/template/frontend/local/champrealty/resources/images/logo.png" style="height: 50px;"></a>
                Онлайн-квартира

            </div>

        </div><!-- /.container-fluid -->
    </div><!-- /.navbar-inner -->
</div>

<div class="main-container container-fluid p-0 m-0">

    @include('admin4::partials.sidebar')
    <div class="main-content">
        <div class="page-content">
            <div class="row-fluid">
                <div class="col-xs-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

@stack('modals')

@stack('scripts')

@if(DEBUG_ENABLED)
    {!!\Sitebill::getdebugbarRenderer()->render()!!}
@endif
<notifications/>

<script src="/apps/vue/dist/js/main.js"></script>
<script src="/apps/admin/admin/template1/assets/js/ace/ace.js"></script>
<script src="/apps/admin/admin/template1/assets/js/ace/ace.widget-box.js"></script>
<script src="/apps/admin/admin/template1/assets/js/ace/ace.widget-on-reload.js"></script>
<script src="/apps/api/js/legacy_api.js"></script>

</body>
</html>
