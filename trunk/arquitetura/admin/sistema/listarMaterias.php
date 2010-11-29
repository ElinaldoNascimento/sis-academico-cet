<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
?>

<html>

    <head>
        <meta http-equiv="" content="text/html; charset=utf8"/>
        <title>
            Lista de Materias
        </title>
    </head>
    <body>
        <h3>Lista de Materias</h3><a href="cadastrarMateria.html">Adicionar Materia </a>
         <table width="600" border="1" cellpadding="0" cellspacing="0">
        <tr bgcolor="#CCCCCC">
            <td width="80" align="left"> ID_Materia </td>
            <td width="242" align="left">NOME </td>
            <td width="250" align="left">Ações </td>
        </tr>
        <?php
        include 'config/load-classes.php';
        $materiaDao = new MateriaDao();
        foreach($materiaDao->selectAllMaterias() as $rows){
        ?>

        <tr>
        <td><?php echo $rows["id_materia"];?></td>
        <td><?php echo $rows["nome"];?></td>
      
        <td align="center"><a href="editarMateria.php?id_materia=<?php echo $rows["id_materia"];?>">
            [Editar]</a>
        <a href="deleteMateria.php?id_materia=<?php echo $rows["id_materia"];?>">
            [Deletar]</a></td>
        </tr>


<?php
}
?>

     </table>
    </body>
</html>






