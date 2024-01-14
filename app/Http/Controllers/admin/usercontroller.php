<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    // public function index (){
    //     $users=User::paginate(5);
    //     return view('admin.pages.users',compact('users'));
    // }
    public function show (){
        return view('front.pages.auth.login');


    }
    public function store (Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // تم تسجيل الدخول بنجاح
            return redirect()->intended('/');
        }
        return back()->withErrors(['email' => 'خطأ في بيانات تسجيل الدخول']);



    }
}
