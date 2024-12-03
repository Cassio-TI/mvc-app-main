<?php
require_once 'config/conexao.php';

class Pessoa {
    public static function listar() {
        $con = Conexao::conectar();
        $stmt = $con->prepare("SELECT * FROM contatos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscarPorId($id) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("SELECT * FROM contatos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function inserir($nome, $telefone, $endereco, $ocupacao) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO contatos (nome, telefone, endereco, ocupacao) VALUES (?, ?, ?,?)");
        return $stmt->execute([$nome, $telefone, $endereco, $ocupacao]);
    }

    public static function atualizar($id, $nome, $telefone, $endereco, $ocupacao) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("UPDATE contatos SET nome = ?, telefone = ?, endereco= ?, ocupacao = ? WHERE id = ?");
        return $stmt->execute([$nome, $telefone, $endereco, $ocupacao, $id]);
    }

    public static function excluir($id) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM contatos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
