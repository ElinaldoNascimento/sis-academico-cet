<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Curso{

    private $id_curso = null;
    private $id_perido = null;
    private $nome = null;

    public function getId_perido() {
        return $this->id_perido;
    }

    public function setId_perido($id_perido) {
        $this->id_perido = $id_perido;
    }

        public function getId_curso() {
        return $this->id_curso;
    }

    public function setId_curso($id_curso) {
        $this->id_curso = $id_curso;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }




}

?>
