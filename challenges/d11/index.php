<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d11</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php
        $value1 = $_GET["v1"] ?? 100;
        $value2 = $_GET["v2"] ?? 1;
    ?>
    <main>  
        <h1>Reajustador de preços</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Preço do produto (R$)</label>
            <input type="number" name="v1" id="idv1" min="1" value="<?=$value1?>">
            <label for="v2">Qual será o percentual do reajuste? </label>
            <input type="number" name="v2" id="idv2" min="0" value="<?=$value2?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
            $price = ($value1 * (100 + $value2))/100;
        ?>
        <p>O produto que custava R$<?=number_format($value1, 2, ",", ".")?>, com <strong><?=$value2?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($price, 2, ",", ".")?></strong> a partir de agora.</p>

    </section>
</body>
</html>