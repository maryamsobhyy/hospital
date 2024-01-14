<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authcontroller extends Controller
{
    //
    public function index_login(){
        return view('front.pages.auth.login');
    }
    public function index_register(){
        return view('front.pages.auth.register');
    }
}
