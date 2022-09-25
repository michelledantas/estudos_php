<?php
    //ATENÇÃO PARA NÃO ESQUECER, PODE NÃO FUNCIONAR SE NÃO COLOCAR
    session_start();

    $operacao = $_REQUEST["btnOperacao"];

    if($operacao=="Cadastrar Sessão"){
        $nome = $_REQUEST["txtNome"];

        $_SESSION['Nome'] = $nome;

        header("Location: 34-SessaoExibir.php");
    }elseif ($operacao=="Limpar Sessão"){
        //Remove todas as variáveis de sessão. Geralmente é usado no logoff.
        session_unset();
        
        //Destroi a sessão
        session_destroy();

        header("Location: 34-SessaoExibir.php");
    }
?>