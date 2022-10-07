<?php

class Usuario{

    //Atributos
    private $nome;
    private $anoNasc;

    
    
    //Propriedades
    //1ª regra de negócio
    function setNome($nome){
        if (empty($nome)){
            throw new Error("O nome deve ser informado");
        }

        $this->nome = $nome;
    }

     //2ª regra de negócio
    function getNome(){
        if(empty($this->nome)){
            throw new Error("O nome ainda não foi informado");
        }

        return $this->nome;
    }

     //3ª regra de negócio
    function setAnoNasc($anoNasc){
        $anoAtual = date("Y");

        if($anoNasc > $anoAtual){
            throw new Error("O ano informado é inválido.");
        }

        $this->anoNasc = $anoNasc;
    }

    function getAnoNasc(){
        return $this->anoNasc;
    }

    //Método
    function imprimir(){
        echo "Nome: $this->nome <br>";
        echo "Ano nascimento: $this->anoNasc <br>";
    }

}
/* sem o try catch a mesnagem de erro é mto grande, dessa forma, por isso utilizamos o try catch
$aluno = new Usuario();
$aluno->setNome('');
*/

    try{
        $aluno = new Usuario();
        /*Testando a primeira regra de negócio
        $aluno->setNome('Maria');
        $aluno->imprimir();*/

        /*Testando a segunda regra de negócio sem setar o nome
        echo "Nome: " . $aluno->getNome();*/

        /*Testando a segunda regra de negócio informando o nome */
        $aluno->setNome('Maria');
        $aluno->setAnoNasc(2022);
        echo "Nome: " . $aluno->getNome() . "<br>";
        echo "Ano de nascimento: " . $aluno->getAnoNasc(). "<br>";

        /*Testando a terceira regra de negócio informando o nascimento maior que o ano atual
        $aluno->setNome('Maria');
        $aluno->setAnoNasc(2023);
        echo "Nome: " . $aluno->getNome() . "<br>";
        echo "Ano de nascimento: " . $aluno->getAnoNasc(). "<br>";*/
        
    
    } catch (Error $ex) {
        echo "<h2> Exceção </h2>";
        echo "<p> <br>". $ex->getMessage() . "</b></p>";
    }


?>