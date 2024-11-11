<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dados da Biblioteca</title>
</head>

<body>
    <div class="adicionar">
        <h1 class="title1">Gerenciamento de Empréstimos</h1>
        <form action="store.php" method="POST">
            <label>Gênero:</label>
            <select name="genero" id="Selecionar01" required>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Outro">Outro</option>
                <option value="Não_Dito">Não_Dito</option>
            </select>
            <label>usuario:</label>
            <input type="text" name="usuario" required min="100">
            <label>senha:</label>
            <input type="password" name="senha" required maxlength="6">
            <label>nome:</label>
            <input type="text" name="nome" required maxlength="20">
            <label>estado</label>
            <input type="text" name="estado" required maxlength="2">
            <label>cidade</label>
            <input type="text" name="cidade" required maxlength="20">
            <label>email</label>
            <input type="email" name="email" required maxlength="100">
            <input type="submit" value="Adicionar Usuário">
        </form>
    </div>
    </div>

    <h2>Lista de usuários</h2>

    <div>
        <?php include 'read.php';

        ?>
    </div>

</body>

</html>