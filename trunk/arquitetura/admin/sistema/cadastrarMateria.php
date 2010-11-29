<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();


if(isset ($_POST["ad_materia"])){

    $materia = new Materia();

    $materia->setNome($_POST["nome_materia"]);

    $materiaDao = new MateriaDao();
    $materiaDao->insertMateria($materia);

    header("Location:listarMaterias.php");


}

?>