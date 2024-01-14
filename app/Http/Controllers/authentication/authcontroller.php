<?php

namespace App\Http\Controllers\authentication;
use App\Http\Controllers\Controller;
use App\Http\Requests\front\Auth\RegisterRequest;
use App\Http\Requests\front\Auth\VerficationRequest;
use App\Mail\verficationemail;
use App\Mail\verficationmail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class authcontroller extends Controller
{
    //
    public function index_login(){
        return view('front.pages.auth.login');
    }
    public function index_register(){
        return view('front.pages.auth.register');
    }
    public function resetpasswordpage(){
        return view('front.pages.auth.register');
    }
    public function submit_register(RegisterRequest $request){

    $data=$request->validated();
    $data['image']=$this->storeimage($request);
    $data['veriy_code']=rand(100000,900000);
    $user=user::create($data);
    Mail::to($data['email'])
    ->send( new verficationmail($data['veriy_code']));
    Auth::login($user);
    return Redirect()
    ->route('verfiy.index');
    }
    public function submit_verfiy_code(VerficationRequest $request){
        $data=$request->validated();
        dd($data);
    }
    public function verfiy_code(){
        return view("front.pages.auth.verfiy");
    }
    private function storeimage($request){
        $image=$request->file('image');
        $ext=$image->getClientOriginalExtension();
        $img= time() . rand(10000,20000) .'.' .$ext ;
        $image->move(public_path('upload/users'),$img);
        return $img;

    }

    // public function logout(){
    //     auth::logout();
    //     return back();

    // }

}
