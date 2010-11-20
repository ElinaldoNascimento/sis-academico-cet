<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Turma{

    private $id_turma = null;
    private $sala = null;
    private $turno = null;
    private $numeroAlunos = null;

    public function getId_turma() {
        return $this->id_turma;
    }

    public function setId_turma($id_turma) {
        $this->id_turma = $id_turma;
    }

    public function getSala() {
        return $this->sala;
    }

    public function setSala($sala) {
        $this->sala = $sala;
    }

    public function getTurno() {
        return $this->turno;
    }

    public function setTurno($turno) {
        $this->turno = $turno;
    }

    public function getNumeroAlunos() {
        return $this->numeroAlunos;
    }

    public function setNumeroAlunos($numeroAlunos) {
        $this->numeroAlunos = $numeroAlunos;
    }



}
?>
