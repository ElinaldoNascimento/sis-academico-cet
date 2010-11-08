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
