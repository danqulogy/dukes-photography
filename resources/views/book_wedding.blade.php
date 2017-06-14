@extends('layouts.main')

@section('local-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('js/zabuto_calendar.css')}}">
    <style>
        .table-white{
            background: white !important;
        }
        .bg-white{
            background: white;
            color: black;;
        }
        .button-dark, .button-dark:hover{
            background: #3c3c3c;
            color:whitesmoke;
        }
    </style>
@endsection

@section('content')
    <h2 class="text-center">Book Online</h2>
    <hr style="color: black;background: black; height: 2px; width: 5%">

    <div id="step1" style="margin-top:-20px;">
        <h2 style="" class="col-lg-12">Schedule Online</h2>
        <div class="row">
            <div class="col-lg-6">
                <p style="color: #2a88bd;font-size: 18px;" class="col-lg-12">
                    <span class="fa fa-clock-o"></span>
                    Schedule in our Time Zone: GMT 00:00</p>

                <div class="col-lg-12" id="my-calendar"></div>
                <div class="row">
                    <label class="col-lg-4" for="morning_time">Morning
                        <select class="form-control col-lg-8" onchange="onTimeValueChange('morning_time')" name="morning_time" id="morning_time">
                            <option value="10:00 am">10:00 am</option>
                            <option value="10:30 am">10:30 am</option>
                            <option value="11:00 am">11:00 am</option>
                            <option value="11:30 am">11:30 am</option>
                        </select>
                    </label>
                    <label class="col-lg-4" for="afternoon_time">Afternoon
                        <select class="form-control col-lg-8" onchange="onTimeValueChange('afternoon_time')" name="afternoon_time" id="afternoon_time">
                            <option value="12:00 pm">12:00 pm</option>
                            <option value="12:30 pm">12:30 pm</option>
                            <option value="01:00 pm">01:00 pm</option>
                            <option value="01:30 pm">01:30 pm</option>
                            <option value="02:00 pm">02:00 pm</option>
                            <option value="02:30 pm">02:30 pm</option>
                            <option value="03:00 pm">03:00 pm</option>
                            <option value="03:30 pm">03:30 pm</option>
                            <option value="04:00 pm">04:00 pm</option>
                            <option value="04:30 pm">04:30 pm</option>
                        </select>
                    </label>
                    <label class="col-lg-4" for="evening_time">Evening
                        <select class="form-control col-lg-8" onchange="onTimeValueChange('evening_time')" name="evening_time" id="evening_time">
                            <option value="05:00 pm">05:00 pm</option>
                            <option value="05:30 pm">05:30 pm</option>
                            <option value="06:00 pm">06:00 pm</option>
                        </select>
                    </label>

                </div>
            </div>
            <div class="col-lg-5">
                <p id="dtError" class="text-danger" style="font-weight: bold;">Your selected date must be after today!</p>
                <div class="col-lg-12" style="border: 1px solid black; padding:20px;">
                    <h2 class="text-center text-capitalize">{{$booking_type}} Collection</h2>
                    <p class="text-center" style="font-size:20px;letter-spacing: 1px;">1hr | Introductory Meeting</p>
                    <hr style="color: black;background: #333333; height: 1px; ">
                    <p class="text-center" style="font-size: 20px; font-weight: lighter;"><span id="scheduled_date"></span> <span id="scheduled_time"></span></p>

                    <button id="btnStep1" style="width: 100%" class="btn text-center btn-lg" onclick="OnNextStep()" class="btn">Next</button>
                </div>
            </div>
        </div>
    </div>

    <form id="step2" class="row" role="form" method="POST" action="{{ url('/booking') }}">
        {{ csrf_field() }}
        <input type="hidden" id="booking_date" name="booking_date">
        <div class="row form-container">
            <div class="col-lg-6">
                <div class="row">

                    <h2 class="col-lg-12">
                        <a href="{{url('/booking/wedding')}}" class="btn">
                            <span style="font-size:32px !important;" class="fa fa-arrow-left"></span>
                        </a>
                        Add your Info</h2>
                </div>

                <div class="row row-content">
                    <form class="col-lg-8">
                        <input type="hidden" name="booking_type" value="{{$booking_type}}">
                        <div class="form-group">
                            <label for="full_name">Full Name<span class="required_star"> * </span></label>
                            <input type="text" required class="form-control" id="full_name" name="full_name" placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="email">Email address<span class="required_star"> * </span></label>
                            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required class="form-control" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="amount_due" style="color: #00ab6c; font-size: 18px">
                                Amount Due = Number of Pics (<span id="picsNum"></span>) x Price(3.00) = GH¢ <span id="amount_due">150</span></label>
                            <input type="range" min="20" value="20" max="300" class="form-control" onchange="estimatePrice()" name="number_of_pics" id="number_of_pics"  placeholder="AmountDue">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Telephone Number<span class="required_star"> * </span></label>
                            <input type="number" class="form-control" id="phone_number" required  name="phone_number" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="location">Venue<span class="required_star"> * </span></label>
                            <input type="text" class="form-control" id="venue" required name="venue" placeholder="venue">
                        </div>
                        <label for="InputMessage">Feel free to leave me a message</label>
                        <textarea class="form-control" name="additional_message" rows="5"></textarea>
                    </form>

                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="col-lg-12" style="border: 1px solid black; padding:20px; margin-left:50px; margin-top: 100px ">
                    <h2 class="text-center text-capitalize">{{$booking_type}} Collection</h2>
                    <p class="text-center" style="font-size:20px;letter-spacing: 1px;">1hr | Introductory Meeting</p>
                    <hr style="color: black;background: #333333; height: 1px; ">
                    <p class="text-center" style="font-size: 20px; font-weight: lighter;">
                        <span id="scheduled_date2"></span>
                        <span id="scheduled_time2"></span></p>

                    <button id="btnStep2" style="width: 100%" class="btn text-center btn-lg"
                            onclick="OnBookIt()" class="btn">Book It</button>
                </div>
            </div>
        </div>

    </form>



@endsection

@section('local-scripts')
    <script src="{{asset('js/moment.js')}}"></script>
    <script src="{{asset('js/zabuto_calendar.js')}}"></script>
    <script src="{{asset('js/onclickActions.js')}}"></script>
    <script type="application/javascript">
        var isDateSet=false, isTimeSet = false, trivialCounter = 0;
        var selectedDate =null, selectedTime=null, numOfPics=20;


        function estimatePrice(){
            numOfPics = $('#number_of_pics').val();
            var price = 3.00;
            console.log('numOfPics', numOfPics, 'price', price);
            document.getElementById('picsNum').innerHTML = numOfPics;
            document.getElementById('amount_due').innerHTML = numOfPics*price;
        }
        function onTimeValueChange(controlID) {
            var time = $('#'+controlID).val();
            selectedTime=time;
            document.getElementById('scheduled_time').innerHTML = time;
            document.getElementById('scheduled_time2').innerHTML = time;
            isTimeSet=true;
            if(isDateTimeValid() && isDateSet){
                console.log('date time is valid');
                $('#btnStep1').attr('disabled',false);
                $('#btnStep1').addClass('button-dark');
                $('#dtError').hide();


            }else{
                console.log('invalid date time');
                $('#dtError').show();
                $('#btnStep1').removeClass('button-dark');
                $('#btnStep1').attr('disabled',true);
            }

        }

        function OnNextStep() {
           $("#step1").hide("fast",function () {
               $('#step2').show();
           });

            console.log(selectedDate, selectedTime);
           document.getElementById('booking_date').value = selectedDate+' '+selectedTime;
        }

        $(document).ready(function() {
            $('#btnStep1').attr('disabled', true);
            $('#step2').hide();
            $('#dtError').hide();
            document.getElementById('picsNum').innerHTML = 20;
            estimatePrice();
            $("#my-calendar").zabuto_calendar({
                show_previous: false,
                today: true,
                cell_border:true,
                action: function () {
                    $(".day").click(function(e) {
                        $('.day').removeClass('bg-white');
                        $(this).addClass('bg-white');
                        var date = $(this).attr('id').split('_');
                        date = date[date.length - 2];
                        selectedDate = date;
                        document.getElementById('scheduled_date').innerHTML= date;
                        document.getElementById('scheduled_date2').innerHTML= date;
                        isDateSet=true;

                        if(isDateTimeValid() && isTimeSet){
                            console.log('date time is valid');
                            $('#btnStep1').attr('disabled',false);
                            $('#btnStep1').addClass('button-dark');
                            $('#dtError').hide();
                        }else{
                            $('#dtError').show();
                            $('#btnStep1').removeClass('button-dark');
                            $('#btnStep1').attr('disabled',true);
                            console.log('invalid date time');
                        }
                        console.log(
                            'date:', date,
                            'isDateSet', isDateSet,
                            'isTimeSet', isTimeSet,
                            'button_disabled_state', $('#btnStep1')[0].disabled
                        );

                    });
                },
                action_nav: function () {
                    console.log('action_nav');
                },
            });
        });

        function getDateTimeValue(){
            if(selectedDate != null && selectedTime!=null){
                var timeLength = selectedTime.length - 3;
                var time = selectedTime.slice(0,timeLength);
                console.warn('From GetDateTiveValue()');
                console.debug('selectedTime', selectedTime, 'TrimmedTime', time);
                var date = moment(selectedDate.toString()+' '+time.toString());
                return date;
            }
            return null;
        }
        function isDateTimeValid() {
            var date = getDateTimeValue();
            if(date != null){
                return date.isAfter(moment());
            }
        }
    </script>
@endsection

