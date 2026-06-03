<!-- Inserção de uma linha horizontal para estilização -->
<hr>

<h4> Usuários Cadastrados</h4>

<!-- Criação de uma tabela com padding entre as células e borda -->
<table border="1" cellpadding="2">

    <!-- Criação da linha da tabela com <tr> e depois as colunas com o <th> -->
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    // Variável para comando da query para escolher todos os registros com o SELECT
    $sqlUsuarios = "SELECT * FROM users";

    // Declaração da variável para executar a query no banco de dados
    $resultadoUsuarios = $conn->query($sqlUsuarios);

    // Laço de repetição para cada linha que for retornada pelo banco, utilizando o fetch_assoc() para
    // transformar toda linha em matriz para acessar as células entre as linhas e colunas
    while ($linha = $resultadoUsuarios->fetch_assoc()) {
        // Comando para mostrar a tabela na tela através do echo e utilização do ponto entre as variáveis
        // para indicar a utilização de dados do banco já existente
        echo "<tr>
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["username"] . "</td>
            <td>" . $linha["password"] . "</td>
        </tr>";
    }

    ?>

</table>