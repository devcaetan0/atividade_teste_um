<?php
    // Registra a sessão para poder saber qual será excluída
    session_start();
    // Remove todos os dados preenchidos na sessão pelo usuário
    session_destroy();
    // Envio de um cabeçalho para o endereçamento da página index.php após encerrar a sessão
    header("Location: ../index.php");
    // Mesma coisa que o return; só para finalizar o script
    exit();
?>