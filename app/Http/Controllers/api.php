<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class api extends Controller
{
    //return index view
    public function index()
    {
        return view('index');
    }
}
