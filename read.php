<?php

include 'conexao.php'; // Inclui o arquivo de conexão

$sql = "SELECT * FROM usuarios"; // Consulta todos os usuários
$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1'><tr><th>ID</th><th>usuario</th><th>senha</th><th>nome</th><th>estado</th><th>cidade</th><th>email</th></tr>";
    while ($row = $result->fetch_assoc()) { // Para cada usuário
        echo "<tr>
                <td>" . $row["Id"] . "</td>
                <td>" . $row["Usuario"] . "</td>
                <td>" . $row["Senha"] . "</td>
                <td>" . $row["Nome"] . "</td>
                <td>" . $row["Estado"] . "</td>
                <td>" . $row["Cidade"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["Id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["Id"] . "'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>"; // Fecha a tabela
} else {
    echo "Nenhum dado encontrado."; // Mensagem se não houver usuários
}
?>