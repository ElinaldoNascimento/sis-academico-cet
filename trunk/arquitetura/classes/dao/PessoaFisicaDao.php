<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PessoaFisicaDao{

    private $connection = null;

    function  __construct() {
        $this->connection = Conexao::getConnection();
    }

    public function insertPessoaFisica(PessoaFisica $pessoaFisica) {

        $sql = "insert into pessoaFisica(cpf,estadoCivil,sobrenome,dataNascimento
            ,sexo,nacionalidade,naturalidade,rg,orgaoExpedidor,estadoExpedidor,id_pessoa)
            values (:cpf,:estadoCivil,:sobrenome,:dataNascimento,:sexo,:nacionalidade,:naturalidade,
            :rg,:orgaoExpedidor,:estadoExpedidor,:id_pessoa)";

        try{
        $this->connection->beginTransaction();
        $stmt = $this->connection->prepare($sql);


        $stmt->beginParam(":cpf",$pessoaFisica->getCpf());
        $stmt->beginParam(":estadoCivil",$pessoaFisica->getEstadoCivil());
        $stmt->beginParam(":sobrenome",$pessoaFisica->getSobrenome());
        $stmt->beginParam(":dataNascimento",$pessoaFisica->getDataNascimento());
        $stmt->beginParam(":sexo",$pessoaFisica->getSexo());
        $stmt->beginParam(":nacionalidade",$pessoaFisica->getNacionalidae());
        $stmt->beginParam(":naturalidade",$pessoaFisica->getNaturalidade());
        $stmt->beginParam(":rg",$pessoaFisica->getRg());
        $stmt->beginParam(":orgaoExpedidor",$pessoaFisica->getOrgaoExpedidor());
        $stmt->beginParam(":estadoExpedidor",$pessoaFisica->getEstadoExpedidor());
        $stmt->beginParam(":id_pessoa",$pessoaFisica->getId_Pessoa());

        $stmt->execute();
        $id_pessoaFisica  = $this->connection->lastInsertId();
        $this->connection->commit();
        $pessoaFisica->setId_pessoaFisica($id_pessoaFisica);
        
        return $id_pessoaFisica;

        }  catch (PDOException $e){
            
             $e->getMessage();
             $stmt->rollback();
        }
    }
}
?>
