<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\doctor;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class doctorcontroller extends Controller
{
    //
    public function index(){
        $doctors=(doctor::paginate(8));
         return view('front.pages.doctors.index',compact('doctors'));
    }
    public function show($id){
        $doctors=(doctor::find($id));
        $user=auth()->user()->id;

        return view('front.pages.doctors.doctor',compact('doctors','user'));
    }
    function test ( request $request){

        $data=($request->route('id'));
        $results = doctor::select('Name','id')
        ->where("major_id", $data)
        ->get();
        return view('front.pages.doctors.test',compact('results'));
        // $majors=Major::find($id)->update($data);
        // session()->flash("flashmessage","Added sucessfully");
        // return Redirect()->route('admin.majors')->with(['message'=> 'Successfully updated!!']);;

    }
    }


