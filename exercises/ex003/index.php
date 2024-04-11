<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data types</title>
</head>
<body>
    <h1>Test of Scalar types</h1>
    <?php
        // 0x = hexadecimal
        // 0b = binary
        // 0 = octal

        // $num = 010;
        // echo "O número é $num";

        // 2 * 10(3) = 2000
        $number = 2e3;
        echo 'The type and value are ';
        var_dump($number);
        
        // Coercion
        echo "<br><br>";
        $value = (int) "30";
        var_dump($value);

        // Boolean
        echo "<br><br>";
        $true = true;
        $false = false;
        echo "Show the boolean true using a echo/print $true" . "<br>";
        echo "Show the boolean false using a echo/print $false";

        echo "<h2>Test of Compound types</h2>";

        // Array
        echo "<br><br>";
        $list = [23, "Data link layer", 3e2, false];
        var_dump($list);

        //Object
        echo "<br><br>";

        class Person {
            private string $name;
        }

        var_dump(new Person);
    ?>
</body>
</html>