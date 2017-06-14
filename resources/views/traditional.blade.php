@extends('layouts.main')

@section('content')
    <div class="row gallery">
        <a href="images/1.jpg"><img class="img-responsive col-lg-4" src="images/1.jpg" alt="Responsive image" style=" height:500px;"></a>
        <a href="#"><img class="img-responsive col-lg-8" src="images/2.jpg" alt="Responsive image" style=" height:500px;"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive col-lg-6" src="images/IMG_0126.jpg" alt="Responsive image" style=" height:380px;"></a>
        <a href="#"><img class="img-responsive col-lg-6" src="images/IMG_0184.jpg" alt="Responsive image" style=" height:380px;"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive col-lg-6" src="images/IMG_0214.jpg" alt="Responsive image" style=" height:380px;"></a>
        <a href="#"><img class="img-responsive col-lg-6" src="images/IMG_0225.jpg" alt="Responsive image" style=" height:380px;"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive col-lg-6" src="images/IMG_0241.jpg" alt="Responsive image" style=" height:400px;"></a>
        <a href="#"><img class="img-responsive col-lg-6" src="images/IMG_0284.jpg" alt="Responsive image" style=" height:400px;"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive col-lg-6" src="images/IMG_0316.jpg" alt="Responsive image" style=" height:400px;"></a>
        <a href="#"><img class="img-responsive col-lg-6" src="images/IMG_0328.jpg" alt="Responsive image" style=" height:400px;"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive col-lg-8" src="images/IMG_0410.jpg" alt="Responsive image" style=" height:500px;"></a>
        <a href="#"><img class="img-responsive col-lg-4" src="images/IMG_0417.jpg" alt="Responsive image" style=" height:500px;"></a>
    </div>

@endsection

@section('social-links')
@include('social')
@endsection
