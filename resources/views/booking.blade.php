@extends('layouts.main')

@section('content')
    <h2 class="text-center">Book Online</h2>
    <hr style="color: black;background: black; height: 2px; width: 5%">
    <div class="container-fluid sub-content">
        <div class="row">
            <div class="col-lg-4 first">
                <a href="#"><img src="images/IMG_7640.jpg" class="img-responsive" alt="responsive image" height="200px" width="auto"></a>
                <center><h3>Wedding Collection</h3></center>
                <center><h4>1hr| introductory meeting</h4></center>
                <center>
                    <div class="btn">
                        <a class="btn btn-default" href="{{url('/booking/wedding')}}" role="button">Let's Talk</a>
                    </div>
                </center>
            </div>

            <div class="col-lg-4 mid">
                <a href="#"><img src="images/IMG_8720.jpg" class="img-responsive" alt="responsive image" height="200px" width="auto"></a>
                <center><h3>Model Collection</h3></center>
                <center><h4>1hr| introductory meeting</h4> </center>
                <center>
                    <div class="btn">
                        <a class="btn btn-default" href="{{url('/booking/model')}}" role="button">Let's Talk</a>
                    </div>
                </center>
            </div>

            <div class="col-lg-4 last">
                <a href="#"><img src="images/IMG_6309.jpg" class="img-responsive" alt="responsive image" height="200px" width="auto"></a>
                <center><h3>Portrait Collection</h3></center>
                <center><h4>1hr| introductory meeting</h4></center>
                <center>
                    <div class="btn">
                        <a class="btn btn-default" href="{{url('/booking/portrait')}}" role="button">Let's Talk</a>
                    </div>
                </center>
            </div>
        </div>
    </div>

@endsection

@section('footer')
<div style="background: #333;margin-left:-30px; height: 200px; padding:0 50px 0 50px;">
    <h1 style="text-align: center; color:#f0f0f0"><i class="fa fa-arrow-up"></i></h1>
    <br>
    <p style="color: #f0f0f0; text-align: center;">Krept Photography. All rights reserved! &copy; 2017</p>
</div>
@endsection

