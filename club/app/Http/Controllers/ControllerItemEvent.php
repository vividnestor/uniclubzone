<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerItemEvent extends Controller

{
    public function index()
    {
        // Logic to fetch all items
        return view('Club/Events/index');
    }

    public function event()
    {
        // Logic to fetch items for casual events
        return view('Club/Events/event');
    }

    public function competition()
    {
        // Logic to fetch items for competitions
        return view('Club/Events/competition');
    }

    public function gallery()
    {
        // Logic to fetch items for galleries
        return view('Club/Events/gallery');
    }
}
