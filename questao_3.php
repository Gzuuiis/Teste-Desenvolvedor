<?php

    // 3) Dado um vetor que guarda o valor de faturamento diário de uma distribuidora, faça um programa, na linguagem que desejar, que calcule e retorne:
    // • O menor valor de faturamento ocorrido em um dia do mês;
    // • O maior valor de faturamento ocorrido em um dia do mês;
    // • Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.

    // IMPORTANTE:
    // a) Usar o json ou xml disponível como fonte dos dados do faturamento mensal;
    // b) Podem existir dias sem faturamento, como nos finais de semana e feriados. Estes dias devem ser ignorados no cálculo da média;

    function faturamento($json)
    {
        $dados = json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return "Erro ao decodificar JSON: " . json_last_error_msg();
        }

        $faturamento = $dados;

        $valores = [];
        foreach ($faturamento as $item) {
            if ($item['valor'] > 0) {
                $valores[] = $item['valor'];
            }
        }
        
        if (empty($valores)) {
            return "Nenhum faturamento registrado.";
        }
        
        $menorFaturamento = min($valores);
        $maiorFaturamento = max($valores);
        
        $mediaMensal = array_sum($valores) / count($valores);

        $diasAcimaMedia = 0;
        foreach ($valores as $valor) {
            if ($valor > $mediaMensal) {
                $diasAcimaMedia++;
            }
        }
        
        return [
            "menor_faturamento" => $menorFaturamento,
            "maior_faturamento" => $maiorFaturamento,
            "dias_acima_media" => $diasAcimaMedia
        ];
    }

?>