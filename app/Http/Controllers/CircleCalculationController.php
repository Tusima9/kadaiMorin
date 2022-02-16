<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CircleCalculationController extends Controller
{
    

    function CircleArea(Request $request){
        define("PI",3.14);
        $num = $request->input('number'); 
        return PI * ($num*$num);

    }
}
