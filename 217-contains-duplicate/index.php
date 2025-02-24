<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        for($i = 0; $i < count($nums); $i++){
            for($j = 0; $j < count($nums); $j++){
                if(($nums[$i] == $nums[$j]) && ($i != $j)){
                    return true;
                }
            }
        }

        return false;
    }
}

$solution = new Solution();

echo $solution->containsDuplicate([1,2,3,1]);