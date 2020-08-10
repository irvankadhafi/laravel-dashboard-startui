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
    Route::view('mail','dashboard.mail')->name('DashboardMail');
    Route::view('tables','dashboard.tables')->name('DashboardTables');
    Route::view('profile','dashboard.profile')->name('DashboardProfile');
    Route::view('tasks','dashboard.list_task')->name('DashboardTask');
    Route::prefix('messenger')->group(function (){
        Route::view('index','dashboard.messages.messenger')->name('DashboardMessenger');
        Route::view('chat','dashboard.messages.chat')->name('DashboardChat');
        Route::view('write','dashboard.messages.chat_write')->name('ChatWrite');
        Route::view('user','dashboard.messages.chat_user')->name('ChatUser');
        Route::view('charts','dashboard.chart')->name('DashboardCharts');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
