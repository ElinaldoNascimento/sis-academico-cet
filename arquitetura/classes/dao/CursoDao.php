<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class CursoDao{

    private $connnection = null;

    public function  __construct() {
        $this->connnection = Conexao::getConnection();
    }



    public function insertCurso($curso){

        $sql = "insert into curso(nome)values (:nome)";

        try{
            
        $this->connnection->beginTransaction();

        $stmt = $this->connnection->prepare($sql);

        $stmt->bindParam(":nome",$curso->getNome());

        $stmt->execute();

        $id_curso = $this->connnection->lastInsertId();
        $this->connnection->commit();

        $curso->setId_curso($id_curso);

        return $id_curso;
        
        }catch(PDOException $e){
            echo $e->getMessage();
            $this->connnection->rollback();
            die();
        }
    }



}

?>
