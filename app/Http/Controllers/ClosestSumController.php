<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClosestSumController extends Controller
{
   public function index(){
       
        $given_arr  = [6, 10, 55, 40, 20 ];
        $given_limit = 67;
        $minDist = null;
        $minDist_I = null;

    // Iterate on any possible combination
    $maxI = pow(2,sizeof($given_arr ));
    for($i=0;$i<$maxI;$i++) {
        if(!(($i+1) % 100)) echo ".";
        
        // Finds which numbers to select 
        $sum = 0;
        for($j=0;$j<sizeof($given_arr );$j++) {
            if($i & (1 << $j)) {
                $sum += $given_arr [$j];
            }
        }
        $diff = abs($sum - $given_limit);

        if($minDist_I === null || $diff < $minDist) {
            $minDist_I = $i;
            $minDist = $diff;
        }
        
        if($diff == 0) break;
    }

    $chosen = array();
    for($j=0;$j<sizeof($given_arr );$j++) {
        if($minDist_I & (1 << $j)) $chosen[] = $given_arr [$j];
    }

    $closest_total= array_sum($chosen);
    $closest_arr = implode(", ", $chosen);

    //Print out the result
    return "The closest total is ".$closest_total." and the choosen array is { ".$closest_arr ."}";
   }
}
