<?php 
    $base = 5;
    $expoente = 3;
    $potencia = $base;
    

    echo "Potência de $base elevado ao expoente $expoente <br>";
    
    /*
    for ($i = 1; $i<$expoente; $i++){
        $potencia *= $base ;
        
    }*/

    echo "<br>Potência: $potencia";

    $i = 1;
    /*
    while($i <$expoente){
        $potencia *= $base ;
        $i++;
    }*/

    do{
        $potencia *= $base ;
        $i++;
    }while($i <$expoente);
    echo "<br>Potência: $potencia";

?>