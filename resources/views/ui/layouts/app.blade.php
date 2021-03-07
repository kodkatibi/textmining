<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="https://www.yildiz.edu.tr/style/img/yildiz_logo_gercek.svg">

    <title>Text Mining</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('ui/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('ui/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('ui/css/elegant-icons-style.css')}}" rel="stylesheet"/>
    <link href="{{asset('ui/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <!-- Custom styles -->
    <link href="{{asset('ui/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('ui/css/style-responsive.css')}}" rel="stylesheet"/>
@yield('css')

</head>

<body>
<!-- container section start -->
<section id="container" class="">
@include('ui.layouts.header')

@include('ui.layouts.sidebar')

<!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <!-- page start-->
            @yield('content')
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>
<!-- container section end -->
<!-- javascripts -->
<script src="{{asset('ui/js/jquery.js')}}"></script>
<script src="{{asset('ui/js/bootstrap.min.js')}}"></script>
<!-- nice scroll -->
<script src="{{asset('ui/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('ui/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!--custome script for all page-->
<script src="{{asset('ui/js/scripts.js')}}"></script>
@yield('js')

</body>

</html>
