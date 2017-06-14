<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Krept Photography</title>
    <link rel="shortcut icon" href="{{asset(url('favicon.png'))}}" type="image/x-icon">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyles.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="container-fluid main-content">
<div class="row">
    <div class="col-lg-12">
        <div id="thecarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#thecarousel" data-slide-to="0" class="active"></li>
                <li data-target="#thecarousel" data-slide-to="1"></li>
                <li data-target="#thecarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img class="slide_image" src="{{asset('images/IMG_0173.jpg')}}">
                </div>
                <div class="item">
                    <img class="slide_image" src="{{asset('images/IMG_7640.jpg')}}">
                </div>
            </div>


        </div>
    </div>
    <h1 class="brand col-lg-12 text-center"><i class="fa fa-camera-retro"></i> Krept Photography</h1>
    <div class="row launch-area col-lg-12">
        <a style="color: white" href="{{url('/formal')}}" class=".launch-btn btn btn-view-work col-lg-offset-5 text-center">View Work</a>
    </div>
    <div class="row social-area col-lg-12">
        <ul class="list-inline">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i style="margin-left:-5px;" class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i style="margin-left: -5px;" class="fa fa-instagram"></i></a></li>
        </ul>


    </div>

</div>


<script src="{{asset('js/jquery.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script>
    $('.carousel-example-generic').carousel()
</script>
</body>
</html>