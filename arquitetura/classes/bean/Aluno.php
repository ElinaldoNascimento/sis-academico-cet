<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Aluno extends PessoaFisica{

    private $id_aluno = null;
    private $matricula = null;

    public function getId_aluno() {

        return $this->id_aluno;
    }

    public function setId_aluno($id_aluno) {
        $this->id_aluno = $id_aluno;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }





}
?>
