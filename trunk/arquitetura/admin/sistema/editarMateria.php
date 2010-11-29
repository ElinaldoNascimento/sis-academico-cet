<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();

if(isset ($_POST["submit"])){

    $materia = new Materia();

    $materia->setId_materia($_POST["id_materia"]);
    $materia->setNome($_POST["nome"]);


    $materiaDao = new MateriaDao();
    $materiaDao->updateMateria($materia);

    header("Location:listarMaterias.php");
}

$showmateria = new MateriaDao();
$materia = new Materia();
$materia = $showmateria->selectById($_GET["id_materia"]);
?>

<html>
    <head>
        <title>
            Editar Materia
        </title>
    </head>
    <body>

        <form id="form01" name="form02" method="post" action="">

            <input type="hidden" name="id_materia" value="<?php echo $materia->getId_materia();?>"/>
            Nome:<input type="text" name="nome" value="<?php echo $materia->getNome(); ?>"/><br/>
                        <input type="submit" name="submit" value="Atualizar">
        </form>


    </body>
</html>



