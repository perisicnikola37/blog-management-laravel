<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Default meta data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fff">

    <!-- Meta info -->
    <meta name="author" content="Nikola Perišić">
    <!-- Website Description -->
    <meta name="description" content="#">
    <meta name="keywords" content="blog nature pets sport">

    <!-- Website Title -->
    <title>Dashboard | Edwin's Blog</title>

    {{-- Website avatar --}}
    <link rel="icon" type="image/x-icon" href="https://media.istockphoto.com/photos/silhouette-of-profile-guy-in-shirt-with-white-button-in-aqua-menthe-picture-id1206439390?k=20&m=1206439390&s=170667a&w=0&h=wDX4xov95UOzjOgOkTqRurDiTepjhqAA7Q2iFofrO5c=" />

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('styles/dashboard_custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{asset('css/dashboard_custom.css')}}" rel="stylesheet">

    <x-head.tinymce-config/>
  
</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    @include('layouts.includes.admin_nav') 

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href=""><i class="fa fa-dashboard fa-fw"></i> Profile</a>
                </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                @yield('content')
                <br><br>
                @yield('pagination') 
                @yield('scripts')
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    @yield('error')
</div>

<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('js/app2.js')}}"></script>
<script src="{{asset('js/libs.js')}}"></script>

{{-- Custom Font Awesome kit --}}
<script src="https://kit.fontawesome.com/2824446f9a.js" crossorigin="anonymous"></script>

<!-- Custom Scripts -->
<script src="{{asset('js/scripts/scroll_to_top.js')}}"></script>
<script src="{{asset('js/scripts/scroll_indicator.js')}}"></script>
<script src="{{asset('js/scripts/sweet_alert.js')}}"></script>

</body>

</html>
