<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\major;
use App\Models\doctor;

class homecontroller extends Controller
{
    //
    public function index(){
        $doctors=(doctor::paginate(8));
         return view('front.pages.home.index',compact('doctors'));
    }
}
