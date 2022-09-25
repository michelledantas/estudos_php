<?php

$nomeArquivo = "C:\xTemp\Disciplinas.json";

    //Se o arquivo existir eu recupero o arquivo
    if (file_exists($nomeArquivo)){
        //Recupera os dados
        $disciplinaJSON = file_get_contents($nomeArquivo);

        //Converter JSON em PHP
        $disciplinas = json_decode($disciplinaJSON, true);
    }

    // if (!empty($disciplinas)){
    //     foreach($disciplinas as $disciplinaKey => $disciplinaValor ){
    //         echo "Índice: " . $disciplinaKey . "<br>";
    //         echo "Cód Disciplina: " . $disciplinaValor['CodDisciplina'] . "<br>";
    //         echo "Disciplina: " . $disciplinaValor['Disciplina'] . "<br>";
    //     }    
    // }

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <!-- <link href="CSS/TabelaVeiculos.css" rel="stylesheet" type="text/css" /> -->
    <style>         
       table {
            width: 500px;
            border-collapse: collapse;
        }
        table, td, th {
            border: 1px solid black;
        }      
    </style>   
</head>

<body>
    <h1>Cadastro de Disciplina - JSON</h1>
    <form name="" action="40-JSON-Processar.php" method="GET">
    <fieldset>
            <legend>Inserir</legend>

            <p>
                Código &ensp;<input type="text" name="txtCodDisciplina">
            </p>
            <p>
                Disciplina &ensp;<input type="text" name="txtDisciplina">
            </p>

            <p>
                <input type="submit" name="btnOperacao" value="Inserir" /> &nbsp;
            </p>

        </fieldset>
        <br>
                
        <fieldset>
            <legend>Tabela</legend>
                    
            <table>
                <tr>
                    <th>Índice</th>
                    <th>Código</th> 
                    <th>Disciplina</th> 
                    <th>Alterar</th>  
                    <th>Excluir</th>                 
                </tr> 
                
                <?php

                if (!empty($disciplinas)){
                    //$disciplinaKey essa váriavel que me passa o índice
                    foreach($disciplinas as $disciplinaKey => $disciplinaValor ){
                        // echo "Índice: " . $disciplinaKey . "<br>";
                        // echo "Cód Disciplina: " . $disciplinaValor['CodDisciplina'] . "<br>";
                        // echo "Disciplina: " . $disciplinaValor['Disciplina'] . "<br>";

                        echo "<tr>";
                            echo "<td>$disciplinaKey</td> ";
                            echo "<td>" . $disciplinaValor['CodDisciplina'] . "</td> ";
                            echo "<td>" . $disciplinaValor['Disciplina'] . "</td> ";
                            //passando dados para outra página ? nessa estrutura chave/valor
                            echo "<td><a href='41-JSON-Alterar.php?indice=$disciplinaKey'>Alterar</a></td> ";
                            echo "<td><a href='42-JSON-Excluir.php?indice=$disciplinaKey'>Excluir</a>-</td> ";
                        echo "</tr>";    
                    }    
                }
                    
                
                ?>
            </table>

        </fieldset>
    </form>
</body>
</html>
