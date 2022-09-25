<?php 
    echo "<h1>Receber</h1>";

    if(isset($_GET["btnOperacao"])){
        $operacao = $_GET["btnOperacao"];
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
    
    if(isset($_GET["txtNome"])){
        $nome = $_GET["txtNome"];
        echo "<p>Nome: $nome </p>";
    }

    if(isset($_GET["sltPais"])){
        $pais = $_GET["sltPais"];
        echo "<p>País: $pais </p>";
    }
    if(isset($_GET["rdoEstadoCivil"])){
        $estadoCivil = $_GET["rdoEstadoCivil"];
        echo "<p>Estado Civil: $estadoCivil </p>";
    }

    if(isset($_GET["chbEscolaridade"])){
        $escolaridade = $_GET["chbEscolaridade"];

        foreach($escolaridade as $valor){
            echo "<p>Escolaridade: $valor <br></p>";
        }
    }
 
    ?>