<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function bisanUnsa() {
        return view('test');
    }
}
