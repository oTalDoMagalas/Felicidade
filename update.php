<?php
    // conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Felicidade";

    // Cria conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera os dados do formulário
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];
        $email = $_POST["email"];

        // Atualiza os dados do usuário no banco de dados
        $sql = "UPDATE usuarios SET senha='$senha', nome='$nome', estado='$estado', cidade='$cidade', email='$email' WHERE id=1";

        if ($conn->query($sql) === TRUE) {
            echo "Usuário atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar usuário: " . $conn->error;
        }
    }

    // Fecha a conexão
    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Usuário</title>
</head>
<body>

    <h2>Atualizar Usuário</h2>

    <form method="post">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="estado">Estado:</label>
        <input type="text" name="estado" id="estado" required><br><br>

        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Atualizar">

        <a href="index.php">Cancelar</a> <!-- Link para voltar -->