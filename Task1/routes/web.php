<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PagesController;

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

//Route::get('/', function () { return view('welcome');});

//Route::method('/',function(){return "hello";}); //closer
//Route::get('/contact/personal',function(){return "<h1>personal</h2>";} );
 
//Route::get('/contact',[PagesController::class,'contact']);
Route::get('/home','App\Http\Controllers\PagesController@home')->name('home'); 
Route::get('/contact','App\Http\Controllers\PagesController@contact')->name('contact'); 
Route::get('/profile','App\Http\Controllers\PagesController@myprofile')->name('profile'); 

//students routes
Route::get('/student/create','App\Http\Controllers\StudentController@create')->name('student.create'); 
Route::post('/student/create','App\Http\Controllers\StudentController@createSubmit')->name('student.create'); 
Route::get('/student/list','App\Http\Controllers\StudentController@list')->name('student.list'); 
Route::get('/student/edit/{id}','App\Http\Controllers\StudentController@edit')->name('student.edit'); 

//teachers route
Route::get('/teacher/create','App\Http\Controllers\TeacherController@create')->name('teacher.create'); 
Route::post('/teacher/create','App\Http\Controllers\TeacherController@createSubmit')->name('teacher.create'); 
Route::get('/teacher/list','App\Http\Controllers\TeacherController@list')->name('teacher.ist'); 
