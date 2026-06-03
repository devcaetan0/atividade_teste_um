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

    $sqlUsuarios = "SELECT * FROM users";

    $resultadoUsuarios = $conn->query($sqlUsuarios);

    while ($linha = $resultadoUsuarios->fetch_assoc()) {
        echo "<tr>
        
            <td>" . $linha["id"] . "</td>
            <td>" . $linha["username"] . "</td>
            <td>" . $linha["password"] . "</td>
        
        </tr>";
    }

    ?>

</table>