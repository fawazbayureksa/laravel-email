<?php

use Illuminate\Support\Facades\Route;
use App\Mail\PostMail;
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email',function() {
    Mail::to('fawwazbayureksa@gmail.com')
    ->send(new \App\Mail\PostMail('Belajar menggunakan Laravel untuk mengirim pesan lewat email','Fawwaz Bayureksa'));

    return 'Terkirim';


});
