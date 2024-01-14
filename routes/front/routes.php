<?php

use App\Models\Major;
use App\Models\admin\Index;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\reservation;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\front\authcontroller;
use App\Http\Controllers\front\homecontroller;

use App\Http\Controllers\front\majorcontroller;
use App\Http\Controllers\front\doctorcontroller;

use App\Http\Controllers\front\bookingcontroller;

use App\Http\Controllers\front\contactscontroller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\authentication\authcontroller as AuthenticationAuthcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[homecontroller::class,'index'])->name('home.index');
Route::get('/login',[authenticationauthcontroller::class,'index_login'])->name('login.index');
Route::get('/booking/{id}',[doctorcontroller::class,'show'])->name('booking.index');
route::post('/dashboard/booking/store',[bookingcontroller::class,'store'])->name('booking.store');

Route::get('reservation', [reservation::class,'index'])->name('reservation');

Route::post('/register/submit',[authenticationauthcontroller::class,'submit_register'])->name('register.submit');
Route::get('/majors',[majorcontroller::class,'index'])->name('majors.index');
Route::get('/contacts',[contactscontroller::class,'index'])->name('contacts.index');
Route::get('/doctors',[doctorcontroller::class,'index'])->name('doctor.index');
Route::get('/browsedoctors/{id}',[doctorcontroller::class,'test'])->name('doctor.test');
Route::get('/',[homecontroller::class,'index'])->name('home.index');
Route::get('/register',[authenticationauthcontroller::class,'index_register'])->name('register.index');
Route::post('/register/submit',[authenticationauthcontroller::class,'submit_register'])->name('register.submit');
Route::get('/login',[authenticationauthcontroller::class,'index_login'])
->name('login.index');
Route::post('/submit_verfiy',[authenticationauthcontroller::class,'submit_verfiy_code'])->name('submitverfiy.index');
Route::get('/verfiy_email',[authenticationauthcontroller::class,'verfiy_code'])->name('verfiy.index');
Route::get('/register',[authenticationauthcontroller::class,'index_register'])->name('register.index');
Route::post('/register/submit',[authenticationauthcontroller::class,'submit_register'])->name('register.submit');



