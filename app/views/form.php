<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contatos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            background: #fff;
            padding: 20px 42px 20px 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        input[type="text"],
        input[type="tel"],
        input[type="tex"],
        input[type="hidden"],
        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button.salvar {
            margin: 10px;
            background-color: #8700DB;
        }
        button:hover {
            background-color: #CD0BD9;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1><?= isset($pessoa) ? 'Editar' : 'Cadastrar' ?> Contato</h1>
    <form action="index.php?acao=salvar" method="POST">
        <input type="hidden" name="id" value="<?= $contato['id'] ?? '' ?>"><br><br>
        <input type="text" name="nome" placeholder="Nome" value="<?= $contato['nome'] ?? '' ?>" required><br><br>
        <input type="text" name="telefone" placeholder="Telefone" value="<?= $contato['telefone'] ?? '' ?>" required><br><br>
        <input type="tex" name="endereco" placeholder="Endereço" value="<?= $contato['endereco'] ?? '' ?>" required><br><br>
        <input type="text" name="ocupacao" placeholder="Ocupação" value="<?= $contato['ocupacao'] ?? '' ?>" required><br><br>
        <button class="salvar" type="submit"><?= isset($pessoa) ? 'Atualizar' : 'Salvar' ?></button>
    </form>
    <a href="index.php?acao=listar">Ver Lista de Contatos</a>
</body>
</html>
