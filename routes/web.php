<?php

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
    return view('welcome');
});

Route::get('testDdRoute', 'testController@testDataBaseFunc');
Route::get('/company', function () { return view('company'); });
Route::get('/testMain', function () { return view('testmain'); });
Route::get('/testMainContent', function () { return view('adminLteContent'); });