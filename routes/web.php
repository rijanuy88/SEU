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
Route::get('/404', function () {
    return view('layouts.404');
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

Route::get('/search', function () {
    return view('Enrollment.searchstatus');
});

Route::get('/status', function () {
    return view('Enrollment.status');
});
// employees
Route::get('/apply', function () {
    return view('Employee.contactus');
});

// students
Route::get('/dashboard', function () {
    return view('Student.dashboard');
});

Route::get('/curriculum', function () {
    return view('Student.curriculum');
});
Route::get('/account-balance', function () {
    return view('Student.accountbalance');
});

