<?php

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
    $homework='Hello World';
    return view('home', ['homework'=> $homework]);
});

Route::get('/first', function () {
    $sentence='Not everything that can be counted counts, and not everything that counts can be counted.';
    return view('first', ['sentence'=> $sentence , 'autor'=> 'Albert Einstein']);
});

Route::get('/second', function () {
    $nameGadget='Basics Wireless Computer Mouse';
    $price= '34,00';
    return view('second', ['nameGadget'=> $nameGadget , 'price'=>  $price]);
});
