<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquareCalculationController extends Controller
{
    public function sqrt(Request $request){
        $num = $request->input('number'); 
        return pow($num,2);
    }
}
