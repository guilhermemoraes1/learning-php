<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <?php 
            
            // my api
            require './api.php';

            $number = $_GET["money"];
            $value = $number / $cotacao;

            // Internalization 
            $default = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($default, $number, "BRL") . " equivalem a <strong>" . numfmt_format_currency($default, $value, "USD") . "</strong></p>";
            echo "<small>   *Cotação obtida diretamente do site do <a>Banco Central do Brasil</a>.</small>"
        ?>
        <br>
        <br>
        <a href="javascript:history.go(-1)"><input type="button" value="⬅ Voltar"></a>
    </section>
</body>
</html>