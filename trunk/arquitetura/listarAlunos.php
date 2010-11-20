<html>

    <head>
        <meta http-equiv="" content="text/html; charset=utf8"/>
        <title>
            Lista de Alunos
        </title>
    </head>
    <body>
        <h3>Lista de Alunos</h3><a href="cadastroAluno.html">Adicionar Aluno </a>
         <table width="600" border="1" cellpadding="0" cellspacing="0">
        <tr bgcolor="#CCCCCC">
            <td width="80" align="left"> ID_ALUNO </td>
            <td width="242" align="left">NOME </td>
            <td width="300" align="left">Sobrenome:</td>
            <td width="350" align="left">Matricula:</td>
            <td width="400" align="left">Endereço:</td>
            <td width="450" align="left">Ações:</td>

        </tr>
        <?php
        include 'config/load-classes.php';
        $alunoDao = new AlunoDao();
        foreach($alunoDao->selectAllAlunos() as $rows){
        ?>

        <tr>
        <td><?php echo $rows["id_aluno"];?></td>
        <td><?php echo $rows["nome"];?></td>
        <td><?php echo $rows["sobrenome"];?></td>
        <td><?php echo $rows["matricula"];?></td>
        <td><?php echo $rows["endereco"];?></td>
        <td align="center"><a href="editarAluno.php?id_aluno=<?php echo $rows["id_aluno"];?>">
            [Editar]</a>
        <a href="deleteAluno.php?id_aluno=<?php echo $rows["id_aluno"];?>">
            [Deletar]</a></td>
        </tr>
        
       
<?php
}
?>

     </table>
    </body>
</html>


    

        
   
