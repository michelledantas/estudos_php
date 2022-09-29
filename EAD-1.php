<?php

//-----------------------------------------------------------------------------------------------------------

echo "<br>-----------------------------------------------------------------------------------------------------------<br>";
echo "<strong>Exercício 1 <br><br>
Encontre e exiba o elemento mínimo e máximo em um array. <br>
O array deve ser inicializada na programação.<br>
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

echo "<strong>Exercício 2 <br><br>
Remova os elementos duplicados de um array informado e exiba o vetor resultante. <br>
O array deve ser inicializada na programação. <br>
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
Exiba o primeiro e segundo maior elemento de um array. <br>
O array deve ser inicializada na programação<br>
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
//CORRIGIR
echo "<br><strong>Exercício 4 <br>
Encontre e exiba a quantidade de conjuntos, e seus três valores, que podem ser formados com os elementos de um array.
Exemplos: Entrada:<br>
    vetor[ ] = {7, 9, 11} <br>
    vetor[ ] = {7, 9, 11, 20, 55} <br>
    <br>Resultado: <br>
    </strong>";
    $vet1 = [7, 9, 11];
    $contVet1 = 0;
    
    $vet2 = [7, 9, 11, 20, 55];
    $contVet2 = 0;
    
    $tamVet1 = count($vet1);
    $tamVet2 = count($vet2);

    $conjuntosVet1=0;
    $conjuntosVet2=0;

    echo "Vetor[] = [7, 9, 11] <br><br>";
    for ($i=0; $i<=$tamVet1; $i++){
        if($i <= $tamVet1 -3){
            $contVet1 = $i +2;

            for($contVet1; $contVet1 < $tamVet1; $contVet1++){
                if($vet1[$i] != $vet1[$i+1] && $vet1[$contVet1] != $vet1[$i+1] && $vet1[$i] != $vet1[$contVet1]){
                    $conjuntosVet1++;
                    echo "Conjuntos: " . $vet1[$i] . ", " . $vet1[$i+1] . ", " . $vet1[$contVet1] . "<br>"; 
                }
            }
        }
    }
    echo "Número de conjuntos vetor : " . $conjuntosVet1 . "<br><br>";

    echo "Vetor[ ] = [7, 9, 11, 20, 55] <br><br>";
    for ($i=0; $i<=$tamVet2; $i++){
        if($i <= $tamVet2 -3){
            $contVet2 = $i +2;

            for($contVet2; $contVet2 < $tamVet2; $contVet2++){
                if($vet2[$i] != $vet2[$i+1] && $vet2[$contVet2] != $vet2[$i+1] && $vet2[$i] != $vet2[$contVet2]){
                    $conjuntosVet2++;
                    echo "Conjuntos: " . $vet2[$i] . ", " . $vet2[$i+1] . ", " . $vet2[$contVet2] . "<br>"; 
                }
            }
        }
    }
    echo "Número de conjuntos vetor : " . $conjuntosVet2 . "<br>";
    
    echo "<br>-----------------------------------------------------------------------------------------------------------<br>";

//-----------------------------------------------------------------------------------------------------------
    
echo "<strong>Exercício 5 <br>
Encontre e exiba os valores lideres de um array. <br>
Um elemento é considerado líder se for maior ou igual aos elementos a sua esquerda. <br>
O último elemento do array, o mais a direita, é considerado um líder. <br>
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
    
    echo "<br>-----------------------------------------------------------------------------------------------------------<br>";

//-----------------------------------------------------------------------------------------------------------

echo "<strong>Exercício 6 <br>
Encontre e exiba os valores lideres de um array. <br>
Um elemento é considerado líder se for maior ou igual aos elementos a sua esquerda. <br>
O último elemento do array, o mais a direita, é considerado um líder. <br>
Piso de x é definido como o maior elemento K em arr [ ] tal que K é menor ou igual a x.<br>
Exemplo: Entrada:<br>
        
        vetor[ ] = {0, 1, 2, 4, 7, 9, 11} <br>
        X = 6; <br>

    <br>Resultado: <br>
    </strong>";
    $vetorEx5 = [0, 1, 2, 4, 7, 9, 11];
    $tam = count($vetorEx5);
    $x = 6;
    $piso = 0;

    for ($i=0; $i<$tam ; $i++){
        if ($vetorEx5[$i] <= $x ){
            $piso = $vetorEx5[$i];
        }
    }

    echo "O maior número menor que: " . $x . " é o " . $piso . ".";
    
    echo "<br>-----------------------------------------------------------------------------------------------------------<br>";

//-----------------------------------------------------------------------------------------------------------

