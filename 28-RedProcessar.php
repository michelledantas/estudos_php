<?php
    echo "<h1>Processar<h1>";

    if(isset($_REQUEST["txtNome"])){
        if(!empty($_REQUEST["txtNome"])){
            $nome = $_REQUEST["txtNome"];
        }
        else{
            die("Nome não informado"); //mata a execução da página
            }
    }
    else{
        die("Campo não informado"); //mata a execução da página
    }

    $codUsuario=30;

    header("Location: 29-RedExibir.php?Nome=$nome&CodUsu=$codUsuario");
    //header("Location: https://www.google.com/search?q=$nome");
    //header("Location: https://www.omelete.com.br");

?>