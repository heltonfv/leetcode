<?php

class Solution {

    /**
    * @param Integer $x
    * @return Boolean
    */
    function isPalindrome($x) {
        if($x < 0 || $x % 10 == 0 && $x != 0)
            return false;

        $invertedHalf = 0;

        while ($x > $invertedHalf){
            $invertedHalf = ($invertedHalf * 10) + ($x % 10);
            $x = (int)($x/10);
        }

        if(($x == $invertedHalf) || $x == (int)($invertedHalf / 10))
            return true;

        return false;
    }
}

$solution = new Solution();

echo $solution->isPalindrome(20);

// Usar %10 permite pegar o ultimo digito de um inteiro
// Solucao
// Verifica numeros negativos, pois se for negativo nao eh palindromo
// Verifica se multiplo de 10 e diferente de 0, pois nao eh palindromo(30, 40, 50)
// Incrementa invertedHalf com a metade
// Decrementa x ate a metade final do valor
// Enquanto x for maior que o invertedHalf, continua decrementando e incrementando ate que as duas metades se tornem iguais