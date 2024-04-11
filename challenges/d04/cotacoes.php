<?php
// Função para carregar o array de cotações do arquivo
function loadCotacoesFromFile($filename) {
    if (file_exists($filename)) {
        $contents = file_get_contents($filename);
        return json_decode($contents, true);
    } else {
        return [];
    }
}

// Função para salvar o array de cotações no arquivo
function saveCotacoesToFile($filename, $cotacoes) {
    $json = json_encode($cotacoes);
    file_put_contents($filename, $json);
}

// Nome do arquivo para armazenar as cotações
$filename = 'cotacao.json';

// Carregar as cotações existentes do arquivo
$cotacoes = loadCotacoesFromFile($filename);

// Verificar se já passou 24 horas desde a última atualização
if (empty($cotacoes) || time() - $cotacoes[count($cotacoes) - 1]['timestamp'] >= 24 * 60 * 60) {
    // Recuperar a cotação mais recente
    require './api.php';

    // Adicionar a nova cotação ao array
    $cotacoes[] = [
        'cotacao' => $cotacao,
        'timestamp' => time()
    ];

    // Salvar o array atualizado no arquivo
    saveCotacoesToFile($filename, $cotacoes);
}

// Exibir as cotações
echo "Cotações:\n";
foreach ($cotacoes as $c) {
    echo $c['timestamp'] . ": " . $c['cotacao'] . "\n";
}
?>