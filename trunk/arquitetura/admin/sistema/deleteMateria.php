<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();

$showmateria = new MateriaDao();
$materia = new Materia();
$materia = $showmateria->selectById($_GET["id_materia"]);
$materiaDaoDelete = new MateriaDao();
$materiaDaoDelete->deleteMateria($materia);

header("Location:listarMaterias.php");


?>


