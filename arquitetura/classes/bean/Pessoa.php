<?php
/*
 * Classe pessoa é a base para qualquer outro tipo
 * de entidade que seja do tipo pessoa
 */

class Pessoa{

    private $id_pessoa = null;
    private $nome = null;
    private $id_contato = null;


    public function getId_pessoa() {
        return $this->id_pessoa;
    }

    public function setId_pessoa($id_pessoa) {
        $this->id_pessoa = $id_pessoa;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getId_contato() {
        return $this->id_contato;
    }

    public function setId_contato($id_contato) {
        $this->id_contato = $id_contato;
    }




}

?>
