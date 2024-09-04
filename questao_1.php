<?php

        
    // 1) Observe o trecho de código abaixo: int INDICE = 13, SOMA = 0, K = 0;
    // Enquanto K < INDICE faça { K = K + 1; SOMA = SOMA + K; }
    // Imprimir(SOMA);
    // Ao final do processamento, qual será o valor da variável SOMA? Será 91.

    function somaResultado()
    {
        $indice = 13;
        $soma = 0;
        $k = 0;

        while($k < $indice)
        {
            $k += 1;
            $soma += $k;
        }
        
        echo "Soma dos números de 1 a $indice: $soma\n";
    }


?>
