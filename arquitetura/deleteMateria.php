<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 *
 */

include 'config/load-classes.php';

$showmateria = new MateriaDao();
$materia = new Materia();
$materia = $showmateria->selectById($_GET["id_materia"]);
$materiaDaoDelete = new MateriaDao();
$materiaDaoDelete->deleteMateria($materia);

header("Location:listarMaterias.php");


?>


