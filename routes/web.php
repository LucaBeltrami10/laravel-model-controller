<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PageController as UserPageController;

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

Route::get('/', [UserPageController::class, 'index']);

Route::get('/admin', function () {
    return view('pages.admin.home');
});
