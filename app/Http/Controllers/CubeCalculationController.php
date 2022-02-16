<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CubeCalculationController extends Controller
{
     public function cube(Request $request){
        $num = $request->input('number'); 
        return $num*$num*$num;
    }
}
