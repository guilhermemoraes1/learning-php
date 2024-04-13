<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP exercise</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("date", "09/04/24", time() + 3600);

                session_start();
                $_SESSION["test"] = "Worked!";

                echo "<h1>SuperGlobal GET</h1>";
                var_dump($_GET);

                echo "<h1>SuperGlobal POST</h1>";
                var_dump($_POST);

                echo "<h1>SuperGlobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>SuperGlobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>SuperGlobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>SuperGlobal ENV</h1>";
                var_dump($_ENV);

                // foreach(getenv() as $c => $v){
                //     echo "<br> $c -> $v";
                // };

                echo "<h1>SuperGlobal SERVER</h1>";
                var_dump($_SERVER);

                // Displays all the SuperGlobals
                echo "<h1>SuperGlobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>