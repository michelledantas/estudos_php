<?php
    //isset é pra ver se o campo chegou, para evitar que uma pessoa tente fraudar, caso ele saiba a url e tente entrar direto sem passar pelo login
    if(isset($_REQUEST["txtCelsius"])){
        $celsius = $_REQUEST["txtCelsius"];

        if(empty($celsius)){
            echo "Por favor informe o celsius.";
            echo "<a href='33-ExeConvTempEnviar.php'>Clique aqui para voltar </a>";
            die(); //esse código para todo o processamento da página
        }
    }

    $fahrenheit = ((9 * $celsius) / 5) + 32;


?>