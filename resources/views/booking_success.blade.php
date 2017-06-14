@extends('layouts.main')


@section('content')
    <h2 class="text-center">Your Booking is Successful!</h2>
    <hr style="color: black;background: black; height: 2px; width: 5%">
    <div class="row ">

        <p class="text-center" style="text-align: center">
            Your booking has been recieved. You will be contacted very soon. Thanks for using our service.
        </p>
    </div>
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



@endsection

