<?php
    //echo "Hello World<br>";
    $codProd = 350;
    $desc = "TV OLED";
    $preco = 4500.00;
    $prodAtivoEstoque = 
    ;

    //O null apaga a variavel
    $forncedor = "Samsung";
    $forncedor = null;

    //Conversão implicita
    $exemplo = 10;
    $exemplo = 10.0;
    $exemplo = "100";

    //Conversão explicita
    $varA = 100;
    $varB = (float)$varA;
    $varC = (string)$varA;
    $varD = (bool)$varA;

    //-------------------------------
    //Constantes
    //-------------------------------
    const NRO_OURO = 1.618;

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
        //CONCATENAR
        echo "Código: " . $codProd . "<br>";
        echo "Código: $codProd <br>";

        //ESCREVER O TEXTO EM VEZ DE CONTACTENAR
        echo 'Código: $codProd <br>';

        echo "Preço: R$ $preco <br>";

        //IMPRIMINDO CASAS DECIMAIS
        echo "Preço: R$ " . number_format($preco,2,',','.') . "<br>";

        $ativo = null;

        if($prodAtivoEstoque == true){
            $ativo = "checked";
        }
    ?>

    Código Produto <input type="number" size=20 value="<?php echo $codProd; ?>" /> <br>
    Produto ativo: <input type="checkbox" <?php echo $ativo;  ?> />
</body>
</html>