<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgriculturesController extends Controller
{
   
    public function agriculture(){

        return view('categories.agriculture');
    }

}
