<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function agricuture(){
        return view('categories.agriculture');
    }

    public function estate(){
        return view('categories.estate');
    }

    public function health(){
        return view('categories.health');
    }

    public function technology(){
        return view('categories.technology');
    }
}
