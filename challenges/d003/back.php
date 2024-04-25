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

        $number = $_GET["money"];
        $fixed_exchange_rate = 5.07;
        $value = $number / $fixed_exchange_rate;

        // using number_format()
        // echo "<p>Seus R$" . number_format($number, 2, ",", ".") . " equivalem a <strong>US$" . number_format($value, 2, ",", ".") . " </strong></p>";

        // Internalization 
        $default = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($default, $number, "BRL") . " equivalem a <strong>" . numfmt_format_currency($default, $value, "USD") . "</strong></p>";
        echo "<small><strong>*Cotação fixa de R$5,07</strong> informada diretamente no código.</small>"
        ?>
        <br>
        <br>
        <a href="javascript:history.go(-1)"><input type="button" value="⬅ Voltar"></a>
    </section>
</body>
</html>

