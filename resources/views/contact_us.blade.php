@extends('layouts.main')


@section('local-styles')
    <style>
        body, html{
            /*overflow-y: hidden;*/
            margin-left: -80px;
        }
    </style>
@endsection
@section('content')
    <h2  class="text-center">Contact Me Today</h2>
    <hr style="color: black;background: black; height: 2px; width: 5%">
    <div class="row " id="notify" style="z-index: 99999;">
        @if (session('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Message Sent!</strong> You will be replied no sooner.
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-lg-1"></div>
        <img class="col-lg-5" src="{{asset('images/honorable_duke.jpg')}}" alt="">


        <div class="col-lg-6">
            <p style="font-size: 16px"> I love capturing pictures and thats all there is to it.
                To see people's faces filled with emotions is what drives me each day to keep my
                shutter rolling. <br><br>Whether it's seeing a couple get married, someone celebrate their birthday, a simple portrait session or anything associated with fashion, everyone has a story and I love being that person to capture it plus I'm willing to travel wherever it takes me.</p>
            <p class="p2" style="font-size: 16px">  At a time where you want memories to be kept and remembered through a visualised perception, kindly call on me and I'll be glad to be a part.</p>
            <br><br>
            <a class="btn btn-lg" style="background:#1d1d1d;color: white; " href="#contact-form" role="button"><span class="glyphicon glyphicon-envelope"></span> Contact Me!</a>
        </div>
    </div>
    <br><br><br><br><br><br>
    <hr style="color: black;background: black; height: 2px; width: 5%">


    <form id="contact-form" class="row" role="form" method="POST" action="{{ url('/contact') }}">
        {{ csrf_field() }}
        <input type="hidden" id="booking_date" name="booking_date">
        <div class="row form-container">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 row">

                <h2 class="text-center">Send me a message </h2>
                <div class="row row-content">
                    <form class="col-lg-8">
                        <div class="form-group">
                            <label for="full_name">Full Name<span class="required_star"> * </span></label>
                            <input type="text" required class="form-control" id="full_name" name="full_name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address<span class="required_star"> * </span></label>
                            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required class="form-control" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Telephone Number<span class="required_star"> * </span></label>
                            <input type="text" class="form-control" id="phone_number"  name="phone_number" placeholder="Phone Number">
                        </div>
                        <label for="InputMessage">Message</label>
                        <textarea required class="form-control" name="message" rows="5"></textarea>
                        <button style="background:#1d1d1d;color: white; width: 200px; margin: 10px; "  class="btn row btn-lg">Submit <i class="fa fa-send"></i></button>
                    </form>

                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>

    </form>
    <br><br><br>
    {{--<a id="backtoTopBtn" href="#pageTop" style="position: fixed;top: 500px;padding:10px;right: 100px; background: #1d1d1d;color:white;border-radius: 20px; border: none;">--}}
        {{--<i style="font-size: 30px" class="fa fa-chevron-up"></i>--}}
    {{--</a>--}}


@endsection

@section('footer')
    <div style="background: #333;margin-left:-60px!important; height: 200px; padding:0 50px 0 50px;">
        <h1 style="text-align: center; color:#f0f0f0; margin-left: 60px;">
            <a href="#pageTop"><i class="fa fa-arrow-up"></i></a>
        </h1>
        <br>
        <p style="color: #f0f0f0; text-align: center;">Krept Photography. All rights reserved! &copy; 2017</p>
    </div>
@endsection

@section('local-scripts')
    <style>
        #pageTop{
            margin-left: 234px;
        }
    </style>
    <script type="application/javascript">
        function hideBacktoTopBtn() {
            $('#backtoTopBtn').hide('fast');
        }

        $(document).ready(function () {
          if(location.href == "http://localhost:8000/contact"){
              hideBacktoTopBtn();
          }
            if(location.href == "http://localhost:8000/contact#pageTop"){
                hideBacktoTopBtn();
            }


          window.onhashchange = function (event) {
            console.log(event.newURL);
            if(event.newURL == 'http://localhost:8000/contact#pageTop'){
                hideBacktoTopBtn();
            }
              if(event.newURL == 'http://localhost:8000/contact#contact-form'){
                  $('#backtoTopBtn').show('slow');
              }
          }
        });
    </script>
@endsection

