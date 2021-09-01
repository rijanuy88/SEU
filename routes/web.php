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


// Route::get('/undergrad-forms', function () {
//     return view('Enrollment.undergrad-forms');
// });
Route::resource('/undergrad-forms', App\Http\Controllers\StudentController::class);
// Route::resource('/undergrad-forms', App\Http\Controllers\GuardianController::class);

Route::get('/gradschool-forms', function () {
    return view('Enrollment.gradschool-forms');
});
Route::get('/postgrad-forms', function () {
    return view('Enrollment.postgrad-forms');
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
Route::get('/admin/employee/home', function () {
    return view('Employee.home');
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

Route::get('/admin/employee-list', function () {
    return view('Registrar.employeeList');
});

Route::get('/admin/reg/staff', function () {
    return view('Registrar.staff');
});
Route::get('/admin/reg/curriculum', function () {
    return view('Registrar.curriculum');
});

//faculty
Route::get('/admin/faculty/batch', function () {
    return view('Faculty.batchList');
});
// Route::get('/admin/faculty/class', function () {
//     return view('Faculty.classlist');
// });
Route::get('/admin/faculty/class-offerings', function () {
    return view('Faculty.classofferings');
});

//finance

Route::get('/admin/finance/tuition-misc', function () {
    return view('Finance.tuition&misc');
});
