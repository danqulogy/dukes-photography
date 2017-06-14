<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'only'    =>  [ ]
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getFormalPageView(){
        return view('formal')
            ->with('main_key', 'gallery')
            ->with('view_key', 'formal');
    }

    public function getTraditionalPageView(){
        return view('traditional')
            ->with('main_key', 'gallery')
            ->with('view_key','traditional');
    }

    public function getModelAndPortraitPageView(){
        return view('model_and_portrait')
            ->with('main_key', 'gallery')
            ->with('view_key','model_and_portrait');
    }
    public function getFramesPageView(){
        return view('frames')
            ->with('main_key', 'gallery')
            ->with('view_key','frames');
    }

    public function getBookingPageView(){

        return view('booking')
            ->with('main_key', '')
            ->with('view_key','booking');
    }

    public function getBookingTypePageView($booking_type){
//        return $booking_type;
        return view('book_wedding')
            ->with('main_key', '')
            ->with('view_key','booking')
            ->with('booking_type',$booking_type);
    }
    public function getBookingSuccess(){
        return view('booking_success')
            ->with('main_key', '')
            ->with('view_key','booking');
    }

    public function getContactUsView(){
        return view('contact_us')
            ->with('main_key', '')
            ->with('view_key','contact');
    }
    public function postBookWeddingPageView(Request $request){

        $validator = Validator::make($request->all(), [
            'booking_date'  =>  'required|date',
            'full_name'     =>  'required',
            'email'         =>  'required|email',
            'number_of_pics'    =>  'required|min:20',
            'venue'         =>  'required',
            'phone_number'      =>  'required'
        ]);
        $booking = new Booking();
        $booking->booking_type = $request->get('booking_type');
        $booking->booking_date =  $request->get('booking_date');
        $booking->full_name = $request->get('full_name');
        $booking->email = $request->get('email');
        $booking->number_of_pics = $request->get('number_of_pics');
        $booking->venue = $request->get('venue');
        $booking->phone_number = $request->get('phone_number');
        $booking->additional_message = $request->get('additional_message');
        $booking->save();
        return redirect()->to('/booking-successfull')->with('message','Your Booking has been successful!');

    }

    public function postMessageView(Request $request){

        $validator = Validator::make($request->all(), [
            'full_name'         =>  'required',
            'email'             =>  'required|email',
            'phone_number'      =>  'required',
            'message'           =>  'required'
        ]);
        $message = new Message();
        $message->full_name = $request->get('full_name');
        $message->email = $request->get('email');
        $message->phone_number = $request->get('phone_number');
        $message->message = $request->get('message');
        $message->save();
        return redirect()->back()->with('message','Message Sent!');

    }


}
