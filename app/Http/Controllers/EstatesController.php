<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstatesController extends Controller
{
    public function estate(){
        return view('categories.estate');
    }
}
