<?php

class Financeiro{

    //Atributos
    private $saldo;
    private $inicioAcesso;
    private $fimAcesso;

    
    //Construtor
    function __construct(){
        $this->inicioAcesso = date("d/m/y h:i:s");
    }

    //Propriedades
    function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    function getSaldo(){
        return $this->saldo;
    }


    function __destruct(){
        $this->fimAcesso = date("d/m/y h:i:s");

        echo "<h2>Auditoria</h2>";
        echo "<p>Acesso Início: $this->inicioAcesso </p>";
        echo "<p>Acesso fim: $this->fimAcesso </p>";
    }
}

try{
    
    $financeiro = new Financeiro;

    $financeiro->setSaldo(100);

    //segura a execução por 10 segundos
    sleep(10);

} catch (Error $ex) {
    echo "<h2> Exceção </h2>";
    echo "<p> <br>". $ex->getMessage() . "</b></p>";
}



?>
