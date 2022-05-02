<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }

    public function aboutus()
    {
        return view('component.about_us');
    }

    public function services(){
        return view('component.services');
    }
}
