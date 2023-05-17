<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\MainController@index')->name('main');

Route::get('/dashboard', 'App\Http\Controllers\HomeController@showDashboard')->name('dashboard');
Route::get('/time-schedule', 'App\Http\Controllers\AppointmentController@create')->name('appointment.create');
Route::post('/time-schedule/store', 'App\Http\Controllers\AppointmentController@store')->name('appointment.store');
Route::get('/reservation/{doctor_id}', 'App\Http\Controllers\AppointmentController@index')->name('appointment.index')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
