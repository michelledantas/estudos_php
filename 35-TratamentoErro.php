<?php
    /*
    $nome = "D:\xTemp\Alomundo.txt";

    if(file_exists($nome)){
        $arq = fopen($nome, "r");
    } else {
        die ("O arquivo não existe: $nome");
    }
    */

    /*
    //pede que defina uma fução que peça um parametro
    set_error_handler('gerenciadorErro');

    
    function gerenciadorErro($erroNro, $erroMsg, $arquivo, $linha){
        echo "<h2>Erro</h2>";
        echo "<p>Nro Erro: $erroNro</p>";
        echo "<p>Mensagem: $erroMsg</p>";
        echo "<p>Arquivo: $arquivo</p>";
        echo "<p>Linha: $linha</p>";
        die();
    }

    $nome = "D:\xTemp\Alomundo.txt";

    if(file_exists($nome)){
        $arq = fopen($nome, "r");
    } else {
        trigger_error("O arquivo não existe: $nome");
    }*/


    set_error_handler('gerenciadorErro');

    
    function gerenciadorErro($erroNro, $erroMsg, $arquivo, $linha){
        echo "<h2>Erro</h2>";
        echo "<p>Nro Erro: $erroNro</p>";
        echo "<p>Mensagem: $erroMsg</p>";
        echo "<p>Arquivo: $arquivo</p>";
        echo "<p>Linha: $linha</p>";
        die();
    }

   try{
//        soma();
        // $v1 = 10;
        // $v2 = 0;
        // $total = $v1/$v2;
        $nome = "D:\xTemp\Alomundo.txt";

        if(file_exists($nome)){
            $arq = fopen($nome, "r");
        } else {
            throw new Error("O arquivo não existe: $nome");
        }

        echo "xxx";
        echo "xxx";
        echo "xxx";

    }
   catch(Error $ex){ 
        echo "<h2>Erro</h2>";
        echo "<p>Mensagem" . $ex->getMessage() . "</p>";
   }

    //Tratamento de exceção para fatal error


    //duplicar linha alt + shift + seta para baixo



?>