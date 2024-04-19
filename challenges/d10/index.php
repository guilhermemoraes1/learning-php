<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d10</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php
        $ano = date("Y");
        $value1 = $_GET["v1"] ?? $ano - 10;
        $value2 = $_GET["v2"] ?? $ano + 1;
    ?>
    <main>  
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Em que ano você nasceu?</label>
            <input type="number" name="v1" id="idv1" min="1900" max="2900" value="<?=$value1?>">
            <label for="v2">Quer saber sua idade em que ano? (atualmente estamos em <?php echo "<strong>$ano</strong>"; ?>)</label>
            <input type="number" name="v2" id="idv2" min="1900" max="2999" value="<?=$value2?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            $age =$value2 - $value1;
            if ($value2 < $value1) {
                echo "Você nasceu em <strong>$value1</strong>, logo em <strong>$value2</strong> você não era nascido.";
            } else {
                echo "<p>Quem nasceu em $value1 vai ter <strong>$age anos</strong> em $value2!</p>";
            }
        ?>
    </section>
</body>
</html>