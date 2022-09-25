<?php 

    /* 
    $alunos = array("Pedro", "Marcia", "Maria");
    $alunos[3]= "Pedro";
    $alunos[4]= "Paulo";
    print_r($alunos);
    echo "<br>";
    $carros = [];
    $carros[] = "Aventado";
    $carros[] = "Gol";
    $carros[] = "Fiat 147"; */
   // print_r($carros);

   /*  unset($carros[1]); // exclui o item do vetor
    echo "<br>";
    print_r($carros);
    echo "<br>"; */
    
    /* date_default_timezone_set('America/Sao_Paulo');
    $aulaAtual = [new DateTime(), "Prog. PHP", 4];
   
    var_dump($aulaAtual); */


    /* $alunos=["Pedro", "Marcia", "Maria", "Ana"];
    for($i = 0; $i < count($alunos); $i++){
        echo $alunos[$i] . "<br>";
    }

    echo "<br>";
    foreach($alunos as $alu){
        echo "$alu <br>";
    } */

    // ----------------------------
    // Array associativo
    // ----------------------------
    /* $alunosMedia = ["Maria"=>9.0, "Jose" => 8.5, "Jesus" => 10];
    print_r($alunosMedia);
    echo "<br>";
    foreach($alunosMedia as $alMed){
        echo "$alMed <br>";
    } */

    echo "<br>";
    /* foreach($alunosMedia as $chave => $valor){

        echo "Chave: $chave - Valor: $valor <br>";
    }
 */
    // ----------------------------
    // Array Multidimensional
    // ----------------------------

    $turmaA = [ ["id" =>1, "nome" => "Maria", "media" => 9.0],
                ["id" =>2, "nome" => "Jose", "media" => 8.5],
                ["id" =>3, "nome" => "Jesus", "media" => 10.0],
                ["id" =>3, "nome" => "Pedro", "media" => 8.0]
    
                ];
    echo "<br>";
//echo $turmaA[1]['id'] . "-" . $turmaA[1]['nome'] . "-" . $turmaA[1]['media'];
/* foreach($turmaA as $turma){

    echo "Chave: $chave - Valor: $valor <br>";
} */
echo "<br>";
echo "<br>";
/* foreach($turmaA as $turma){

    echo $turma['id'] . " :: " . $turma['nome'] . " : " . $turma['media']. "<br>";
}
 */

$maioresNotas = [ 
               "turmaS" => ["id" =>1, "nome" => "Maria", "media" => 9.0],
               "turmaB" => ["id" =>2, "nome" => "Jose", "media" => 8.5]
                ];
            echo "Nome S: ". $maioresNotas['turmaS']['nome'] ." = ". $maioresNotas['turmaS']['media'] . "<br>";
            echo "Nome S: ". $maioresNotas['turmaB']['nome'] ." = ". $maioresNotas['turmaB']['media'] . "<br>";

            echo "<br>";
 foreach($maioresNotas as $chave => $valor){
    echo " Chave: " . $chave . " <br>";
    //echo "Valor: " . $valor['nome'] . "<br><br>";
    foreach($valor as $SubChave => $SubValor){
        echo "SubChave: " . $SubChave . " SubValor " . $SubValor . " <br>";
    } echo  "<br><br>";

}


?>

