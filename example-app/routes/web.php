<?php
namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Illuminate\Http;
use Illuminate\Http\Request;
use App\Http\Controllers\myController;
use App\Http\Controllers\myAuth;
use App\Http\Controllers\C_titles;


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

Route::middleware('auth')->group(function () {
    Route::resource('/titles', C_titles::class);
});

Route::get('/multi-table-js', function() {
    return view('multi-table-js');
});

// login sections
Route::get('/login', [myAuth::class, 'login_view'])->name('login');
Route::get('/register', [myAuth::class, 'register_view']);
Route::get('/logout', [myAuth::class, 'logout_process']);

Route::post('/login', [myAuth::class, 'login_process']);
Route::post('/register', [myAuth::class, 'register_process']);

// my-control
Route::get('/my-control', [myController::class, 'index']);


Route::get('/multi-table', function () {
    return view('multiple-table.multi-landing');
});

Route::post('/multi-table', function (Request $req) {
    $data['multiply'] = $req -> input ('multiply');
    return view('multiple-table.multi-table', $data);
});

Route::get('/home', function() {
    return view('layouts.home');
});

?>