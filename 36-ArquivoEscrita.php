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

echo "<h3> Escrita de Arquivo </h3>";
/*
$nomeArq = "C:\xTemp\Notaveis.txt";

$arq = fopen($nomeArq, "w");

$txt = "01-Maria\n";
//escreva nesse arquivo, o seguinte texto
fwrite($arq, $txt);

$txt = "02-José\n";
fwrite($arq, $txt);

$txt = "03-Jesus\n";
fwrite($arq, $txt);

fclose($arq);

echo "<h3>Arquivo escrito com sucesso </h3>;" */

// ------------------------Para escrever em arquivo que já existe usamos o "a" APEND

/*
$nomeArq = "C:\xTemp\Notaveis.txt";

if(file_exists($nomeArq)){
    $arq = fopen($nomeArq, "a"); //apend, ele grava no final
} else {
    $arq = fopen($nomeArq, "w");
}

$txt = "04-Pedro\n";
fwrite($arq, $txt);

$txt = "05-Paulo\n";
fwrite($arq, $txt);

fclose($arq);

echo "<h3>Arquivo escrito com sucesso </h3>";*/

// ------------------------ Usando essa função ele abre, escreve e fecha o arquivo

$nomeArq = "C:\xTemp\Notaveis.txt";

$txt = "01-Maria\n";
file_put_contents($nomeArq, $txt);

$txt = "02-José\n";
file_put_contents($nomeArq, $txt, FILE_APPEND);

$txt = "03-Jesus\n";
file_put_contents($nomeArq, $txt, FILE_APPEND);




echo "<h3>Arquivo escrito com sucesso! </h3>";

?>  

