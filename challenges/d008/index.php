<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d08</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <?php 
        $number = $_GET["v1"] ?? 1;
    ?>
    <main>  
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Número</label>
            <input type="number" name="v1" id="idv1" min="1" value="<?=$number?>">
            <input type="submit" value="Calcular raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>

        <?php
            echo "<p>Analisando o <strong>número " . $number . "</strong>, temos: </p>";
            echo "<ul><li>A sua raiz quadrada é <strong>" . number_format(($number**(1/2)), "3", ",", ".") . "</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>" . number_format(($number**(1/3)), "3", ",", ".") . "</strong></li></ul>";

        ?>
    </section>
</body>
</html>