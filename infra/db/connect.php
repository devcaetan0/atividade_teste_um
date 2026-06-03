<?php
    // Comando para conseguir usar as variáveis e funções nativas do PHP
    session_start();

    // Declaração das variáveis para guardar as credenciais para iniciar o banco
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples";
    
    // Declaração da variável para guardar a conexão do banco através da função
    // new mysqli, que guarda as as variáveis acima para conectar o banco
    $conn = new mysqli($host,$user,$pass,$db);

    // if($conn->connect_error){
    //     die("Erro na conexão");
    // }else{
    //     echo ("<p> BD: ok </p>");
    // }
?>