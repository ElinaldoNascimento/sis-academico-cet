<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include 'config/load-classes.php';

if(isset ($_POST["submit"])){

    $aluno = new Aluno;

    $aluno->setId_aluno($_POST["id_aluno"]);
    $aluno->setNome($_POST["nome"]);
    $aluno->setSobrenome($_POST["sobrenome"]);

    $alunoDao = new AlunoDao;
    $alunoDao->updateAluno($aluno);

    header("Location:listarAlunos.php");

}


   
$showaluno = new AlunoDao();
$aluno = new Aluno();
$aluno = $showaluno->selectById($_GET["id_aluno"]);


?>

<html>
    <head>
        <title>
            Editar Alunos
        </title>
    </head>
    <body>

        <form id="form01" name="form01" method="post" action="">
            
            <input type="hidden" name="id_aluno" value="<?php echo $aluno->getId_aluno();?>"/>
            Nome:<input type="text" name="nome" value="<?php echo $aluno->getNome(); ?>"/><br/>
            Sobrenome:<input type="text" name="sobrenome" value="<?php echo $aluno->getSobrenome(); ?>"/>
           
                        <input type="submit" name="submit" value="Atualizar">
        </form>


    </body>
</html>
