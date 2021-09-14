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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/awaiting', 'ApprovalController@awaiting')->name('awaiting');

    Route::middleware(['approved'])->group(function () {
        Route::get('/dashboard', 'ApprovalController@dashboard')->name('dashboard');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/users', 'UserController@index')->name('admin.users.index');
        Route::get('/users/{id}/approve', 'UserController@approve')->name('admin.users.approve');
    });
});
