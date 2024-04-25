<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d09</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php 
        $value1 = $_GET["v1"] ?? 0;
        $value2 = $_GET["v2"] ?? 0;
        $p1 = $_GET["p1"] ?? 1;
        $p2 = $_GET["p2"] ?? 1;
    ?>
    <main>  
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">1º valor</label>
            <input type="number" name="v1" id="idv1" min="0" required value="<?=$value1?>">
            <label for="p1">1º peso</label>
            <input type="number" name="p1" id="idp1" min="1" required value="<?=$p1?>">
            <label for="v2">2º valor</label>
            <input type="number" name="v2" id="idv2" min="0" required value="<?=$value2?>">
            <label for="p2">2º peso</label>
            <input type="number" name="p2" id="idp2" min="1" required value="<?=$p2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?php echo $value1 . " e " . $value2 ?>:</p>
        <?php
            $media_s = ($value1+$value2)/2;
            $media_p = ($value1 * $p1 + $value2 * $p2)/($p1 + $p2);

            echo "<ul><li>A<strong> Média Aritmética Simples</strong> entre os valores é igual a " . number_format($media_s, "2", ",", ".") . ".</li>";
            echo "<li>A<strong> Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a "  . number_format($media_p, "2", ",", ".") . ".</li></ul>";
        ?>
    </section>
</body>
</html>