echo "<strong>Exercício 7 <br>
Dado um valor x encontre o número de ocorrências desse x em um array ordenado. <br>
Exemplo: Entrada:<br>
        
        vetor[ ] = {1, 2, 4, 5, 5, 5, 5, 7, 11} <br>
        X = 5 <br>
       

    <br>Resultado: <br>
    </strong>";
    $vetorEx7 = [1, 2, 4, 5, 5, 5, 5, 7, 11];
    $tam = count($vetorEx7);
    $x = 5;
    $cont = 0;

    for ($i=0; $i<$tam ; $i++){
        if ($vetorEx7[$i] == $x ){
            $cont++;
        }
    }

    echo "Quantidade de ocorrências do nº " . $x . " = " . $cont . " vezes.";
    
    echo "<br>-----------------------------------------------------------------------------------------------------------<br>";

//-----------------------------------------------------------------------------------------------------------

echo "<strong>Exercício 8 <br>
Dado um valor em x e um array de inteiros, efetue a contagem de frequência de elementos no array, <br>começando no valor 1 até o valor de x. <br>
Exemplo: Entrada:<br>
        
        vetor[ ] = {3, 4, 3, 4, 5, 5, 5, 6, 7, 7, 6, 5} <br>
        X = 5 <br>
       

    <br>Resultado: <br>
    </strong>";
    $vetorEx8 = [3, 4, 3, 4, 5, 5, 5, 6, 7, 7, 6, 5];
    $tamVet8 = count($vetorEx8);
    $x1 = 1;
    $x2 = 2;
    $x3 = 3;
    $x4 = 4;
    $x5 = 5;
    $cont1 = 0;
    $cont2 = 0;
    $cont3 = 0;
    $cont4 = 0;
    $cont5 = 0;

    for ($i=0; $i<$tamVet8 ; $i++){
        if($x1 == $vetorEx8[$i]){
            $cont1++;
        }
        else if($x2 == $vetorEx8[$i]){
            $cont2++;
        }
        else if($x3 == $vetorEx8[$i]){
            $cont3++;
        }
        else if($x4 == $vetorEx8[$i]){
            $cont4++;
        }
        else if($x5 == $vetorEx8[$i]){
            $cont5++;
        }
    }

    echo "Frequência: <br>";
    echo $x1 . " = " . $cont1 . " vezes <br>";
    echo $x2 . " = " . $cont2 . " vezes <br>";
    echo $x3 . " = " . $cont3 . " vezes <br>";
    echo $x4 . " = " . $cont4 . " vezes <br>";
    echo $x5 . " = " . $cont5 . " vezes <br>";
    
    echo "<br>-----------------------------------------------------------------------------------------------------------<br>";

//-----------------------------------------------------------------------------------------------------------
echo "<strong>Exercício 9 <br>
Dado x, y e array encontre a distância mínima entre x e y dentro de um array <br>
Exemplo: Entrada:<br>
        
        vetor[ ] = {7, 9, 11, 10, 2, 4, 10, 50, 10} <br>
        X = 7 <br>
        y = 10 <br>
       

    <br>Resultado: <br>
    </strong>";
    $vetorEx9 = [7, 9, 11, 10, 2, 4, 10, 50, 10];
    $tamVet9 = count($vetorEx9);
    $x = 7;
    $y = 10;
    $menorDistancia = 0;
    $cont = 0;

    for ($i=0; $i<$tamVet9 ; $i++){
        $menorDistancia = abs($y-$x);   
    }

    echo "Menor distância = " . $menorDistancia;
    
    echo "<br>-----------------------------------------------------------------------------------------------------------<br>";

//-----------------------------------------------------------------------------------------------------------
echo "<strong>Exercício 10 <br>
Dado um valor em x e um array de inteiros, efetue a contagem de frequência de elementos no array, <br>começando no valor 1 até o valor de x. <br>
Exemplo: Entrada:<br>
        
        vetor[ ] = {13, 4, 20, 10, 50} <br>
       

    <br>Resultado: <br>
    </strong>";

    $vet10 = [13, 4, 20, 10, 50] ;
    $visualizam = [];
    $visualizam[] = $vet10[0];
    $tamVet10 = count($vet10);
    for ($i=0; $i<$tamVet10 ; $i++){
        if ($i != $tamVet10 -1){
            if($vet10[$i+1] > $vet10[$i]){
                $visualizam[] = $vet10[$i+1];
            }
        }
    }

    echo "Edifícios que visualizam a antena = ";
    $tamVisualizam = count($visualizam);
    for ($i=0; $i<$tamVisualizam ; $i++){
        echo $visualizam[$i] . " ";
    }

?>

