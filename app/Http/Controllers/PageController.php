<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Movie;
use app\Http\Controllers\PageController;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.user.home');
    }
}
