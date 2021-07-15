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

Route::get('/contact', function(){
	return view('contact');
})->middleware('age');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('change_password');
Route::post('/change-password', 'Auth\ChangePasswordController@changepassword')->name('update_password');

Route::get('/add-student', 'StudentController@add_student')->name('add_student');
Route::post('/add-student', 'StudentController@save_student')->name('save_student');
Route::get('/show-student', 'StudentController@show_student')->name('show_student');

// Route for Admin User
Route::group([
		'as' => 'admin-',
		'prefix' => 'admin',
		'namespace' => 'Admin',
		'middleware' => ['auth', 'admin']
	],
	function(){
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	}
);

// Route for Author User
Route::group([
		'as' => 'author-',
		'prefix' => 'author',
		'namespace' => 'Author',
		'middleware' => ['auth', 'author']
	],
	function(){
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	}
);

