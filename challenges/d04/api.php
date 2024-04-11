<?php 
    $start = date("m-d-Y", strtotime("-7 days"));
    $end = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27' . $start . '%27&@dataFinalCotacao=%27' . $end . '%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $data = json_decode(file_get_contents($url), true);

    $cotacao = $data["value"][0]["cotacaoCompra"];
    $date_c = $data["value"][0]["dataHoraCotacao"];

    //echo "A cotação é " . $cotacao;
?>