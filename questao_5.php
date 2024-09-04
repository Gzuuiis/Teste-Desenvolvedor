<?php

    // 5) Escreva um programa que inverta os caracteres de um string.

    // IMPORTANTE:
    // a) Essa string pode ser informada através de qualquer entrada de sua preferência ou pode ser previamente definida no código;
    // b) Evite usar funções prontas, como, por exemplo, reverse;

    function inverte($string)
    {
        $palavraVetor = str_split($string);
        $palavraInvertida = "";

        for ($i = (count($palavraVetor) - 1); $i >= 0; $i--) 
        {
            $palavraInvertida .= $palavraVetor[$i]; 
        }

        echo "String invertida: $palavraInvertida\n";
    }

?>