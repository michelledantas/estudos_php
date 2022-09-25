<?php 
    echo "<h1>Receber</h1>";

    if(isset($_REQUEST["btnOperacao"])){
        $operacao = $_REQUEST["btnOperacao"];
        echo "<p>Operacao: $operacao </p>";
    }

    /* if($operacao == "Enviar"){

    }
    else if($operacao == "Salvar"){
        
    } */
    // dessa forma sem isset se a pessoa tentar acessar a pagina direto pela url ele não deixa, pois pra entrar
        // nesta pagina pracisa clicar no botão primeiro 
    
        /* $nome = $_GET["txtNome"];
    echo "<p>Nome: $nome </p>"; */
    
    if(isset($_REQUEST["txtNome"])){
        $nome = $_REQUEST["txtNome"];
        echo "<p>Nome: $nome </p>";
    }

    if(isset($_REQUEST["txtEmail"])){
        $email = $_REQUEST["txtEmail"];
        echo "<p>Email: $email </p>";
    }
    if(isset($_REQUEST["sltProfissao"])){
        $profissao = $_REQUEST["sltProfissao"];
        echo "<p>Profissão: $profissao </p>";
    }


    if(isset($_POST["rdoFaixaEtaria"])){
        $estadoCivil = $_POST["rdoFaixaEtaria"]; 
        
        echo "<p>Faixa etaria: ";
        switch($estadoCivil){
            case 1:
                echo "até 24<br>";
                break;
            case 2:
                echo "25 a 49<br>";
                break; 
            case 3:
                echo "acima de 50<br>";
                break;
        }
    
    }
    if(isset($_REQUEST["chbInfo"])){
        $info = $_REQUEST["chbInfo"];

        foreach($info as $valor){
            echo "<p>Receber info sobre: $valor <br></p>";
        }
    }
 
    if(isset($_REQUEST["txtMensagem"])){
        $mensagem = $_REQUEST["txtMensagem"];
        echo "<p>Mensagem: $mensagem </p>";
    }
    ?>