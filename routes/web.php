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

Route::get('/welcome', function () {
    return view('welcome');
});
// company
Route::get('testDdRoute', 'testController@testDataBaseFunc');
Route::get('/company', function () { return view('company'); });
Route::get('/testMain', function () { return view('testmain'); });
Route::get('/testMainContent', function () { return view('adminLteContent'); });

Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/company','company@index');
Route::get('/company/test','company@index2');
Route::get('/addcompany',function(){
    return view('company.addcompany');
});
Route::post('/savecompany','company@insertcompany');
// company end

// branch
Route::get('/branch','branch@index1');
Route::get('/addbranch','branch@newbranch');
Route::post('/savebranch','branch@addbranch'); 

