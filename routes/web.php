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

Route::view('/', 'welcome')->name('welcome');
Route::view('/upgrade-to-pro', 'pages.pro.index')->name('pro');

Route::group(['prefix' => 'authentication', 'as' => 'auth.'], function () {
    Route::get('/', function () {
        return redirect()->route('auth.sign-in');
    })->name('base');

    Route::view('/sign-in', 'pages.authentication.sign-in')->name('sign-in');
    Route::view('/sign-up', 'pages.authentication.sign-up')->name('sign-up');
    Route::view('/forgot-password', 'pages.authentication.forgot-password')->name('forgot-password');
    Route::view('/reset-password', 'pages.authentication.reset-password')->name('reset-password');
    Route::view('/locked', 'pages.authentication.locked')->name('locked');
});

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::view('/', 'pages.dashboard.index')->name('home');
    Route::view('/transactions', 'pages.transactions.index')->name('transactions');
    Route::view('/settings', 'pages.settings.index')->name('settings');
    Route::view('/tables', 'pages.tables.index')->name('tables');
    Route::group(['prefix' => 'components'], function () {
        Route::view('/buttons', 'pages.buttons.index')->name('buttons');
        Route::view('/notifications', 'pages.notifications.index')->name('notifications');
        Route::view('/forms', 'pages.forms.index')->name('forms');
        Route::view('/modals', 'pages.modals.index')->name('modals');
        Route::view('/typography', 'pages.typography.index')->name('typography');
    });
});
Route::group(['prefix' => 'error', 'as' => 'error.'], function () {
    Route::get('/', function () {
        return redirect()->route('error.404');
    })->name('base');

    Route::view('/404', 'errors.404')->name('404');
    Route::view('/500', 'errors.500')->name('500');
});
