<?php
    $value1 = 8;
    $value2 = 7;
    $value3 = 9;
    $value4 = 10;

    $media = ($value1 + $value2 + $value3 + $value4) / 4

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<strong> Valor 1: </strong> " . $value1 . "<br>";
        echo "<strong> Valor 2: </strong>" . $value2 . "<br>";
        echo "<strong> Valor 3: </strong>" . $value3 . "<br>";
        echo "<strong> Valor 4: </strong>" . $value4 . "<br><br>";

        echo "<strong>Média: </strong>" . $media . "<br>"
    ?>
</body>
</html>