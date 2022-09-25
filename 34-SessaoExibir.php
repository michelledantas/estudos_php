<?php
    session_start();

    if (!empty($_SESSION['Nome'])) {
        $nome = $_SESSION['Nome'];

        echo "Nome: $nome";
    } else {
        echo "Nenhuma varável de sessão cadastrada";
    }
?>