<?php
    $vlrA1 = 100;
    $vlrA2 = 100;
    $vlrA3 = 100;

    $vlrB1 = $vlrA1 * 0.1;
    $vlrB2 = $vlrA2 * 0.5;
    $vlrB3 = $vlrA3 * 1.5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td{
            width: 200px;
            border: 1px solid black;
            border-collapse: collapse;
        }
        th {
            font-size: 18px;
            color: #005db7;
        }
        
    </style>
    
</head>
<body>

    <h1> Exercicio 2</h1>
    <table>
        <thead>
            <tr>
                <th>Antigo</td>
                <th>Novo</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $vlrA1?>
                </td>
                <td>
                    <?php echo $vlrB1 ?>
                </td>
            </tr>
            <tr>
            <td>
                    <?php echo $vlrA2?>
                </td>
                <td>
                    <?php echo $vlrB2 ?>
                </td>
            </tr>
            <tr>
            <td>
                    <?php echo $vlrA3?>
                </td>
                <td>
                    <?php echo $vlrB3 ?>
                </td>
            </tr>
        </tbody>

    </table>
</body>
</html>