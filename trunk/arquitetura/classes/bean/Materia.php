<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Materia{

    private $id_materia = null;
    private $nome = null;

    public function getId_materia() {
        return $this->id_materia;
    }

    public function setId_materia($id_materia) {
        $this->id_materia = $id_materia;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }




}
?>
