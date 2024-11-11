<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $usuarios = $_POST['usuario']; // Recebe o nome
    $senha = $_POST['senha']; // Recebe o email
    $nome = $_POST['nome']; // Recebe o nome
    $estado = $_POST['estado']; // Recebe o nome
    $cidade = $_POST['cidade']; // Recebe o email
    $email = $_POST['email']; // Recebe o email
    $sql = "INSERT INTO felicidade.usuarios (Usuario, Senha, Nome, Estado, Cidade, Email) VALUES ('$usuarios', '$senha', '$nome', '$estado', '$cidade', '$email')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}



?>