<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d02</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100... </p>
        <?php
            $number = rand(0, 100); 
            echo "<p>O valor gerado foi <strong>$number</strong></p>"; 
        ?>
        <button onclick="window.location.reload()" type="reset">⟳ Gerar outro</button>
        
    </section>
</body>
</html>