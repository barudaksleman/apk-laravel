<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Contactcontroller;

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

Route::get('/', function () {
     return view('bio.home' ,[
        "title"=> "home"]);
    
});
Route::get('/biodata', function () {
    return view('bio.biodata',[
        "title"=> "biodata"]);
    
});
Route::get('/about', function () {
    return view('bio.about');
   
});

Route::get('/index', function () {
    return view('index' ,[
       "title"=> "index"]);
   
});

route::get('/contactwebkollah', [ContactController::class, 'index']);