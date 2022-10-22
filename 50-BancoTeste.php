<?php

date_default_timezone_set('America/Sao_Paulo');


//-------------------------------------
//Acesso ao banco de dados
//-------------------------------------

$servidor = "localhost";
$banco = "estoque";
$usuario = "root";
$senha = "";

//-----------------------------
// Geral 
// ----------------------------

$conexao = null;

$operacao = "SELECIONAR";

//-----------------------------
// Conexão com o Banco de Dados 
// ----------------------------

try {
    $con = new PDO("mysql:host=$servidor;
                        dbname=$banco;
                        charset=utf8",
                        $usuario,
                        $senha);

    echo "Conexão efetuada com sucesso!<br><br>";

} catch (PDOException $ex) {
    echo "<h2> Exceçâo </h2>";
    echo "Erro: " . $ex -> getMessage() . "<br>";
    die();
    
}

if ($operacao == "INSERIR") {
    try {
        $nome = "Arroz";
        $preco = 15.50;
        $descricao = "5kg";
        $dataCriacao = date('Y-m-d H:i:s');

        $cmdSQL = $con ->prepare("Insert Into Produtos(nome, preco, descricao, data_criacao)
                                                values (:nome, :preco, :descricao, :data_criacao)");

        $cmdSQL->bindParam(":nome", $nome);
        $cmdSQL->bindParam(":preco", $preco);
        $cmdSQL->bindParam(":descricao", $descricao);
        $cmdSQL->bindParam(":data_criacao", $data_criacao);

        if($cmdSQL->execute()){
            echo "<h2>Inserção efetuada com sucesso</h2>";
        } else {
            echo "<h2>Falha de inserção</h2>";
            var_dump($cmdSQL->errorInfo());
            die();
        }

    } catch (PDOException $ex) {
        echo "<h2> Exceçâo </h2>";
        echo "Erro: " . $ex -> getMessage() . "<br>";
        die();
        
    }

} else if ($operacao == "SELECIONAR") {
    try {
         
        $cmdSQL = $con->prepare("Select * from Produtos");

        if($cmdSQL->execute()){
            //isso vai virar um vetor associativo. As colunas do vertor vai ser o nome das colunas da tabela
            $produtos = $cmdSQL->fetchAll();
            if(count($produtos)){
                foreach($produtos as $produto){
                    echo $produto['idproduto'] . "<br>";
                    echo $produto['nome'] . "<br>";
                    echo $produto['preco'] . "<br>";
                    echo $produto['descricao'] . "<br>";
                    echo $produto['data_criacao'] . "<br><br>";
                }
            }else {
                echo "Nenhum produto foi encontrado.";
            }

        } else {
            echo "<h2>Falha ao buscar os dados</h2>";
            var_dump($cmdSQL->errorInfo());
            die();
        }

    } catch (PDOException $ex) {
        echo "<h2> Exceçâo </h2>";
        echo "Erro: " . $ex -> getMessage() . "<br>";
        die();
        
    }

} else if ($operacao == "ATUALIZAR") {
    try {
        $idProduto = 1; 
        $nome = "Macarrão";
        $preco = 15.50;
        $descricao = "Espaguete";
        $dataCriacao = date('Y-m-d H:i:s');

        $cmdSQL = $con->prepare("Update Produtos
                                    Set nome = :nome,
                                        preco = :preco,
                                        descricao = :descricao,
                                        data_criacao = :data_criacao
                                Where idProduto = :idProduto");                      

        $cmdSQL->bindParam(":idProduto", $idProduto);
        $cmdSQL->bindParam(":nome", $nome);
        $cmdSQL->bindParam(":preco", $preco);
        $cmdSQL->bindParam(":descricao", $descricao);
        $cmdSQL->bindParam(":data_criacao", $data_criacao);

        if($cmdSQL->execute()){
            echo "<h2>Atualização efetuada com sucesso</h2>";
        } else {
            echo "<h2>Falha ao atualizar</h2>";
            var_dump($cmdSQL->errorInfo());
            die();
        }

    } catch (PDOException $ex) {
        echo "<h2> Exceçâo </h2>";
        echo "Erro: " . $ex -> getMessage() . "<br>";
        die();
        
    }

} else if ($operacao == "EXCLUIR") {
    try {
        $idProduto = 1; 
        
        $cmdSQL = $con->prepare("Delete From Produtos
                                Where idProduto = :idProduto");                      

        $cmdSQL->bindParam(":idProduto", $idProduto);
        
        if($cmdSQL->execute()){
            echo "<h2>Deletado com sucesso</h2>";
        } else {
            echo "<h2>Falha ao deletar</h2>";
            var_dump($cmdSQL->errorInfo());
            die();
        }

    } catch (PDOException $ex) {
        echo "<h2> Exceçâo </h2>";
        echo "Erro: " . $ex -> getMessage() . "<br>";
        die();
        
    }

} else {
    echo "Operação Inválida!";
}


// try {


// } catch (PDOException $ex) {
//     echo "<h2> Exceçâo </h2>";
//     echo "Erro: " . $ex -> getMessage() . "<br>";
//     die();
    
// }
?>
