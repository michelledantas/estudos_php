<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enviar</h1>
    <form action="18-FormReceberRequest.php" method="POST">

    <p>
        Nome <input type="text" name="txtNome">
    </p>
    <p>
        País <select name="sltPais">
            <option value="BR">Brasil</option>
            <option value="JP">Japao</option>
            <option value="USA">EUA</option>
        </select>
    </p>
    <p>
        Estado Civil <br>
        <input type="radio" name="rdoEstadoCivil" value="1" checked/>Solteiro &nbsp;
        <input type="radio" name="rdoEstadoCivil" value="2"  />Casado &nbsp;
        <input type="radio" name="rdoEstadoCivil" value="3" />Viuvo &nbsp;
    </p>
    <p>
        Escolaridade
        <input type="checkbox" name="chbEscolaridade[]" value="Primeiro_Grau" /> Primeiro Grau &emsp;
        <input type="checkbox" name="chbEscolaridade[]" value="Segundo_Grau" /> Segundo Grau &emsp;
        <input type="checkbox" name="chbEscolaridade[]" value="Superior"/> Superior &emsp;
    </p>

    <input type="submit" name="btnOperacao" value="Enviar" />
    <input type="submit" name="btnOperacao" value="Salvar" />
    </form>
</body>
</html