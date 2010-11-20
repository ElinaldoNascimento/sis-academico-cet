<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ProfessorDao{

    private $connection = null;

    public function  __construct() {
        $this->connection = Conexao::getConnection();
    }

    public function insertAluno(ProfessorDao $professor) {

        $sql = "insert into aluno(matricula,id_pessoaFisica) values(:matricula,:id_pessoaFisica)";

        $this->connection->beginTransaction();
        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(":matricula",$aluno->getMatricula());
        $stmt->bindParam(":id_pessoaFisica",$aluno->getId_pessoafisica_foreign());

        $stmt->execute();

        $id_aluno = $this->connection->lastInsertId();
        $this->connection->commit();

        $aluno->setId_aluno($id_aluno);

        return $id_aluno;

    }

   public function selectAllAlunos(){

       $sql = "select * from aluno,contato,pessoa,pessoafisica where
           aluno.id_pessoafisica = pessoafisica.id_pessoafisica and
           pessoafisica.id_pessoa = pessoa.id_pessoa and
           pessoa.id_contato = contato.id_contato";


       return $db = $this->connection->query($sql);
   }

   public function updateAluno($aluno){

       $sql = "update aluno,contato,pessoa,pessoafisica set nome =:nome, sobrenome=:sobrenome
           where aluno.id_aluno=:id_aluno and aluno.id_pessoafisica = pessoafisica.id_pessoafisica and
           pessoafisica.id_pessoa = pessoa.id_pessoa and
           pessoa.id_contato = contato.id_contato";


       $stmt = $this->connection->prepare($sql);

       $stmt->bindParam(":id_aluno",$aluno->getId_aluno());
       $stmt->bindParam(":nome",$aluno->getNome());
       $stmt->bindParam(":sobrenome",$aluno->getSobrenome());

       $stmt->execute();

   }

       public function selectById( $id_aluno){

           $sql = "select * from pessoa,pessoafisica,contato,aluno where id_aluno=? and
           aluno.id_pessoafisica = pessoafisica.id_pessoafisica and
           pessoafisica.id_pessoa = pessoa.id_pessoa and
           pessoa.id_contato = contato.id_contato";

           try {

               $this->connection->beginTransaction();
               $db = $this->connection->prepare($sql);


               if($db->execute(array($id_aluno))){

                   while ($row = $db->fetch()){

                       $aluno = new Aluno();
                       $aluno->setId_aluno($row["id_aluno"]);
                       $aluno->setId_pessoa($row["id_pessoa"]);
                       $aluno->setId_pessoaFisica($row["id_pessoaFisica"]);
                       $aluno->setId_contato($row["id_contato"]);
                       $aluno->setNome($row["nome"]);
                       $aluno->setSobrenome($row["sobrenome"]);
                   }

                   return $aluno;

               }


           } catch (PDOException $e) {
               echo $e->getMessage();
               die();
           }
    }

       public    function deleteAluno(Aluno $aluno) {

           $sql = "delete from aluno where id_aluno=:id_aluno;
               delete from pessoa where id_pessoa=:id_pessoa;
               delete from pessoafisica where id_pessoafisica=:id_pessoafisica;
               delete from contato where id_contato=:id_contato;";

           $stmt = $this->connection->prepare($sql);

           $stmt->bindParam(":id_aluno",$aluno->getId_aluno());
           $stmt->bindParam(":id_pessoa",$aluno->getId_pessoa());
           $stmt->bindParam(":id_pessoafisica",$aluno->getId_pessoafisica());
           $stmt->bindParam(":id_contato",$aluno->getId_contato());

           $stmt->execute();

    }






}
?>

