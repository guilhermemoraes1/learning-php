<?php 
    require './api.php';
    
    if ($data !== null && isset($data["value"][0]["cotacaoCompra"]) && isset($data["value"][0]["dataHoraCotacao"])) {

        // Carrega o array de cotações existente
        $cotacoes = [];
        if (file_exists('cotacoes-array.json')) {
            $cotacoes = json_decode(file_get_contents('cotacoes-array.json'), true);
        }

        // Verifica se já existe uma cotação para a data atual
        if (!isset($cotacoes[$date_c])) {
            // Adiciona a cotação ao array
            $cotacoes[$date_c] = $cotacao;

            // Salva o array de cotações no arquivo
            file_put_contents('cotacoes-array.json', json_encode($cotacoes));

            echo "Cotação armazenada com sucesso para a data: $date_c";
        } else {
            echo "Já existe uma cotação armazenada para a data: $date_c";
        }
    } else {
        echo "Erro ao obter dados de cotação do serviço externo.";
    }
?>