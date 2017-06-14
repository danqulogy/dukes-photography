<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Krept_Photography_Formal_Wedding</title>
    <link rel="shortcut icon" href="{{asset(url('favicon.png'))}}" type="image/x-icon">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/formal.css')}}">
    @yield('local-styles')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav id="pageTop" class="my-navbar navbar navbar-default">
    <div class="container">
        <!--logo-->
        <div class="row">
            <div class="col-lg-12 navbar-brand">
                <h1><i class="fa fa-camera-retro"></i> Krept Photography</h1>
                <div class="logo-subtitle text-uppercase">Wedding, Portrait and Fashion Photographer</div>
            </div>
            <div class="col-lg-12">
                <!--menu items-->
                <ul  class="nav navbar-nav navbar-right">
                    <li><a class="app-nav" href="{{url('/')}}">Home</a></li>
                    <li class="{{$main_key =='gallery'?'active':''}} menu-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="menu-item dropdown dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wedding</a>
                                <ul class="dropdown-menu">
                                    <li class="{{$view_key =='formal'?'active':''}} menu-item ">
                                        <a href="{{url('/formal')}}">Formal</a>
                                    </li>
                                    <li class="{{$view_key =='traditional'?'active':''}} menu-item ">
                                        <a href="{{url('/traditional')}}">Traditional</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{$view_key =='model_and_portrait'?'active':''}} menu-item "><a class="app-nav" href="{{url('/model_and_portrait')}}">Model &amp; Portrait</a></li>
                            <li class="{{$view_key =='frames'?'active':''}} menu-item "><a class="app-nav" href="{{url('/frames')}}">Frames</a></li>
                        </ul>
                    </li>
                    <li class="{{$view_key =='booking'?'active':''}}"><a href="{{url('/booking')}}">Booking</a></li>
                    {{--<li class="{{$view_key =='edit_here'?'active':''}}"><a href="{{url('/edit_here')}}">Edit Here</a></li>--}}
                    <li class="{{$view_key =='contact'?'active':''}}"><a href="{{url('/contact')}}">Contact Me</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>

<div class="container main-content">
    @yield('content')
    @yield('social-links')

    {{--@include('social')--}}
</div>

<div>
    @yield('footer')
</div>


<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

@yield('local-scripts')

</body>
</html>