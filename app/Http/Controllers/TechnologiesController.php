<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnologiesController extends Controller
{
    public function technology(){
        return view('categories.technology');
    }
}
