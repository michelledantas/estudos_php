

<?php

// Obtenha as classe e atributos do modelo descritivo abaixo
// e as implemente em um programa. Crie um botão para
// atribuir valores aos atributos de cada classe encontrada.
// Uma maternidade deseja informatizar suas operações.
// Quando um bebê nasce, algumas informações são
// armazenadas sobre ele, tais como: nome, data do nascimento,
// peso do nascimento, altura, a mãe deste bebê e o médico que
// fez seu parto.
// Para as mães, o berçário também deseja manter um controle,
// guardando informações como: nome, endereço, telefone e data
// de nascimento. Para os médicos, é importante saber: CRM,
// nome, telefone celular e especialidade.

class Bebe{
    private $nomeBebe;
    private $dataNascBebe;
    private $peso;
    private $altura;

    public function setNomeBebe($nomeBebe){
        if (empty($nomeBebe)){
            throw new Error("O nome do bebe deve ser informado");
        }
        $this->nomeBebe = $nomeBebe;
    }
    public function getNomeBebe(){
        return $this->nomeBebe;
    }
 
    public function setDataNascBebe($dataNascBebe){
        if (empty($dataNascBebe)){
            throw new Error("A data de nascimento deve ser informada");
        }
        $this->dataNascBebe = $dataNascBebe;
    }

    public function getDataNascBebe(){
        return $this->dataNascBebe;
    }

    

    public function setPeso($peso){
        if (empty($peso)){
            throw new Error("O peso do bebe deve ser informado");
        }
        $this->peso = $peso;
    }

    public function getPeso(){
        return $this->peso;
    }

    

    public function setAltura($altura){
        if (empty($altura)){
            throw new Error("A altura do bebe deve ser informada");
        }
        $this->altura = $altura;

    }

    public function getAltura(){
        return $this->altura;
    }

    function imprimirDadosBebe(){
        echo "Nome do bebê: $this->nomeBebe <br>";
        echo "Data de nascimento: $this->dataNascBebe <br>";
        echo "Peso do nascimento: $this->peso <br>";
        echo "Altura do bebê: $this->altura <br>";
    }
    
}
class Mae{
    private $nomeMae;
    private $endereco;
    private $telefoneMae;
    private $dataNascMae;


    public function getNomeMae(){
        return $this->nomeMae;
    }

    public function setNomeMae($nomeMae){
        if (empty($nomeMae)){
            throw new Error("O nome da mãe deve ser informado");
        }
        $this->nomeMae = $nomeMae;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        if (empty($endereco)){
            throw new Error("O endereço deve ser informado");
        }
        $this->endereco = $endereco;
    }

    public function getTelefoneMae(){
        return $this->telefoneMae;
    }

    public function setTelefoneMae($telefoneMae){
        if (empty($telefoneMae)){
            throw new Error("O telefone da mãe deve ser informado");
        }
        $this->telefoneMae = $telefoneMae;
    }

    public function getDataNascMae(){
        return $this->dataNascMae;
    }

    public function setDataNascMae($dataNascMae){
        if (empty($dataNascMae)){
            throw new Error("A data de nascimento da mãe deve ser informada");
        }
        $this->dataNascMae = $dataNascMae;
    }

    function imprimirNomeDaMae(){
        echo "Nome da mãe: $this->nomeMae <br>";
    }

    function imprimirRegistroBercario(){
        echo "Nome da mãe: $this->nomeMae <br>";
        echo "Data de nascimento: $this->dataNascBebe <br>";
        echo "Peso do nascimento: $this->peso <br>";
        echo "Altura do bebê: $this->altura <br>";
    }

}
class Medico{
    private $crm;
    private $nomeMedico;
    private $telefoneMedico;
    private $celularMedico;
    private $especialidade;

    
    public function getCrm(){
        return $this->crm;
    }

    public function setCrm($crm){
        if (empty($crm)){
            throw new Error("O crm do médico deve ser informado");
        }
        $this->crm = $crm;

    }

    public function getNomeMedico(){
        return $this->nomeMedico;
    }

    public function setNomeMedico($nomeMedico){
        if (empty($nomeMedico)){
            throw new Error("O nome do médico deve ser informado");
        }
        $this->nomeMedico = $nomeMedico;
    }

   public function getTelefoneMedico(){
        return $this->telefoneMedico;
    }

    public function setTelefoneMedico($telefoneMedico){
        if (empty($telefoneMedico)){
            throw new Error("O telefone do médico deve ser informado.");
        }
        $this->telefoneMedico = $telefoneMedico;

    }

    public function getCelularMedico(){
        return $this->celularMedico;
    }

    public function setCelularMedico($celularMedico){
        if (empty($celularMedico)){
            throw new Error("O celular do médico deve ser informado.");
        }
        $this->celularMedico = $celularMedico;

    }

    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade){
        if (empty($especialidade)){
            throw new Error("A especialidade do médico deve ser informada.");
        }
        $this->especialidade = $especialidade;
    }

    function imprimirNomeDoMedico(){
        echo "Nome do médico: $this->nomeMedico <br>";
    }
}

try{
    
    $bebe = new Bebe;
    $mae = new Mae;
    $medico = new Medico;

    $bebe->setNomeBebe("Manuela");
    $bebe->setDataNascBebe("27/08/2019");
    $bebe->setPeso("2,755kkg");
    $bebe->setAltura("47 cm");

    $mae->setNomeMae("Michelle");
    
    $medico->setNomeMedico("Mariana");


    $bebe->imprimirDadosBebe();
    $mae->imprimirNomeDaMae();
    $medico->imprimirNomeDoMedico();

    //segura a execução por 10 segundos
    sleep(10);

} catch (Error $ex) {
    echo "<h2> Exceção </h2>";
    echo "<p> <br>". $ex->getMessage() . "</b></p>";
}

?>