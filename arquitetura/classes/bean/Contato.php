<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Contato{

    private $id_contato = null;
    private $cidade = null;
    private $estado = null;
    private $numero = null;
    private $telefoneFixo = null;
    private $telefoneCelular = null;
    private $email = null;
    private $bairro = null;
    private $cep = null;
    private $endereco = null;
    private $complemento = null;
    private $observacao = null;

    public function getId_contato() {
        return $this->id_contato;
    }

    public function setId_contato($id_contato) {
        $this->id_contato = $id_contato;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getTelefoneFixo() {
        return $this->telefoneFixo;
    }

    public function setTelefoneFixo($telefoneFixo) {
        $this->telefoneFixo = $telefoneFixo;
    }

    public function getTelefoneCelular() {
        return $this->telefoneCelular;
    }

    public function setTelefoneCelular($telefoneCelular) {
        $this->telefoneCelular = $telefoneCelular;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function getObservacao() {
        return $this->observacao;
    }

    public function setObservacao($observacao) {
        $this->observacao = $observacao;
    }



    


}
?>
