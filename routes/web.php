<?php

use App\Models\CV;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Irfan Ganendra",
        "email" => "irfanganendra@gmail.com",
        "image" => "irvan.jpeg"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});

use App\Http\Controllers\CVController;

Route::resource('cvs', CVController::class);
