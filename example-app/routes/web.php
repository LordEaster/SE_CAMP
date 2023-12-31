<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http;
use Illuminate\Http\Request;

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
    return 'hi, yamroll';
});


Route::get('/multi-table', function () {
    return view('multiple-table.multi-landing');
});

Route::post('/multi-table', function (Request $req) {
    $data['multiply'] = $req -> input ('multiply');
    return view('multiple-table.multi-table', $data);
});