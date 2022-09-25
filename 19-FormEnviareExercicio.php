<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados Pessoais</h1>
    <form action="20-FormReceberRequest.php" method="POST">

    <p>
        Nome: <input type="text" name="txtNome">
    </p>
    <p>
        Email: <input type="email" name="txtEmail">
    </p>
    <p>
        Profissão <select name="sltProfissao">
            <option value="Administrador">Administrador</option>
            <option value="Advogado">Advogado</option>
            <option value="Analista de Sistemas">Analista de Sistemas</option>
            <option value="Enfermeiro">Enfermeiro</option>
            <option value="Médico">Médico</option>
            <option value="Vigilante">Vigilante</option>
            <option value="Aposentado">Aposentado</option>
        </select>
    </p>
    <p>
        Faixa etária: <br>
        <input type="radio" name="rdoFaixaEtaria" value="1" checked/>até 24 &nbsp;
        <input type="radio" name="rdoFaixaEtaria" value="2"  />25 a 49 &nbsp;
        <input type="radio" name="rdoFaixaEtaria" value="3" />acima de 50 &nbsp;
    </p>
    <p>
        Deseja receber informações sobre:
        <input type="checkbox" name="chbInfo[]" value="Tecnologia" /> Tecnologia &emsp;
        <input type="checkbox" name="chbInfo[]" value="Esportes" /> Esportes &emsp;
        <input type="checkbox" name="chbInfo[]" value="Automóveis"/> Automóveis &emsp;
        <input type="checkbox" name="chbInfo[]" value="Culinária"/> Culinária &emsp;
    </p>

    <p>
        Mensagem <input type="text" name="txtMensagem">
    </p>

    <input type="submit" name="btnOperacao" value="Enviar" />
    <input type="reset" name="btnOperacao" value="Limpar" />
    
    </form>
</body>
</html