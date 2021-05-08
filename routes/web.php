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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/pricing', function () {
    return view('pricing');
})->middleware(['auth'])->name('pricing');
Route::get('/view-ads', function(){
	return view('view-ads');
})->middleware(['auth'])->name('viewads');
Route::get('/ad-surf', function(){
	return view('ad-surf');
})->middleware(['auth'])->name('ad-surf');
Route::get('/video-ads', function(){
	return view('video-ads');
})->middleware(['auth'])->name('videoads');

Route::get('/contact',function (){
    return view ('contact');
})->name('contact');
Route::get('/contact/create','contactController@create')->name('contact.create');

require __DIR__.'/auth.php';

Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/login', 'Auth\LoginAdminController@index')->name('login.admin');
Route::post('/admin/login', 'Auth\LoginAdminController@login')->name('login.admin');


Route::middleware(['auth'])->prefix('admin')->group(function(){
	Route::get('/profile',function(){
		return view('admin/profile');
	});
	
	Route::get('/basic_table',function(){
		return view('admin/basic_table');
	});
	Route::get('/blank',function(){
		return view('admin/blank');
	});
	Route::get('/chart-chartjs',function(){
		return view('admin/chart-chartjs');
	});
	Route::get('/contact',function(){
		return view('admin/contact');
	});
	Route::get('/form_component',function(){
		return view('admin/form_component');
	});
	Route::get('/form_validation',function(){
		return view('admin/form_validation');
	});
	Route::get('/general',function(){
		return view('admin/general');
	});
	Route::get('/grids',function(){
		return view('admin/grids');
	});
});


