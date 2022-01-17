<link href="{{ asset('dash-assets/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
<script src="{{ asset('dash-assets/assets/js/loader.js')}}"></script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="{{ asset('dash-assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dash-assets/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<link href="{{ asset('dash-assets/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('dash-assets/assets/css/elements/miscellaneous.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dash-assets/assets/css/elements/breadcrumb.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dash-assets/assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('dash-assets/plugins/font-icons/fontawesome/css/regular.css')}}" rel="stylesheet">
<link href="{{ asset('dash-assets/plugins/font-icons/fontawesome/css/fontawesome.css')}}" rel="stylesheet">
<link href="{{ asset('dash-assets/plugins/jquery-step/jquery.steps.css')}}" rel="stylesheet">

<!--  END CUSTOM STYLE FILE  -->

<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dash-assets/plugins/table/datatable/dt-global_style.css') }}">
<!-- END PAGE LEVEL STYLES -->
@yield('style')
