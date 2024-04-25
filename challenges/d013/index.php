<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d13</title>
    <link rel="stylesheet" href="../../style/style.css">
    <style>
        img.nota {
            height: 30px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
        $value1 = $_GET["v1"] ?? 15;
    ?>
    <main>  
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="v1" id="idv1" min="5" step="5" required value="<?=$value1?>">
            <small style="font-size: 0.6em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</small>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?=number_format($value1, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <?php
            $hundred = (int) ($value1/100);
            $value1 %= 100;

            $fifty = (int) ($value1 / 50);
            $value1 -= ($fifty * 50);

            $ten = (int) ($value1 / 10);
            $value1 -= ($ten * 10);

            $five = (int) ($value1 / 5);
            $value1 -= ($five * 5);
        ?>
        
        <ul>
            <li><img src="images/100-reais.jpg" class="nota" alt="Nota de 100"> x<?=$hundred?></li>
            <li><img src="images/50-reais.jpg" class="nota" alt=""> x<?=$fifty?></li>
            <li><img src="images/10-reais.jpg" class="nota" alt=""> x<?=$ten?></li>
            <li><img src="images/5-reais.jpg" class="nota" alt=""> x<?=$five?></li>
        </ul>
    </section>
</body>
</html>