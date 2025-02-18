<?php

class Solution {

    /**
    * @param Integer $x
    * @return Boolean
    */
    function isPalindrome($x) {
        if($x < 0)
            return false;

        $length = strlen($x) - 1;

        $palindrome = false;

        for($i = 0; $i <= $length; $i){
            for($j = $length; $j >= 0; $j){
                if($x[$i] == $x[$j]){
                    $palindrome = true;
                }
            }
        }

        return $palindrome;
    }
}

$solution = new Solution();

return $solution->isPalindrome(121);

//Usar %10 permite pegar o ultimo digito de um inteiro