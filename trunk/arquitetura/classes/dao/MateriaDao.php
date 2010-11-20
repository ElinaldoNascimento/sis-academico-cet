<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class MateriaDao{

    private $connection = null;

    public function  __construct() {
        $this->connection = Conexao::getConnection();
    }

    public function insertMateria($materia){

        $sql = "insert into materias(nome)values(:nome)";

        try{

            $this->connection->beginTransaction();
            $stmt = $this->connection->prepare($sql);

            $stmt->bindParam(":nome",$materia->getNome());

            $stmt->execute();

            $id_materia = $this->connection->lastInsertId();
            $this->connection->commit();
            
            $materia->setId_materia($id_materia);

            return $id_materia;

        }  catch (PDOException $e){

            $this->connection->rollback();
            echo $e->getMessage();
            die();
        }

    }

       public function selectAllMaterias(){

       $sql = "select * from materias";


       return $db = $this->connection->query($sql);
   }
              public function selectById ($id_materia){
           $sql = "select * from materias where id_materia=?;";

           try {

               $this->connection->beginTransaction();
               $db = $this->connection->prepare($sql);

               if($db->execute(array($id_materia))){

                   while ($row = $db->fetch()){

                       $materia = new Materia();
                       
                       $materia->setId_materia($row["id_materia"]);
                       $materia->setNome($row["nome"]);
                   }
                   return $materia;
               }
           } catch (PDOException $e) {
               echo $e->getMessage();
               die();
           }
             }


        public function deleteMateria(Materia $materia) {

           $sql = "delete from materias where id_materia=:id_materia;";

           $stmt = $this->connection->prepare($sql);
           $stmt->bindParam(":id_materia",$materia->getId_materia());
           $stmt->execute();
    }


   public function updateMateria($materia){

       $sql = "update materias set nome =:nome where id_materia = :id_materia;";


       $stmt = $this->connection->prepare($sql);

       $stmt->bindParam(":id_materia",$aluno->getId_materia());
       $stmt->bindParam(":nome",$materia->getNome());
       $stmt->execute();

   }
}

?>
