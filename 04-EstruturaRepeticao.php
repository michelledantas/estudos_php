<?php
    echo "Estrutura For <br>";
    for($x = 0; $x<5; $x++){
        echo "Valor de x: $x <br>"; 
    }

    echo "<br>Estrutura while <br>";
    $x = 0;
    while($x<5){
        echo "Valor de x: $x <br>";
        $x++;
    }

    echo "<br>Estrutura do while <br>";
    $x = 0;
    do {
        echo "Valor de x: $x <br>";
        $x++;
    }
    while($x < 5);

    echo "<br>Vetor <br>";
    $produtos =['Pão', 'Leite','Café','Bolacha','Queijo','Presunto', 'Geleia', 'Requeijão'];
    foreach($produtos as $prod){
        echo "Produto: $prod <br>";
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
    
     <h1>Produtos</h1>
    <select name="slcProduto">
        <?php foreach($produtos as $prod){ ?>
            <option> <?php echo $prod; ?> </option>
        <?php } ?>
    </select>
    
    <br><br>

    <table border="1">
        <tr>
            <td>Produto</td>
        </tr>
        <?php foreach($produtos as $prod){ ?>
            <tr>        
                <td> <?php echo $prod ?></td>
            </tr>
        <?php } ?>

    </table> 
</body>
</html>
