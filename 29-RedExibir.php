<?php
   $nome = $_REQUEST["Nome"];
   $codUsuario = $_REQUEST["CodUsu"];

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
    <h1>Exibir</h1>
    Seja bem vindo: <h3><?php echo $nome; ?></h3>
    Código usuário: <?php echo $codUsuario; ?>
</body>
</html>