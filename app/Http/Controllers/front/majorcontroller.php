<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Major;

class majorcontroller extends Controller
{
    //
    public function index (){
        $majors=Major::select("id","title")->paginate(5);
        return view('front.pages.majors.major',compact('majors'));
     }
}
