<?php

// Inclusão do arquivo contendo o código de conexão do banco de dados
include("infra/db/connect.php");

// Verificação do tipo de método usado para enviar o formulário, que 
// nesse caso só executa as funções seguintes se for do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Criação das variávies para guardar o nome de usuário e senha enviados
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];



    $sql = "SELECT * FROM users 
    WHERE username = '$usuario' 
    AND password = '$senha'";

    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit();
    } else {
        $erro = "Usuário ou senha inválidos.";
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login com PHP</title>
</head>

<body>
    <?php
    include("public/component/navbar.php");
    ?>
    <h2>Login com PHP</h2>
    <form method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <?php

        if (isset($erro)) {
            echo $erro;
        }
        ?>
        <button type="submit">Entrar</button>
    </form>

</body>

</html>