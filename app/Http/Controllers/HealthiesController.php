<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthiesController extends Controller
{
    public function health(){
        return view('categories.health');
    }        
}
