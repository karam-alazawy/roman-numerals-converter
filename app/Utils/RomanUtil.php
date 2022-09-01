<?php

namespace App\Utils;


class RomanUtil 
{

    protected $myRomanNumbers = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
   
    //get normal and return roman number
    public function toRoman($number=0) {
        $x = '';
        while ($number > 0) {
            foreach ($this->myRomanNumbers as $key => $value) {
                if($number >= $value) {
                    $number -= $value;
                    $x .= $key;
                    break;
                }
            }
        }
        return $x;
    }
    public function toNumber($roman=null) {
        if (is_null($roman)) return 'need data!';
        $result = 0;
        $roman=strtoupper($roman);
        
        foreach ($this->myRomanNumbers as $key => $value) {
            while (strpos($roman, $key) === 0) {
                $result += $value;
                $roman = substr($roman, strlen($key));
            }
        }
        return $result;
    }

    public function sum($roman1=null,$roman2=null) {
        if (is_null($roman1) || is_null($roman2)) return 'need data!';
        $roman1=$this->toNumber($roman1);
        $roman2=$this->toNumber($roman2);

        return $roman1+$roman2;
    }


    public function multiply($roman1=null,$roman2=null) {
        if (is_null($roman1) || is_null($roman2)) return 'need data!';
        $roman1=$this->toNumber($roman1);
        $roman2=$this->toNumber($roman2);

        return $roman1*$roman2;
    }

}
