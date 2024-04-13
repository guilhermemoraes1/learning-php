<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d06</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET["v1"] ?? 0;
        $divisor = $_GET["v2"] ?? 1;
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
    ?>
    <main>  
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="idv1" min="0" value="<?=$dividendo?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="idv2" min="1" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>

        <!-- <?php
            echo "Dividendo: " . $dividendo . "<br>";
            echo "Divisor: " . $divisor . "<br>";
            echo "Quociente: " . $quociente . "<br>";
            echo "Resto: " . $resto . "<br>";
        ?> -->
    </section>
</body>
</html>