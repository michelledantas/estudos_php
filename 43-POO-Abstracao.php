<?php //não é fortemente tipado

class Animal{
    public $nome;
    public $idade;
}

try{
    $o_Cao = new Animal();

    $o_Cao->nome = "Xei de Puga";
    $o_Cao->idade= 10;

    echo "Nome: " . $o_Cao->nome . "<br>";
    echo "Idade: " . $o_Cao->idade . "<br>";
    

} catch (Error $ex) {
    echo "<h2> Exceção </h2>";
    echo "<p> <br>". $ex->getMessage() . "</b></p>";
}


?>