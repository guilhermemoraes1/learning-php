<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backend</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <?php 

        $number = (int) $_GET["number"];
        $ant = $number - 1;

        echo "<p>O número escolhido foi <strong>$number</strong></p>";
        echo "<p>O seu <em>antecessor</em> é $ant</p>";
        echo "<p>O seu <em>sucessor</em> é " . $number + 1 . "</p>";

        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="⬅ Voltar"></a>
    </section>
</body>
</html>

