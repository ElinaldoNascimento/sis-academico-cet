<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PessoaDao {

    private $connection = null;

    public function  __construct() {
        $this->connection = Conexao::getConnection();
    }

    public function insertPessoa(Pessoa $pessoa){

        $sql = "insert into pessoa(nome,id_contato) values(:nome,:id_contato)";
        
        $this->connection->beginTransaction();
        $stmt = $this->connection->prepare($sql);
        
        $stmt->bindParam(":nome",$pessoa->getNome());
        $stmt->bindParam(":id_contato",$pessoa->getId_contato());

        $stmt->execute();

        $id_pessoa = $this->connection->lastInsertId();
        $this->connection->commit();

        $pessoa->setId_pessoa($id_pessoa);
        
        return $id_pessoa;
    }

    

}

?>
