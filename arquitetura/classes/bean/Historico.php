<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Historico{

    private $id_historico = null;
    private $id_aluno = null;

    public function getId_historico() {
        return $this->id_historico;
    }

    public function setId_historico($id_historico) {
        $this->id_historico = $id_historico;
    }

    public function getId_aluno() {
        return $this->id_aluno;
    }

    public function setId_aluno($id_aluno) {
        $this->id_aluno = $id_aluno;
    }


}
?>
