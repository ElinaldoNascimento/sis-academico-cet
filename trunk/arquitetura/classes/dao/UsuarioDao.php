<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminDao
 *
 * @author Marcus Vinicius
 */
class UsuarioDao {
    private $connection = null;

    public function  __construct() {
        $this->connection = Conexao::getConnection();
    }
    public function adiciona($admin){
        $sql = "insert into admin(nome,login,senha,nivel) values(:nome,:login,:senha,:nivel)";
        $this->connection->beginTransaction();
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":nome",$admin->getNome());
        $stmt->bindParam(":login",$admin->getLogin());
        $stmt->bindParam(":senha",$admin->getSenha());
        $stmt->bindParam(":nivel",$admin->getNivel());
        $stmt->execute();
        $id = $this->connection->lastInsertId();
        $this->connection->commit();
        return $id;
    }
    public function retorna($admin){
        $sql = "select*from admin where id =:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetchObject();
    }
    public function verifica($admin){
        $sql = "select * from admin where login =:login and senha =:senha";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":login",$admin->getLogin());
        $stmt->bindParam(":senha",$admin->getSenha());
        $stmt->execute();
        return $stmt->fetchObject();
    }
}
?>
