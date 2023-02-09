<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::name('pages.')->group(function () {
    Route::get('/', [HomePageController::class, 'index'])->name('home');

    Route::get('/courses', function () {
        return view('coursesPage');
    })->name('courses');

    Route::get('/profile', function () {
        return view('profilePage');
    })->name('profile');

    Route::get('/messages', function () {
        return view('messagesPage');
    })->name('messages');

    Route::get('/settings', function () {
        return view('settingsPage');
    })->name('settings');
});
