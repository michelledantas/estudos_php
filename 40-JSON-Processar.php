<?php
//----------------------------------------------
// RECUPERA OS DADOS
//----------------------------------------------
$operacao = "";
$codDisciplina = "";
$disciplina = "";
$indice = 0;

$nomeArquivo = "C:\xTemp\Disciplinas.json";

if(isset($_REQUEST["btnOperacao"])){
    if(!empty($_REQUEST["btnOperacao"])){
        $operacao = $_REQUEST["btnOperacao"];
    }
}

if(isset($_REQUEST["txtIndice"])){
    if(!empty($_REQUEST["txtIndice"])){
        $indice = (int) $_REQUEST["txtIndice"];
    }
}

if(isset($_REQUEST["txtCodDisciplina"])){
    if(!empty($_REQUEST["txtCodDisciplina"])){
        $codDisciplina = $_REQUEST["txtCodDisciplina"];
    }
}

if(isset($_REQUEST["txtDisciplina"])){
    if(!empty($_REQUEST["txtDisciplina"])){
        $disciplina = $_REQUEST["txtDisciplina"];
    }
}

echo "Operacao: $operacao <br>";
echo "Indice: $indice <br>";
echo "CodDisciplina: $codDisciplina <br>";
echo "Disciplina: $disciplina <br>";


//----------------------------------------------
// PROCESSAR OS DADOS
//----------------------------------------------



if($operacao=="Inserir"){


    if(empty($codDisciplina)){
        echo "<h2>Por favor informe o código da disciplina.</h2>";
        echo "<p> <a href= '39-JSON-Enviar.php'> Clique aqui para voltar. </a>";
        die();
    }
    if(empty($disciplina)){
        echo "<h2>Por favor informe o nome da disciplina.</h2>";
        echo "<p> <a href= '39-JSON-Enviar.php'> Clique aqui para voltar. </a>";
        die();
    }

    if (file_exists($nomeArquivo)){
        //Recupera os dados
        $disciplinaJSON = file_get_contents($nomeArquivo);

        //Converter JSON em PHP
        $disciplinas = json_decode($disciplinaJSON, true);

    }

    //----------------------------------------------
    // Adicionar
    //----------------------------------------------

    $disciplinas[] = ['CodDisciplina' => $codDisciplina, 'Disciplina' => $disciplina];

    //Converter PHP para Json
    $disciplinaJSON = json_encode($disciplinas);

    //SALVAR
    file_put_contents($nomeArquivo, $disciplinaJSON);

    echo "<h3> Dados salvos com sucesso! </h3>";

    //quando chegar nessa instrução ele vai ser direcionado para a página que eu informar
    header("Location: 39-JSON-Enviar.php");
    die();
    
}
elseif ($operacao=="Alterar"){
    
    if(empty($codDisciplina)){
        echo "<h2>Por favor informe o código da disciplina.</h2>";
        echo "<p> <a href= '39-JSON-Enviar.php'> Clique aqui para voltar. </a>";
        die();
    }
    if(empty($disciplina)){
        echo "<h2>Por favor informe o nome da disciplina.</h2>";
        echo "<p> <a href= '39-JSON-Enviar.php'> Clique aqui para voltar. </a>";
        die();
    }

    if (file_exists($nomeArquivo)){
        //Recupera os dados
        $disciplinaJSON = file_get_contents($nomeArquivo);

        //Converter JSON em PHP
        $disciplinas = json_decode($disciplinaJSON, true);

    }

    //----------------------------------------------
    // Alterar
    //----------------------------------------------

    $disciplinas[$indice]['CodDisciplina'] = $codDisciplina;
    $disciplinas[$indice]['Disciplina'] = $disciplina;

    //print_r($disciplinas);
    //die();


    //Converter PHP para Json
    $disciplinaJSON = json_encode($disciplinas);

    //SALVAR
    file_put_contents($nomeArquivo, $disciplinaJSON);

    echo "<h3> Dados salvos com sucesso! </h3>";

    //quando chegar nessa instrução ele vai ser direcionado para a página que eu informar
    header("Location: 39-JSON-Enviar.php");
    die();
}

elseif ($operacao=="Excluir"){
    if (file_exists($nomeArquivo)){
        //Recupera os dados
        $disciplinaJSON = file_get_contents($nomeArquivo);

        //Converter JSON em PHP
        $disciplinas = json_decode($disciplinaJSON, true);

    }

    //----------------------------------------------
    // Excluir
    //----------------------------------------------

    //comando que exclui do vetor
    unset($disciplinas[$indice]);
     

    //Converter PHP para Json
    $disciplinaJSON = json_encode($disciplinas);

    //SALVAR
    file_put_contents($nomeArquivo, $disciplinaJSON);

    echo "<h3> Dados excluído com sucesso! </h3>";

    //quando chegar nessa instrução ele vai ser direcionado para a página que eu informar
    header("Location: 39-JSON-Enviar.php");
    die();
}

elseif ($operacao=="Cancelar"){
    //quando chegar nessa instrução ele vai ser direcionado para a página que eu informar
    header("Location: 39-JSON-Enviar.php");
    die();
}
else {
    echo "<h2>Operação não cadastrada</h2>";
    echo "<p> <a href= '39-JSON-Enviar.php'> Clique aqui para voltar. </a>";
    die();
}

?>