<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 *
 */

include 'config/load-classes.php';

$showaluno = new AlunoDao();
$aluno = new Aluno();
$aluno = $showaluno->selectById($_GET["id_aluno"]);
$alunoDaoDelete = new AlunoDao();
$alunoDaoDelete->deleteAluno($aluno);

header("Location:listarAlunos.php");


?>


