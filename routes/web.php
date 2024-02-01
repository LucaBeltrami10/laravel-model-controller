<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController as UserPageController;


Route::get('/', [UserPageController::class, 'index']);

Route::get('/admin', function () {
    return view('pages.admin.home');
});
