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
    return view('landing');
});

// '/document' name you want
//  'Enrollment.documents' location
Route::get('/login', function () {
    return view('UserLogin.login');
});

Route::get('/pre-enlistment', function () {
    return view('Enrollment.pre-enlistment');
});

Route::get('/documents', function () {
    return view('Enrollment.documents');
});

Route::get('/status', function () {
    return view('Enrollment.status');
});

Route::get('/apply', function () {
    return view('Employee.Contactus');
});

