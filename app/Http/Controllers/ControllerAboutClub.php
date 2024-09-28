<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAboutClub extends Controller
{
    public function aboutclub()
    {
        return view('Club/aboutClub');
 // Replace 'about' with your view name
    }
}
