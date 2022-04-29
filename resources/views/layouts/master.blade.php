<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('dash-assets/assets/img/favicon.ico')}}"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('inc.layouts.master-style')

</head>

<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
    
    <!--  BEGIN NAVBAR  -->
    {{-- @include('inc.layouts.main-nav') --}}
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        {{-- @include('inc.layouts.topbar') --}}
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="page-header">
                    @yield('page-header')
                </div>

                @yield('content')
            </div>
            @include('inc.layouts.main-footer')
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->


    @include('inc.layouts.master-script')
</body>
</html>
