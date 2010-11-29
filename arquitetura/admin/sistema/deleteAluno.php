<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();

$showaluno = new AlunoDao();
$aluno = new Aluno();
$aluno = $showaluno->selectById($_GET["id_aluno"]);
$alunoDaoDelete = new AlunoDao();
$alunoDaoDelete->deleteAluno($aluno);

header("Location:listarAlunos.php");


?>


