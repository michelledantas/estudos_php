<?php
    //A função pode ser chamada antes ou depois
    boasVindas();
    
    function boasVindas(){
        echo "Seja bem vindo.<br>";
    }

    boasVindas();


    //Função com parametros
    function soma($x,$y){
        $resultado = $x + $y;
        echo "Resultado: $resultado <br>";
    }

    soma(10,10);
    $vlr1 = 100;
    $vlr2 = 200;
    soma($vlr1, $vlr2);

    //Função com parametros quando não é informado ele atribui o valor que informamos na assinatura do metodo
    function subtracao($a,$b = 20){
        $resultado = $a - $b;
        echo "Resultado: $resultado <br>";
    }

    subtracao(10,10);
    $vlr3 = 100;
    $vlr4 = 200;
    subtracao($vlr3, $vlr4);
    subtracao($vlr3);

    //PARAMETRO DO TIPO REFERENCIA, NESSE CASO USAMOS O &
    //parametro tipo valor (copia da variavel)
    //parametro tipo referencia (ele vai trabalhar com a variavel original, é como se fosse um ponteiro)
    //Quando eu coloco o & é como se eu estivesse falando olha vc pode alterar o valor da original
    function calculadora ($v1, $v2, &$soma, &$subtracao) {
        $soma = $v1 + $v2;
        $subtracao = $v1 - $v2;
    }

    $retornoDaSoma;
    $retornoDaSubtracao;
    calculadora(100,20,$retornoDaSoma, $retornoDaSubtracao);

    echo "Soma: $retornoDaSoma <br>";
    echo "Subtração: $retornoDaSubtracao<br><br>";


    //trabalhando com o escopo da variável local e global
    //dentro da função é local
    //fora da função é global
    //fora do php é superglobal
    $taxaAumento = 1.10;
    function calcularSalario($salario){
        global $taxaAumento; //aqui estou falando olha essa variável já foi declarada antes então ela é global
        //pode ser declarada de duas formas $GLOBALS ou global
        
        //global
        $reajuste = $taxaAumento * $salario;

        //$GLOBALS
        //$reajuste = $GLOBALS['taxaAumento'] * $salario; 
       
        return $reajuste;
    }

    $resultado;

    $resultado = calcularSalario(1000);

    echo "Valor com aumento: R$ $resultado <br>";


    function contador(){
        static $contador = 0; //quando colocamos o static ela não morre mais, ela fica no servidor, 
        //então ele passa por essa linha apenas uma vez, 
        //depois ele não cria mais, então ela vai somando em vez de sempre que iniciar o método ele zerar essa mesma variavel
        echo "Contador: $contador <br>";
        $contador++;
    }

    contador();
    contador();
    contador();
    contador();

    //TODA VEZ QUE MEXER COM DATA PRECISA DEFINIR O TIMEZONE DE ONDE VOCÊ ESTÁ TRABALHANDO, SENÃO ELE RETORNA UMA DATA ERRADA
    date_default_timezone_set('America/Sao_Paulo');

    //FUNÇÃO DATA
    $dia = date("d");
    $mes = date("m"); //retorna 08
    //$mes = date("M") retorna Aug
    $ano = date("y");
    $hora = date("h"); //h = 12h e H = 24h
    $minuto = date("i");
    $segundo = date("s");
    $data = date("d/m/y");
    $data = date("d/m/y H:i:s"); //aqui vc pode montar da forma que vc quiser
    

    echo "Dia: $dia <br>";
    echo "Mês: $mes <br>";
    echo "Ano: $ano <br>";
    echo "Hora: $hora <br>";  
    echo "Minuto: $minuto <br>";  
    echo "Segundo: $segundo <br>";
    echo "Data: $data <br>";

    //Criptografia
    //Não existe funcao pra descriptografar
    //Geralmente a senha é digitada e é criptografada e salva no banco de dados. Depois pra acessar o usuario digita novamente e em seguida comparamos no banco de dados 
    $usuario = "Maria";
    $senha = 123;

    $cripUsuario = md5($usuario);
    $cripSenha = md5($senha);

    echo "Usuário: $cripUsuario <br>";
    echo "Senha: $cripSenha <br>";
    

    //TRANSFORMAR TODAS AS LETRAS EM MAÍUSCULO
    $nome = strtoupper("maria");
    echo "Nome: $nome <br>";

    //TRANSFORMAR TODAS AS LETRAS EM MINÚSCULO
    $nome = strtolower("MARIA");
    echo "Nome: $nome <br>";

    //TRANSFORMAR APENAS A PRIMEIRA LETRAS EM MAÍUSCULO
    $nome = ucfirst("maria");
    echo "Nome: $nome <br>";

     
    $volume; 
    //EXERCICIO calcular base x altura
    function calcVolume($comprimento, $largura, $altura){
        global $volume;
        $volume = $comprimento * $largura * $altura;
        return $volume;
    }

    calcVolume(5,3,2);
    echo "Volume: $volume <br>";

    $valor = calcVolume(5,4,2);
    echo "Volume: $valor<br>";

    function calcularJurosEQtdParcelas($valor, $juros, $qtdParcelas){
        $valorComJuros = $valor + $juros;
        $valorParcela = $valorComJuros / $qtdParcelas;

        echo "Valor sem juros: $valor <br>";
        echo "Valor com juros: $valorComJuros <br>";
        echo "Quantidade de parcelas: $qtdParcelas <br>";
        echo "Valor das parcelas: $valorParcela <br>";
    }

    calcularJurosEQtdParcelas(100,15,4);

?>