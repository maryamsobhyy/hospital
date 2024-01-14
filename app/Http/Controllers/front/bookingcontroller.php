<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;

class bookingcontroller extends Controller
{
    //
    public function store(request $request){
        // $request->validate([
        //     'name'=>['required','min:5'],
        //     'phone'=>['required'],
        //     'email'=>['required'],

        // ]);
        $data =new booking();
        $data->name=$request->name;
        $data->doctor_id=$request->doctor_id;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->user_id=auth()->user()->id;
        $data->save();
        return Redirect()->route('booking.index',$data->id)->with('message', 'Thank you for your booking,We call you back if your booking accepted
        ,Wish good health and Wellness!');;
    }
}
