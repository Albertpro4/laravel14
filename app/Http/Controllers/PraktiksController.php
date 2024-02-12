<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\praktika;
use App\Сourse;
use Illuminate\Http\Request;

class PraktiksController extends Controller
{
    public function index()
    {
        $countries = Course::all();
        return view('country_form', ['countries' => $countries]);
    }

    public function selectCity(Request $request){
       
    }
}