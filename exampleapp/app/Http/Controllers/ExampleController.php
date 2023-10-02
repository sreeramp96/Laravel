<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage()
    {
        $ourName = 'Sreeram';
        $animals = ['Meowsalot', 'Barksalot', 'Purrsloud'];
        return view('homepage', ['name' => $ourName, 'catname' => 'Mewosalot', 'allAnimals' => $animals]);
    }

    public function aboutpage()
    {
        return '<h1>About Page<h1><a href="/">back to home</a>';
    }
}