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
    return view('welcome');
});


Route::get('user', function () {
    return view('users');
});

Route::post('admin', 'UserController@index');

Route::get('addEmployee', function () {
    
    return view('addEmployee');
});

Route::post('addEmp', 'EmployeeController@store');

Route::get('listEmployees', "EmployeeController@show");



Route::get('/delete/{id}',"EmployeeController@destroy");

Route::get('/edit/{id}',"EmployeeController@edit");

Route::post('/updateEmp/{id}', 'EmployeeController@update');


Route::post('/search','EmployeeController@search');

Route::get('/searchEmployee',function ($data) {
    return view('searchEmployee',compact('data'));
});




