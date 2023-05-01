<?php

use App\Http\Controllers\newscontrol;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/',[newscontrol::class,'index']);

Route::post('/savedata',[newscontrol::class,'save']);

Route::get('/edit/{id}',[newscontrol::class,'edit']);

Route::post('/update-data',[newscontrol::class,'update']);
