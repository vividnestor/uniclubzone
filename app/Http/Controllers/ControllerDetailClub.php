<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDetailClub extends Controller
{
    public function details()
    {
        return view('Club/index');
 // Replace 'about' with your view name
    }
}
