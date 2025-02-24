<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $minPrice = PHP_INT_MAX;
        $maxProfit = 0;

        foreach($prices as $price){
            if($price < $minPrice)
                $minPrice = $price;
            
            $profit = $price - $minPrice;

            if($profit > $maxProfit)
                $maxProfit = $profit;
        }

        return $maxProfit;
    }
}

$solution = new Solution();

echo $solution->maxProfit([7,1,5,3,6,4]);

// Solucao
// A ideia é percorrer o array uma única vez e manter o menor preço já encontrado enquanto calculamos o maior lucro possível a partir dele.