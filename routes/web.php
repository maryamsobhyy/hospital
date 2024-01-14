<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front\homecontroller;
use App\Http\Controllers\front\authcontroller;
use App\Http\Controllers\front\doctorcontroller;
use App\Http\Controllers\front\contactscontroller;
use App\Http\Controllers\front\majorcontroller;

use App\Models\Major;
use App\Models\admin\Index;

use App\Http\Controllers\admin\usercontroller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\front\reservation;


Route::get('/',[homecontroller::class,'index'])->name('home.index');
Route::get('/login',[authcontroller::class,'index_login'])->name('login.index');
Route::get('/register',[authcontroller::class,'index_register'])->name('register.index');
Route::get('/majors',[majorcontroller::class,'index'])->name('majors.index');
Route::get('/contacts',[contactscontroller::class,'index'])->name('contacts.index');
Route::get('/doctors',[doctorcontroller::class,'index'])->name('doctor.index');
Route::get('/login',[usercontroller::class,'show'])->name('login');
Route::post('login.submit',[usercontroller::class,'store'])->name('submit');

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::post('login.submit ', [usercontroller::class, 'store'])->name('submit');
require __DIR__.'/auth.php';
require __DIR__.'/front/routes.php';
