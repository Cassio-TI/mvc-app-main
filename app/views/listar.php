<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pessoas</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: #fff;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #8700DB;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9e9e9;
        }
        a {
            text-decoration: none;
            color: #8700DB;
        }
        a.tt {
            display: block;
            text-align: center;
            margin-top: 30px;
        }
        a:hover {
            text-decoration: underline;
        }
        .actions a {
            margin-right: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Pessoas Cadastradas</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Ocupação</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($contatos as $contato): ?>
            <tr>
                <td class="center"><?= $contato['id'] ?></td>
                <td><?= $contato['nome'] ?></td>
                <td><?= $contato['telefone'] ?></td>
                <td><?= $contato['endereco'] ?></td>
                <td><?= $contato['ocupacao'] ?></td>
                <td class="actions">
                    <a href="index.php?acao=editar&id=<?= $contato['id'] ?>">Editar</a> |
                    <a href="index.php?acao=excluir&id=<?= $contato['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a class ="tt" href="index.php">Cadastrar Nova Pessoa</a>
</body>
</html>
