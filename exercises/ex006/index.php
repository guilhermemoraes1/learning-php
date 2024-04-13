<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php 
        $value1 = $_GET["v1"] ?? 0;
        $value2 = $_GET["v2"] ?? 0;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Value 1</label>
            <input type="number" name="v1" id="idv1" value="<?=$value1?>">
            <label for="v2">Value 2</label>
            <input type="number" name="v2" id="idv2" value="<?=$value2?>">
            <input type="submit" value="Sum">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            $sum = $value1 + $value2;
            echo "<p>A soma entre os valores $value1 e $value2 é <strong>igual a $sum</strong>.</p>";
        ?>
    </section>
</body>
</html>