<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerOrganizationalChart extends Controller
{
    public function organizationalChart()
    {
        return view('Club/organizationalChart');
 // Replace 'about' with your view name
    }
}
