<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Employeee

Route::get('employee', 'Api\TestApiController@employee')->name('api-employee');
Route::post('employee', 'Api\TestApiController@employeePost')->name('api-employee-post');
Route::post('employee/detail', 'Api\TestApiController@employeeDetail')->name('api-employee-detail');

// Startup

Route::get('startup', 'Api\TestApiController@startup')->name('api-startup');
