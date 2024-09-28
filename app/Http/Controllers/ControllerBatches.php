<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBatches extends Controller
{
    public function batches()
    {
        return view('Club/batches');
 // Replace 'about' with your view name
    }
}
