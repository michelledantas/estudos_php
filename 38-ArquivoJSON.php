<?php
set_error_handler('gerenciadorErro');

    
function gerenciadorErro($erroNro, $erroMsg, $arquivo, $linha){
    echo "<h2>Erro</h2>";
    echo "<p>Nro Erro: $erroNro</p>";
    echo "<p>Mensagem: $erroMsg</p>";
    echo "<p>Arquivo: $arquivo</p>";
    echo "<p>Linha: $linha</p>";
    die();
}

echo "<h3> Arquivo JSON </h3>";
/*
$nomeArq = "C:\xTemp\Alunos.json";


$alunos[0] = ['Maria', 'dos Santos', '9.5'];
$alunos[1] = ['José', 'da Silva', '9.0'];
$alunos[2] = ['Jesus', 'de Deus', '10'];

//converter de PHP em JSON
$alunosJSON = json_encode($alunos);
file_put_contents($nomeArq, $alunosJSON);

echo "<h3> Arquivo escrito com sucesso! </h3>";*/


/*$nomeArq = "C:\xTemp\Alunos.json";

$alunosJSON = file_get_contents($nomeArq);

//Converter JSON em PHP
$alunos = json_decode($alunosJSON);*/


/*echo "Nome: " . $alunos[0][0] . "<br>";
echo "Sobrenome: " . $alunos[0][1] . "<br>";
echo "Média: " . $alunos[0][2] . "<br>";*/


/*foreach($alunos as $al){
    echo "Nome: " . $al[0] . "<br>";
    echo "Sobrenome: " . $al[1] . "<br>";
    echo "Média: " . $al[2] . "<br><br>";
}*/
/*
//-----------------------------------------------
//VETOR ASSOCIATIVO CHAVE - VALOR
//ESCRITA

$nomeArq = "C:\xTemp\Alunos.json";

//quando damos um nome pra posição esse vetor é associativo
$alunos[0] = ['Nome'=>'Maria', 'Sobrenome'=>'dos Santos', 'Nota'=>'9.5'];
$alunos[1] = ['Nome'=>'José', 'Sobrenome'=>'da Silva', 'Nota'=>'9.0'];
$alunos[2] = ['Nome'=>'Jesus', 'Sobrenome'=>'de Deus', 'Nota'=>'10'];

//converter de PHP em JSON
$alunosJSON = json_encode($alunos);
file_put_contents($nomeArq, $alunosJSON);

echo "<h3> Arquivo escrito com sucesso! </h3>";
*/

/*
$nomeArq = "C:\xTemp\Alunos.json";

$alunosJSON = file_get_contents($nomeArq);

//Converter JSON em PHP
//SEGUNDO PARAMETRO INDICA O ASSOCIATIVO, EU FALO SE ELE É ASSOCIATIVO OU NÃO
//quando eu tiver trabalhando com indice eu não preciso colocar o true, pq por default é false
$alunos = json_decode($alunosJSON,TRUE);

foreach($alunos as $al){
    echo "Nome: " . $al['Nome'] . "<br>";
    echo "Sobrenome: " . $al['Sobrenome'] . "<br>";
    echo "Média: " . $al['Nota'] . "<br><br>";
}
*/

//ler o arquivo JSON, CONVERTER PARA VETOR, ACRESCENTAR DADOS, CONVERTER PARA JSON, SALVAR ARQUIVO.
/*
//ARQUIVO JSON
$nomeArq = "C:\xTemp\Alunos.json";

//FUNÇÃO QUE ABRE, ESCREVE E FECHA
$alunosJSON = file_get_contents($nomeArq);

//Converter JSON em PHP
$alunos = json_decode($alunosJSON);

$alunos[] = ['Nome'=>'Pedro', 'Sobrenome'=>'Gasparoto', 'Nota'=>'10'];
$alunos[] = ['Nome'=>'Paulo', 'Sobrenome'=>'da Silva', 'Nota'=>'8.0'];

//converter de PHP em JSON
$alunosJSON = json_encode($alunos);

//SALVAR
file_put_contents($nomeArq, $alunosJSON);

echo "<h3> Arquivo escrito com sucesso! </h3>";
*/
//FALTA

//----------------------------------------------
//ALTERAR
//ARQUIVO JSON
$nomeArq = "C:\xTemp\Alunos.json";

//FUNÇÃO QUE ABRE, ESCREVE E FECHA
$alunosJSON = file_get_contents($nomeArq);

//Converter JSON em PHP
$alunos = json_decode($alunosJSON, true);

$alunos[1]['Nome'] = "João";
$alunos[1]['Sobrenome'] = "Paulo";
$alunos[1]['Nota'] = 6.5;

//converter de PHP em JSON
$alunosJSON = json_encode($alunos);

//SALVAR
file_put_contents($nomeArq, $alunosJSON);
echo "<h3> Arquivo alterado com sucesso! </h3>";

foreach($alunos as $al){
    echo "Nome: " . $al['Nome'] . "<br>";
    echo "Sobrenome: " . $al['Sobrenome'] . "<br>";
    echo "Nota: " . $al['Nota'] . "<br><br>";
}
/*

//----------------------------------------------
//EXCLUIR

//ARQUIVO JSON
$nomeArq = "C:\xTemp\Alunos.json";

//FUNÇÃO QUE ABRE, ESCREVE E FECHA
$alunosJSON = file_get_contents($nomeArq);

//Converter JSON em PHP
$alunos = json_decode($alunosJSON, true);


//excluir dado
unset($alunos[2]);

//converter de PHP em JSON
$alunosJSON = json_encode($alunos);

//SALVAR
file_put_contents($nomeArq, $alunosJSON);

echo "<h3> Arquivo excluído com sucesso! </h3>";

file_put_contents($nomeArq, $alunosJSON);



//Converter JSON em PHP
//SEGUNDO PARAMETRO INDICA O ASSOCIATIVO, EU FALO SE ELE É ASSOCIATIVO OU NÃO
//quando eu tiver trabalhando com indice eu não preciso colocar o true, pq por default é false
$alunos = json_decode($alunosJSON,TRUE);

foreach($alunos as $al){
    echo "Nome: " . $al['Nome'] . "<br>";
    echo "Sobrenome: " . $al['Sobrenome'] . "<br>";
    echo "Média: " . $al['Nota'] . "<br><br>";
}
/*

?>