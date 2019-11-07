<?php

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
    return view('launch');
});

Route::get('/old', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'StaffController@index')->name('admin');

// Route::get('/admin', function () {
//     return view('admin.index');
// });

// Route::get('/addpayment', function () {
//     return view('admin.addpayment');
// });

Route::resource('studentlist', 'StudentController');
Route::resource('/search', 'StudentController@search');

Route::get('/addpayment', 'StudentController@showFreelancers');

Route::post('/panel/users/ban', 'StudentController@banFreelancer');

Route::post('/panel/freelancer/unban', 'StudentController@unbanFreelancer');

// Route::get('freelancer', function () {
//     return view('admin.freelancers');
// });
