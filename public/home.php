<?php
// Inclusão do arquivo de conexão com o banco de dados
include("../infra/db/connect.php");

// Verificação para confirmar se o usuário preenchido não existe com o "!" e
// redirecionamento para o index.php caso ele não exista na sessão
if (!isset($_SESSION["usuario"])) {
    header("Location: ../index.php");
    exit();
}

// Validação de formulário POST para cadastrar um novo usuário no banco como administrador
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Declaração de variáveis para guardar os valores preenchidos do formulário
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Criação da variável para guardar a query do SQL para cadastrar usuário com o INSERT INTO
    $sql = "INSERT INTO users (username, password) VALUES ('$usuario','$senha')";

    // Execução da query e verificação para caso tenha dado certo = ser estritamente verdadeiro
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuário Cadastrado com sucesso!')</script>";
    } else {
        echo "<script>alert('Erro Usuário Não Cadastrado!')</script>";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <!-- Inclusão do arquivo da navbar -->
    <?php
    include("../public/component/navbar.php");
    ?>
    <h2>Bem-vindo!</h2>
    <p> Usuário logado:
        <!-- Texto para mostrar o nome do usuário que está logado na sessão -->
        <?php echo $_SESSION["usuario"]; ?>
    </p>

    <h4>Cadastrar Novo Usuário</h4>
    <form method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <br>
        <button type="submit">Cadastrar</button>
    </form>

    <!-- Inserção da tabela feita no arquivo table.php -->
    <?php
    include("../public/component/table.php");
    ?>

    <br>
    <a href="logout.php">Sair</a>

</body>

</html>