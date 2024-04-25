<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d07</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php 
        $min = 1_412;
        $money = $_GET["v1"] ?? $min;
    ?>
    <main>  
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Salário (R$)</label>
            <input type="number" name="v1" id="idv1" min="<?=$min?>" value="<?=$money?>">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($min, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>

        <?php
            $quant = intdiv($money, $min);
            $rest = $money % $min;
            echo "Quem recebe um salário de R$" . number_format($money, 2, ",", ".") . " ganha <strong>" . number_format($quant, 0) . " salários mínimos </strong> + R$ " . number_format($rest, 2, ",", ".") . ".";
        ?>
    </section>
</body>
</html>