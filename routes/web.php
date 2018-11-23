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

Auth::routes();

Route::get('/dashboard',function(){
	return view('layouts.master');
});

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
    Route::get('/manage/course',['as'=>'manageCourse','uses'=>'CourseController@getManageCourse']);
    Route::post('/manage/course/insert',['as'=>'postInsertAcademic','uses'=>'CourseController@postInsertAcademic']);
    Route::post('/manage/course/insert-program',['as'=>'postInsertProgram','uses'=>'CourseController@postInsertProgram']);
    Route::post('/manage/course/insert-level',['as'=>'postInsertLevel', 'uses'=>'CourseController@postInsertLevel']);
    Route::get('/manage/course/showLevel',['as'=>'showLevel','uses'=>'CourseController@showLevel']);
    Route::post('/manage/course/shift',['as'=>'createShift','uses'=>'CourseController@createShift']);
    Route::post('/manage/course/time',['as'=>'createTime','uses'=>'CourseController@createTime']);
    Route::post('/manage/course/batch',['as'=>'createBatch','uses'=>'CourseController@createBatch']);
    Route::post('/manage/course/group',['as'=>'createGroup','uses'=>'CourseController@createGroup']);
    Route::post('/manage/course/class',['as'=>'createClass','uses'=>'CourseController@createClass']);
});
