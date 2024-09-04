<?php

    // 2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), 
    // escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.

    // IMPORTANTE: Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;

    function fibonnaci($target)
    {
        $primeiro = 0;
        $anterior = 1;
        $i = 2;
        
        if ($target == $primeiro) {
            echo "Valor $target encontrado na posição: 0 da sequência de Fibonacci\n";
            return;
        }

        if ($target == $anterior) {
            echo "Valor $target encontrado na posição: 1 da sequência de Fibonacci\n";
            return;
        }

        while($anterior <= $target) { 
            $proximo  = $primeiro + $anterior;
            $primeiro = $anterior;
            $anterior = $proximo;
            $i++;

            if($proximo == $target)
            {
                echo "Valor $target encontrado na posição: $i da sequência de Fibonacci\n";
                return;
            }
        }

        echo "Valor $target não pertence à sequência de Fibonacci\n";
    }

?>
