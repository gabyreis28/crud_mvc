<?php

namespace app\models;
use app\core\Model;

class Cliente extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function lista() {
        $sql = "SELECT * FROM cliente";
        $qry = $this->db->query($sql);
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function inserir($nome, $email, $fone) {
        $sql = "INSERT INTO cliente SET nome = :nome, email = :email, fone = :fone";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $nome);
        $qry->bindValue(":email", $email);
        $qry->bindValue(":fone", $fone);
        $qry->execute();

        return $this->db->lastInsertId();
    }

    public function editar($id_cliente, $nome, $email, $fone) {
        $sql = "UPDATE cliente SET nome =:nome, email = :email, fone = :fone WHERE id_cliente = :id_cliente";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $nome);
        $qry->bindValue(":email", $email);
        $qry->bindValue(":fone", $fone);
        $qry->bindValue(":id_cliente", $id_cliente);
        $qry->execute();
    }

    public function getCliente($id_cliente) {
        $resultado = array();
        $sql = "SELECT * FROM cliente WHERE id_cliente = :id_cliente";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cliente", $id_cliente);
        $qry->execute();

        if ($qry->rowCount() > 0) {
            $resultado = $qry->fetch(\PDO::FETCH_OBJ);
        }

        return $resultado;
    }

    public function excluir($id_cliente) {
        $sql = "DELETE FROM cliente WHERE id_cliente = :id_cliente";

        $qry = $this->db->prepare($sql);
        $qry->bindValue(":id_cliente", $id_cliente);
        $qry->execute();
    }
}