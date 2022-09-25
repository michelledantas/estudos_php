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

    if(isset($_REQUEST["sltPais"])){
        $pais = $_REQUEST["sltPais"];
        echo "<p>País: $pais </p>";
    }
    if(isset($_REQUEST["rdoEstadoCivil"])){
        $estadoCivil = $_REQUEST["rdoEstadoCivil"];
        echo "<p>Estado Civil: $estadoCivil </p>";
    }

    if(isset($_REQUEST["chbEscolaridade"])){
        $escolaridade = $_REQUEST["chbEscolaridade"];

        foreach($escolaridade as $valor){
            echo "<p>Escolaridade: $valor <br></p>";
        }
    }
 
    ?>