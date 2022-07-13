<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NaivashaController extends Controller
{
    public function __invoke()
    {
        return view('naivasha');
    }

    public function create()
    {
        return view('form');
    }

    
}
