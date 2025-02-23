<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $max = 0;

        for($i = 0; $i < count($prices) - 1; $i++){
            for($j = 0; $j < count($prices) -1; $j++){
                $tmp = $prices[$i] - $prices[$j];
                if($tmp > $max){
                    $max = $tmp;
                }
            }
        }

        return $max - 1;
    }
}

$solution = new Solution();

echo $solution->maxProfit([7,1,5,3,6,4]);