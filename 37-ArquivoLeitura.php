<?php

/*set_error_handler('gerenciadorErro');

    
function gerenciadorErro($erroNro, $erroMsg, $arquivo, $linha){
    echo "<h2>Erro</h2>";
    echo "<p>Nro Erro: $erroNro</p>";
    echo "<p>Mensagem: $erroMsg</p>";
    echo "<p>Arquivo: $arquivo</p>";
    echo "<p>Linha: $linha</p>";
    die();
}

echo "<h3>Leitura de Arquivos</h3>";
$nomeArq = "C:\xTemp\Notaveis.txt";

if(file_exists($nomeArq)){
    $arq = fopen($nomeArq, "r"); //apend, ele grava no final
} else {
    trigger_error("O arquivo não existe: $nome");
}*/



//aquivo e segundo parametro é a quantidade de caracteres que serão lidos
/*$conteudo = fread($arq, 5);
echo "<p>$conteudo</p>";*/

//lê o arquivo inteiro sem formatação
/*$conteudo = fread($arq, filesize($nomeArq));
echo "<p>$conteudo</p>";*/

//lê apenas uma linha
/*$conteudo = fgets($arq, filesize($nomeArq));
echo "<p>$conteudo</p>";*/

//Enquanto não for o final do arquivo
/*while (!feof($arq)){
    $conteudo = fgets($arq, filesize($nomeArq));
    //$conteudo = $conteudo. "<br>";
    $conteudo .= "<br>"; //o ponto é para concatenar
    echo "<p>$conteudo</p>";
}

fclose($arq);

*/
//-------------------------

$nomeArq = "C:\xTemp\Notaveis.txt";

$conteudo = file_get_contents($nomeArq);

echo "<p>$conteudo</p>";


?> 