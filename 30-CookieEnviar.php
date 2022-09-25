<?php
    $usuario = "";
    $senha = "";
    if (!empty($_COOKIE['Usuario'])){
        $usuario = $_COOKIE['Usuario'];
    }

    if (!empty($_COOKIE['Senha'])){
        $senha = $_COOKIE['Senha'];
    }
    // apenas para teste
    //echo "Usuario: $usuario <br>";
    //echo "Senha: $senha <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="31-CookieProcessar.php">
        <p>
            Usuario <input type="text" name="txtUsuario" value="<?php echo $usuario ?>"/>
        </p>
        <p>
            Senha <input type="text" name="txtSenha" value="<?php echo $senha ?>"/>
        </p>
        <p>
            <input type="submit" value="Cadastrar Cookies" name="btnOperacao">
            <input type="submit" value="Limpar Cookies" name="btnOperacao">
            <!-- Os botões sempre vão ter o mesmo name, o que vai diferencias será o value. -->
        </p>

        <!--<a href="31-CookieProcessar.php"></a>-->
    </form>
</body>
</html>