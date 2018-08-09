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

// Route::get('/', function () {

// 	$tasks = DB::table('tasks')->get();

// 	//return $tasks;
  
//      return view('welcome', ['tasks'=>$tasks]);
// });


Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/tags/{tag}', 'TagsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register','RegistrationsController@create');
Route::post('/register','RegistrationsController@store');
Route::get('/login','SessionsController@create');
Route::get('/logout','SessionsController@destroy');
Route::post('/login','SessionsController@store');





Route::get('/about', function () {
    return view('about');
});