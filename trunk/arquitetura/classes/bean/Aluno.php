<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Aluno extends PessoaFisica{

    private $id_aluno = null;
    private $matricula = null;
    private $id_pessoafisica_foreign = null;
    private $curso = null;

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }


    public function getId_aluno() {

        return $this->id_aluno;
    }
    public function getId_pessoafisica_foreign() {
        return $this->id_pessoafisica_foreign;
    }

    public function setId_pessoafisica_foreign($id_pessoafisica_foreign) {
        $this->id_pessoafisica_foreign = $id_pessoafisica_foreign;
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
