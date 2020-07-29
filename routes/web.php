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
Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::get('', function () {
        return redirect()->route('DashboardHome');
    });
    Route::view('home','dashboard.home')->name('DashboardHome');
    Route::view('test','dashboard.testhome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
