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
class AdminDao {
    private $connection = null;

    public function  __construct() {
        $this->connection = Conexao::getConnection();
    }
    public function adiciona($admin){
        $sql = "insert into admin(nome,login,senha,nivel) values(:nome,:login,:senha,:nivel)";
        $this->connection->beginTransaction();
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":nome",$admin->getNome);
        $stmt->bindParam(":login",$admin->getLogin());
        $stmt->bindParam(":senha",$admin->getSenha());
        $stmt->bindParam(":nivel",$admin->getNivel());
        $stmt->execute();
        $id = $this->connection->lastInsertedId();
        $this->connection->commit();
        return $id;
    }
    public function verifica($admin){
        $sql = "select count(*) from admin where login =:login and senha =:senha";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":login",$admin->getLogin());
        $stmt->bindParam(":senha",$admin->getSenha());
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}
?>
