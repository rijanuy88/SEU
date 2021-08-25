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

Route::get('/my-grades', function () {
    return view('Student.my-grades');
});

Route::get('/my-class-offerings', function () {
    return view('Student.my-class-offerings');
});
//reg
Route::get('/admin/reg/pre-enlistment', function () {
    return view('Registrar.pre-enlistment');
});

Route::get('/admin/reg/class-offerings', function () {
    return view('Registrar.classofferings');
});

Route::get('/admin/reg/faculty-list', function () {
    return view('Registrar.facultylist');
});

//faculty
Route::get('/admin/faculty/curriculum', function () {
    return view('Faculty.curriculum');
});
Route::get('/admin/faculty/batch', function () {
    return view('Faculty.batchList');
});
Route::get('/admin/faculty/class', function () {
    return view('Faculty.classlist');
});
Route::get('/admin/faculty/class-offerings', function () {
    return view('Faculty.classofferings');
});