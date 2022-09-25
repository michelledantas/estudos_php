<?php
    //isset é pra ver se o campo chegou, para evitar que uma pessoa tente fraudar, caso ele saiba a url e tente entrar direto sem passar pelo login
    if(isset($_REQUEST["txtUsuario"])){
        $usuario = $_REQUEST["txtUsuario"];

        if(empty($usuario)){
            echo "Por favor informe o usuário.";
            echo "<a href='24-FormLogin.php'>Clique aqui para voltar </a>";
            die(); //esse código para todo o processamento da página
        }
    }

    if(isset($_REQUEST["txtSenha"])){
        $senha = $_REQUEST["txtSenha"];

        if(empty($senha)){
            echo "Por favor informe a senha.";
            die();
        }
    }
?>