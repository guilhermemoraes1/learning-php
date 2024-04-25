<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backend</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <section>
        <h1>Analisador de número real</h1>
        <?php 

        $number = (float) $_GET["number"];
        $int = (int) $number;
        $frac = $number - $int;



        echo "<p>Analisando o número <strong>" . number_format($number, 3, ",", ".") . "</strong> informado pelo usuário: </p>";
        echo "<ul><li>A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong>";
        echo "<li>A parte fracionária do número é <strong>" . number_format($frac, 3, ",", ".") . "</strong></li></ul>";

        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="⬅ Voltar"></a>
    </section>
</body>
</html>