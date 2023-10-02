<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function aboutpage()
    {
        return '<h1>About Page<h1><a href="/">back to home</a>';
    }
}