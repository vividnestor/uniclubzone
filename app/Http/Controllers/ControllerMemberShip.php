<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMemberShip extends Controller
{
    public function membership()
    {
        return view('Club/membership');
 // Replace 'about' with your view name
    }
}
