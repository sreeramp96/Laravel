<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage()
    {
        return '<h1>Welcome to Home Page<h1><a href="/about">View About</a>';
    }

    public function aboutpage()
    {
        return '<h1>About Page<h1><a href="/">back to home</a>';
    }
}