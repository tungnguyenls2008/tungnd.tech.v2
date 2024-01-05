<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
Route::middleware(['web'])->group(function () {
    Route::get('/language-switch',function (){
        if (session()->get('locale')=='en'){
            //app()->setLocale('vi');
            session()->put('locale', 'vi');

        }else{
            //app()->setLocale('en');
            session()->put('locale', 'en');
        }

        return back();
    })->name('language-switch');
    Route::get('/', function () {
        return view('frontend.index');
    });


});
