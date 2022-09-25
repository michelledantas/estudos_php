<?php 
    echo "Processar Cookie <br>";

    $operacao = $_REQUEST["btnOperacao"];

    if($operacao == "Cadastrar Cookies") {
        $usuario = $_REQUEST["txtUsuario"];
        $senha = $_REQUEST["txtSenha"];

        $expira = time()+10; //20 segundos
        //Calculo para minutos
        //60segundos * 60segundos = 1 hora
        //60 * 60 * 24 = 1 dia
        //60 * 60 * 24 * 30 = 30 dias
        //60 * 60 * 24 * 365 = 1 ano

        setcookie("Usuario",$usuario,$expira);
        setcookie("Senha",$senha,$expira);
        
        echo "Cookie saldo com sucesso <br>";
        echo "<a href='30-CookieEnviar.php'> Clique aqui para voltar</a>";

    }
    else if($operacao == "Limpar Cookies") {
        setcookie("Usuario");
        setcookie("Senha");
        echo "Cookie limpo com sucesso <br>";
        echo "<a href='30-CookieEnviar.php'> Clique aqui para voltar</a>";
    }
?>