<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/test', function () {
    return view('role_permission.test');
});
Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('/users', App\Http\Controllers\Admin\UserController::class);
    Route::resource('/roles', App\Http\Controllers\Admin\RoleController::class);
    Route::get('/user-list',[App\Http\Controllers\Admin\UserController::class,'user_list'])->name('user.list');
});