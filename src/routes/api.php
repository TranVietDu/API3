<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['namespace'=>'App\Http\Controllers'], function()
{
Route::apiResource('classs','ClassController');
Route::apiResource('students','StudentController');
Route::apiResource('studentclass','StudentClassController');
Route::post('register', 'RegisterController@register')->name('st');
Route::post('login', 'RegisterController@login')->name('login.index');
Route::get('lknn/{classs}', 'ClassController@nnCountStudentOnClass');
Route::get('allstudents', 'ClassController@allClassStudent')->name('all');
Route::get('showclass/{classs}', 'ClassController@showClass');
Route::patch('restore/{students}', 'StudentController@restore');
});

Route::get('homeadmin','App\Http\Controllers\AdminController@index');
Route::get('studentss','App\Http\Controllers\Studentcontroller@index')->name('student');
Route::post('studentss','App\Http\Controllers\Studentcontroller@store')->name('store');
Route::get('class','App\Http\Controllers\ClassController@index')->name('class');
Route::get('create','App\Http\Controllers\StudentController@create')->name('create');
Route::delete('student/{student}','App\Http\Controllers\StudentController@destroy')->name('student.destroy');





