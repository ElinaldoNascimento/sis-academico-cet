<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class PessoaFisica extends Pessoa  {



    private $id_pessoaFisica = null;
    private $cpf = null;
    private $estadoCivil = null;
    private $sobrenome = null;
    private $dataNascimento = null;
    private $sexo = null;
    private $nacionalidade = null;
    private $naturalidade = null;
    private $rg = null;
    private $orgaoExpedidor = null;
    private $estadoExpedidor = null;

    public function getId_pessoaFisica() {
        return $this->id_pessoaFisica;
    }

    public function setId_pessoaFisica($id_pessoaFisica) {
        $this->id_pessoaFisica = $id_pessoaFisica;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getEstadoCivil() {
        return $this->estadoCivil;
    }

    public function setEstadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function getNaturalidade() {
        return $this->naturalidade;
    }

    public function setNaturalidade($naturalidade) {
        $this->naturalidade = $naturalidade;
    }

    public function getRg() {
        return $this->rg;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function getOrgaoExpedidor() {
        return $this->orgaoExpedidor;
    }

    public function setOrgaoExpedidor($orgaoExpedidor) {
        $this->orgaoExpedidor = $orgaoExpedidor;
    }

    public function getEstadoExpedidor() {
        return $this->estadoExpedidor;
    }

    public function setEstadoExpedidor($estadoExpedidor) {
        $this->estadoExpedidor = $estadoExpedidor;
    }

}
?>
