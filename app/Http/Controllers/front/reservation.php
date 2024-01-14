<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\booking;
use Illuminate\Http\Request;

class reservation extends Controller
{
    public function index (){
        $user=auth()->user()->id;
        $bookings=booking::where('user_id',$user)->get();


        return view('front.pages.reservations.index',compact('bookings'));
    }
}
