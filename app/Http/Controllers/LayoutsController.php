<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutsController extends Controller
{
public function home() {
        return view('layouts.home');
    }

    public function about() {
        return view('layouts.about');
    }

    public function blog() {
        return view('layouts.blog');
    }
}
