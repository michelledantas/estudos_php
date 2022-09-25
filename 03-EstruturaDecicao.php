<?php
    $a=60;
    $b="50";

    $saldo = -10;

    if ($a == $b){
        echo "Valores iguais <br>";
    }

    if ($a > $b){
        echo "A maior que B <br>";
    }


    //verifica se os tipos são iguais
    if ($a === $b){
        echo "As variáveis são do mesmo tipo<br>";
    } else {
        echo "As variáveis são de tipos diferentes<br>";
    }

    switch($a){
        case 5: 
            echo "O valor de a = 5";
            break;
        case 60;
            echo "O valor de a = 60";
            break;
        default:
            echo "O valor não foi encontrado";
    }

    echo "<br>";

    $nroCamisa = 8;

    switch($nroCamisa){
        case 1:
            echo "Goleiro";
            break;
        case 8:
            echo "";
            break;
        case 10:
            echo "";
            break;
        case 11:
            echo "Meio de campo";
            break;
        case 9:
            echo "";
            break;
        default:
            echo "Valor não encontrado";    
    }
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
    <?php if($saldo<0){ ?>
       <strong> Sem saldo </strong>
    <?php }
    else { ?>
        <strong> Com saldo </strong>
    <?php } ?>
</body>
</html>