<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Route Halaman
```$xslt
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
    });
});
```
