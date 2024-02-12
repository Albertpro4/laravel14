<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function mosk() 
    {
        return view('Features.mosk');
    }
}
