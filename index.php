<?php
// Inclusão do arquivo contendo o código de conexão do banco de dados
include("infra/db/connect.php");

// Verificação do tipo de método usado para enviar o formulário, que 
// nesse caso só executa as funções seguintes se for do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Criação das variávies para guardar o nome de usuário e senha enviados
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Declaração da variável para fazer a query do SQL para buscar um usuário
    // com as mesmas informações preenchidas no formulário através do SELECT
    $sql = "SELECT * FROM users 
    WHERE username = '$usuario' 
    AND password = '$senha'";

    // Execução da query criada para rodar dentro do banco
    $resultado = $conn->query($sql);

    // Verificação para saber se existe pelo menos 1 linha no banco para validar o usuário
    if ($resultado->num_rows > 0) {
        // Armazenamento do nome do usuário na sessão para manter o código rodando
        // e redirecionamento para a página home.php ao terminar validação
        $_SESSION["usuario"] = $usuario;
        header("Location: public/home.php");
        exit();
    } else {
        // Mensagem de erro para informações preenchidas erradas
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
    <!-- Inclusão da navbar através do include do arquivo navbar.php -->
    <?php
    include("public/component/navbar.php");
    ?>
    <h2>Login com PHP</h2>
    <form method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario">
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br><br>
        <?php
        
        // Verificação e exibição de erro caso a variável lá encima seja preenchida
        if (isset($erro)) {
            echo $erro;
        }
        ?>
        <button type="submit">Entrar</button>
    </form>

</body>

</html>