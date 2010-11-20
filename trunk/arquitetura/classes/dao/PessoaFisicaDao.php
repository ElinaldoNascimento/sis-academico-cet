<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PessoaFisicaDao{

    private $connection = null;

    public function  __construct() {

        $this->connection = Conexao::getConnection();
    }

    public function insertPessoaFisica(PessoaFisica $pessoafisica) {

        $sql = "insert into `pessoafisica`(cpf,estadoCivil,sobrenome,dataNascimento,
            sexo,nacionalidade,naturalidade,rg,orgaoExpedidor,estadoExpedidor,id_pessoa)
            values (:cpf,:estadoCivil,:sobrenome,:dataNascimento,:sexo,:nacionalidade,:naturalidade,
            :rg,:orgaoExpedidor,:estadoExpedidor,:id_pessoa)";

        $this->connection->beginTransaction();
        $stmt = $this->connection->prepare($sql);


        $stmt->bindParam(":cpf",$pessoafisica->getCpf());
        $stmt->bindParam(":estadoCivil",$pessoafisica->getEstadoCivil());
        $stmt->bindParam(":sobrenome",$pessoafisica->getSobrenome());
        $stmt->bindParam(":dataNascimento",$pessoafisica->getDataNascimento());
        $stmt->bindParam(":sexo",$pessoafisica->getSexo());
        $stmt->bindParam(":nacionalidade",$pessoafisica->getNacionalidade());
        $stmt->bindParam(":naturalidade",$pessoafisica->getNaturalidade());
        $stmt->bindParam(":rg",$pessoafisica->getRg());
        $stmt->bindParam(":orgaoExpedidor",$pessoafisica->getEstadoExpedidor());
        $stmt->bindParam(":estadoExpedidor",$pessoafisica->getOrgaoExpedidor());
        $stmt->bindParam(":id_pessoa",$pessoafisica->getId_pessoa_foreign());



        $stmt->execute();
        $id_pessoaFisica = $this->connection->lastInsertId();

        $this->connection->commit();


        $pessoafisica->setId_pessoaFisica($id_pessoaFisica);

        return $id_pessoaFisica;


    }



}

?>
