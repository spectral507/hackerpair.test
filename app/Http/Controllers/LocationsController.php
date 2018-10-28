<?php

namespace App\Http\Controllers;

class LocationsController extends Controller
{
    public function index()
    {
        return view('locations.index');
    }
}
