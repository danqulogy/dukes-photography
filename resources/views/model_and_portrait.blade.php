@extends('layouts.main')

@section('content')
    <div class="row gallery">
        <a href="#"><img class="img-responsive sample-3 col-lg-3" src="images/IMG_8822.jpg" alt="Responsive image"></a>
        <a href="#"><img class="img-responsive sample-3 sample-3-mid col-lg-6" src="images/IMG_7576.jpg" alt="Responsive image"></a>
        <a href="#"><img class="img-responsive sample-3 sample-3-last col-lg-3" src="images/IMG_8771.jpg" alt="Responsive image"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive sample-3 col-lg-3" src="images/IMG_1480.jpg" alt="Responsive image"></a>
        <a href="#"><img class="img-responsive sample-3 sample-3-mid col-lg-6" src="images/IMG_9042.jpg" alt="Responsive image"></a>
        <a href="#"><img class="img-responsive sample-3 sample-3-last col-lg-3" src="images/IMG_8517.jpg" alt="Responsive image"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive col-lg-3" src="images/IMG_0152.jpg" alt="Responsive image" style=" height:410px;"></a>
        <a href="#"><img class="img-responsive col-lg-3 sample-3-mid" src="images/IMG_3862.jpg" alt="Responsive image" style=" height:410px;width:26.5%"></a>
        <a href="#"><img class="img-responsive col-lg-6 sample-3-last" src="images/IMG_6309.jpg" alt="Responsive image" style=" height:410px;width:50.3%"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive sample-3 col-lg-3" src="images/IMG_8823.jpg" alt="Responsive image"></a>
        <a href="#"><img class="img-responsive sample-3 sample-3-mid col-lg-6" src="images/IMG_9005.jpg" alt="Responsive image"></a>
        <a href="#"><img class="img-responsive sample-3 sample-3-last col-lg-3" src="images/IMG_8304.jpg" alt="Responsive image"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive col-lg-6" src="images/IMG_8720.jpg" alt="Responsive image" style=" height:400px;width:49.5%"></a>
        <a href="#"><img class="img-responsive col-lg-3 sample-3-mid" src="images/IMG_3093.jpg" alt="Responsive image" style=" height:400px;width:26.1%;"></a>
        <a href="#"><img class="img-responsive col-lg-3 sample-3-last" src="images/IMG_6793.jpg" alt="Responsive image" style=" height:400px;width:26.2%;"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive col-lg-3" src="images/IMG_3841.jpg" alt="Responsive image" style=" height:410px;"></a>
        <a href="#"><img class="img-responsive sample-4-last col-lg-3" src="images/IMG_8616.jpg" alt="Responsive image" style=" height:410px;"></a>
        <a href="#"><img class="img-responsive sample-4-last col-lg-3" src="images/IMG_9122.jpg" alt="Responsive image" style=" height:410px;"></a>
        <a href="#"><img class="img-responsive sample-4-last col-lg-3" src="images/IMG_1580.jpg" alt="Responsive image" style=" height:410px;"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive col-lg-8" src="images/IMG_1244.jpg" alt="Responsive image" style=" height:520px;width:67.4%;"></a>
        <a href="#"><img class="img-responsive col-lg-4 sample-2-last" src="images/IMG_8412.jpg" alt="Responsive image" style=" height:520px;width:33%"></a>
    </div>

    <div class="row gallery">
        <a href="#"><img class="img-responsive col-lg-8" src="images/IMG_9628.jpg" alt="Responsive image" style=" height:530px;width:67.4%;"></a>
        <a href="#"><img class="img-responsive col-lg-4  sample-2-last" src="images/IMG_7820.jpg" alt="Responsive image" style=" height:530px;width:33%;"></a>
    </div>

@endsection

@section('social-links')
    @include('social')
@endsection