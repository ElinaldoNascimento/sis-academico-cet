<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'config/load-classes.php';

if(isset ($_POST["submit"])){

    $materia = new Materia();

    $materia->setId_materia($_POST["id_materia"]);
    $materia->setNome($_POST["nome"]);


    $materiaDao = new MateriaDao();
    $materiaDao->updateMateria($materia);

    header("Location:listarAlunos.php");
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

        <form id="form01" name="form01" method="post" action="">

            <input type="hidden" name="id_aluno" value="<?php echo $materia->getId_materia();?>"/>
            Nome:<input type="text" name="nome" value="<?php echo $materia->getNome(); ?>"/><br/>
                        <input type="submit" name="submit" value="Atualizar">
        </form>


    </body>
</html>



