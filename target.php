<?php
require_once 'questao_1.php';
require_once 'questao_2.php';
require_once 'questao_3.php';
require_once 'questao_4.php';
require_once 'questao_5.php';

function main()
{
    
    echo "\n:) ====== Questão 1 ====== :)\n\n";

    // 1. Soma Resultado
    somaResultado();

    echo "\n:) ====== Questão 2 ====== :)\n\n";

    // 2. Fibonacci
    $target = 21; // Exemplo de valor
    fibonnaci($target);

    echo "\n:) ====== Questão 3 ====== :)\n\n";

    // 3. Faturamento
    $dados_json = '[
        {"dia": 1, "valor": 22174.1664},
        {"dia": 2, "valor": 24537.6698},
        {"dia": 3, "valor": 26139.6134},
        {"dia": 4, "valor": 0.0},
        {"dia": 5, "valor": 0.0},
        {"dia": 6, "valor": 26742.6612},
        {"dia": 7, "valor": 0.0},
        {"dia": 8, "valor": 42889.2258},
        {"dia": 9, "valor": 46251.174},
        {"dia": 10, "valor": 11191.4722},
        {"dia": 11, "valor": 0.0},
        {"dia": 12, "valor": 0.0},
        {"dia": 13, "valor": 3847.4823},
        {"dia": 14, "valor": 373.7838},
        {"dia": 15, "valor": 2659.7563},
        {"dia": 16, "valor": 48924.2448},
        {"dia": 17, "valor": 18419.2614},
        {"dia": 18, "valor": 0.0},
        {"dia": 19, "valor": 0.0},
        {"dia": 20, "valor": 35240.1826},
        {"dia": 21, "valor": 43829.1667},
        {"dia": 22, "valor": 18235.6852},
        {"dia": 23, "valor": 4355.0662},
        {"dia": 24, "valor": 13327.1025},
        {"dia": 25, "valor": 0.0},
        {"dia": 26, "valor": 0.0},
        {"dia": 27, "valor": 25681.8318},
        {"dia": 28, "valor": 1718.1221},
        {"dia": 29, "valor": 13220.495},
        {"dia": 30, "valor": 8414.61}
    ]';
    
    $resultadoFaturamento = faturamento($dados_json);
    echo "Menor faturamento: " . $resultadoFaturamento["menor_faturamento"] . "\n";
    echo "Maior faturamento: " . $resultadoFaturamento["maior_faturamento"] . "\n";
    echo "Dias acima da média: " . $resultadoFaturamento["dias_acima_media"] . "\n";

    echo "\n:) ====== Questão 4 ====== :)\n\n";

    // 4. Faturamento por estados
    $faturamentoEstados = ['SP' => 67836.43, 'RJ' => 36678.66, 'MG' => 29229.88, 'ES' => 27165.48, 'Outros' => 19849.53];
    faturamentoEstados($faturamentoEstados);

    echo "\n:) ====== Questão 5 ====== :) \n\n";

    // 5. Inverte string
    $string = 'Target Sistemas';
    inverte($string);

    echo "\n:) ====== FIM ====== :)\n\n";

    echo "Obrigado por ter chego aqui. Abraços!";
}

main();
?>
