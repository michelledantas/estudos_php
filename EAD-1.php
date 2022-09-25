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

    echo "<br>-----------------------------------------------------------------------------------------------------------<br>";
//-----------------------------------------------------------------------------------------------------------

echo "<br><strong>Exercício 4 <br>
Encontre e exiba a quantidade de conjuntos, e seus três valores, que podem ser formados com os elementos de um array.
Exemplos: Entrada:<br>
    vetor[ ] = {7, 9, 11} <br>
    vetor[ ] = {7, 9, 11, 20, 55} <br>
    <br>Resultado: <br>
    </strong>";
    $vet1 = [7, 9, 11];
    $vet2 = [7, 9, 11, 20, 55];
    
    $numeroDeConjuntos = 0;
    $elementos = [];
    
    echo "<br>-----------------------------------------------------------------------------------------------------------<br>";
    //-----------------------------------------------------------------------------------------------------------
    
echo "<strong>Exercício 5 <br>
Encontre e exiba os valores lideres de um array. Um elemento é considerado líder se for maior ou igual aos elementos a sua esquerda. O último elemento do array, o mais a direita, é considerado um líder.
Exemplo: Entrada:<br>
    vetor[ ] = {7, 9, 11, 1, 2, 4,0} <br>

    <br>Resultado: <br>
    </strong>";
    $vetorEx4 = [7, 9, 11, 1, 2, 4,0];
    $tam = count($vetorEx4);
    $lider = 0;
    $vetor_lideres = [];

    for ($i=0; $i<$tam ; $i++){
        if ($vetorEx4[$i] > $lider && $vetorEx4[$i+1] < $vetorEx4[$i] ){
            $vetor_lideres[] = $vetorEx4[$i];
        }
    }
    $vetor_lideres[] = $vetorEx4[$tam-1];

    echo "Líderes: ";
    print_r($vetor_lideres);
    
    

?>

