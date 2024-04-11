<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Result</h1>
    </header>
    <main>
        <?php 
            // $_REQUEST = $_GET + $_POST + $_COOKIES
            // null coalescing operator
            $name = $_GET["nome"] ?? "'username missing'";
            $surname = $_GET["sobrenome"] ?? "'last name missing'";
            echo "<p>É um prazer te conhecer, <strong>$name $surname</strong>, seja bem-vindo.</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>

    </main>
</body>
</html>