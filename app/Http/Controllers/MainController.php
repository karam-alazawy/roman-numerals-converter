<?php

namespace App\Http\Controllers;

use App\Utils\RomanUtil;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $romanUtil;

    public function __construct(RomanUtil $romanUtil)
    {
        //use util when construct
        $this->romanUtil = $romanUtil;
    }
    
    //converter to roman number , take normal number 
    public function toRoman(Request $request) {
        $number=request()->get('number');
        $roman = $this->romanUtil->toRoman($number);
       
        return response()->json(['roman'=>$roman,'normal'=>$number],200);
    }

    //converter to number , take roman number 
    public function toNumber(Request $request) {
        $roman=request()->get('roman');
        $number = $this->romanUtil->toNumber($roman);
       
        return response()->json(['roman'=>strtoupper($roman),'normal'=>$number],200);
    }

    //summation function take 2 roman numbers
    public function sum(Request $request) {
        $roman1=request()->get('roman1');
        $roman2=request()->get('roman2');
        $sumNumber = $this->romanUtil->sum($roman1,$roman2);
        $sumRoman = $this->romanUtil->toRoman($sumNumber);
       
        return response()->json(['roman'=>strtoupper($sumRoman),'normal'=>$sumNumber],200);
    }


    //multiplication function take 2 roman numbers
    public function multiply(Request $request) {
        $roman1=request()->get('roman1');
        $roman2=request()->get('roman2');
        $sumNumber = $this->romanUtil->multiply($roman1,$roman2);
        $sumRoman = $this->romanUtil->toRoman($sumNumber);
       
        return response()->json(['roman'=>strtoupper($sumRoman),'normal'=>$sumNumber],200);
    }
    
}
