<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class AlunoDao{

    private $connection = null;

    public function  __construct() {
        $this->connection = Conexao::getConnection();
    }

    public function insertAluno($aluno) {

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




}
?>
