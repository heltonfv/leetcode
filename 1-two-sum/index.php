<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for($i = 0; $i <= count($nums) - 1; $i++){
            for($j = $i + 1; $j <= count($nums) - 1; $j++){
                print_r($i, $j);
                if(($nums[$i] + $nums[$j]) == $target){
                    return [$i, $j];
                }
            }
        }
    }
}

$solution = new Solution();

print_r($solution->twoSum([3, 2, 4], 6));

// O j sempre vai percorrer os elementos a frente de i
// Não há necessidade de percorrer os anteriores, pois já foram testados