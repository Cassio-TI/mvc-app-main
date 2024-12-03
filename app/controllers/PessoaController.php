<?php
require_once __DIR__ . '/../models/Pessoa.php';


class PessoaController {
    public function salvar() {
        $nome = $_POST['nome'] ?? '';
        $telefone = $_POST['telefone'] ?? '';
        $endereco = $_POST['endereco'] ?? '';
        $ocupacao = $_POST['ocupacao' ??''];
        $id = $_POST['id'] ?? '';
        $mensagem = "";
    
        if ($id != '') {
            $resultado = Pessoa::atualizar($_POST['id'], $nome, $telefone, $endereco, $ocupacao);
            var_dump($id);
            if ($resultado) {
                $mensagem = "Registro atualizado com sucesso!";
            } else {
                $mensagem = "Erro ao atualizar o registro.";
            }
            
        } else {
          
            $resultado = Pessoa::inserir($nome, $telefone, $endereco, $ocupacao);
            
            if ($resultado) {
                $mensagem = "Registro inserido com sucesso!";
            } else {
                $mensagem = "Erro ao inserir o registro.";
            }
        }
    
        require_once __DIR__ . '/../views/form.php';
        echo "<script type='text/javascript'>alert('$mensagem');</script>";
    }

    public function listar() {
        $contatos = Pessoa::listar();
        require_once __DIR__ . '/../views/listar.php';
    }

    public function editar() {
        $contato = Pessoa::buscarPorId($_GET['id']);
        require_once __DIR__ . '/../views/form.php';
    }

    public function excluir() {
        Pessoa::excluir($_GET['id']);
        require_once __DIR__ . '/../views/mensagem.php';
    }
}
?>
