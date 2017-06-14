<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'booking_date',
        'full_name',
        'email',
        'number_of_pics',
        'phone_number',
        'additional_message'
    ];
}
