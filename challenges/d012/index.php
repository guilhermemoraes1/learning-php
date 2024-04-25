<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d12</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php
        $value1 = $_GET["v1"] ?? 0;
    ?>
    <main>  
        <h1>Calculadora de tempo</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Qual é o total de segundos?</label>
            <input type="number" name="v1" id="idv1" min="1" value="<?=$value1?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($value1, 0, ",", ".    ")?> segundos</strong> equivalem a um total de: </p>
        <?php
            $weeks = (int) ($value1/604800);
            $value1 = $value1 - ($weeks * 604800);

            $days = (int) ($value1 / 86400);
            $value1 = $value1 - ($days * 86400);

            $hours = (int) ($value1 / 3600);
            $value1 = $value1 - ($hours * 3600);

            $minutes = (int) ($value1 / 60);
            $value1 = $value1 - ($minutes * 60);
        ?>
        
        <ul>
            <li><?=$weeks?> semanas</li>
            <li><?=$days?> dias</li>
            <li><?=$hours?> horas</li>
            <li><?=$minutes?> minutos</li>
            <li><?=$value1?> segundos</li>
        </ul>

    </section>
</body>
</html>