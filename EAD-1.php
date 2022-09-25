<?php

//-----------------------------------------------------------------------------------------------------------

echo "<br>-----------------------------------------------------------------------------------------------------------<br>";
echo "<strong>Exercício 1 <br>
Encontre e exiba o elemento mínimo e máximo em um array. O array deve ser inicializada na programação.<br>
EX: Entrada:<br>
    vetor[ ] = {7, 5, 3, 60, 800,555}<br>
    <br>Resultado: <br>
    </strong>";
$numeros = [7, 5, 3, 60, 800, 555];
$minimo = 9999;
$maximo = -1;

foreach($numeros as $numero){
    if ($numero < $minimo){
        $minimo = $numero;
    }
    if ($numero > $maximo){
        $maximo = $numero;
    }
}

echo "Mínimo: $minimo <br>";
echo "Máximo: $maximo <br>";
echo "<br>-----------------------------------------------------------------------------------------------------------<br>";

//-----------------------------------------------------------------------------------------------------------

echo "<strong>Exercício 2 <br>
Remova os elementos duplicados de um array informado e exiba o vetor resultante. O array deve ser inicializada na programação. <br>
Exemplos: <br>
Entrada: <br>
vetor[ ] = {7, 7, 7,7} <br>
vetor[ ] = {7, 8, 8, 9,9} <br>
<br>Resultado: <br>
    </strong>";
$i = 0;
$vetor1 = [7,7,7,7];
$vetor2 = [7, 8, 8, 9,9];
$vet1SemRepeticao = array_unique($vetor1, SORT_REGULAR);
$vet2SemRepeticao = array_unique($vetor2, SORT_REGULAR);
echo "Vetor 1 sem repetições: <br>";
print_r($vet1SemRepeticao);
echo "<br>Vetor 2 sem repetições: <br>";
print_r($vet2SemRepeticao);

echo "<br>-----------------------------------------------------------------------------------------------------------<br>";

//-----------------------------------------------------------------------------------------------------------

echo "<strong>Exercício 3 <br>
Exiba o primeiro e segundo maior elemento de um array. O array deve ser inicializada na programação<br>
EX: Entrada:<br>
    vetor[ ] = {7, 5, 300, 60, 800, 73} <br>
    <br>Resultado: <br>
    </strong>";
    $numeros = [7, 5, 300, 60, 800, 73];
    $primeiroMaiorElemento = -1; //7 //300
    $segundoMaiorElemento = -2; //5

    foreach($numeros as $numero){
        if ($numero >= $primeiroMaiorElemento){  
            $segundoMaiorElemento = $primeiroMaiorElemento;
            $primeiroMaiorElemento = $numero;   
        }   
    }
    echo "<br>primeiroMaiorElemento: " . $primeiroMaiorElemento;
    echo "<br>segundoMaiorElemento: " . $segundoMaiorElemento;


//-----------------------------------------------------------------------------------------------------------




?>

