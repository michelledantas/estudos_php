<?php


class Aluno{
    private $codigo;
    private $nome;
    private $p1;
    private $p2;
    
    public function setCodigo($codigo){
        if (empty($codigo) || $codigo <=0){
            throw new Error("O código deve ser informado e não pode ser igual ou menor que zero");
        }
        $this->codigo = $codigo;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    

    public function setNome($nome){
        if (empty($nome)){
            throw new Error("O nome deve ser informado");
        }
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setP1($p1){
        if (empty($p1) || $p1 <0 || $p1 >10){
            throw new Error("A nota da P1 não pode ser menor que 0 e maior que 10");
        }
        $this->p1 = $p1;

    }

    public function getP1(){
        return $this->p1;
    }

    public function setP2($p2){
        if (empty($p2) || $p2 <0 || $p2 >10){
            throw new Error("A nota da P2 não pode ser menor que 0 e maior que 10");
        }
        $this->p2 = $p2;
    }


    public function getP2(){
        return $this->p2;
    }


    function imprimir(){
        echo "Código: $this->codigo <br>";
        echo "Nome: $this->nome <br>";
        echo "P1: $this->p1 <br>";
        echo "P2: $this->p2 <br>";
    }

}

try{
    
    $aluno = new Aluno();
        
    /*Testando a primeira regra de negócio/
    //$aluno->setCodigo(0);
    $aluno->setCodigo(1);
    $aluno->imprimir();*/

    /*Testando a segunda regra de negócio
    $aluno->setNome("");
    $aluno->imprimir();*/


    /*Testando a terceira regra de negócio
    $aluno->setP1(10);
    $aluno->imprimir();
    //$aluno->setP1(11);*/

    /*Testando a quarta regra de negócio*/
    $aluno->setP2(11);
    $aluno->imprimir();
    //$aluno->setP2(11);

    //segura a execução por 10 segundos
    //sleep(10);

} catch (Error $ex) {
    echo "<h2> Exceção </h2>";
    echo "<p> <br>". $ex->getMessage() . "</b></p>";
}

?>