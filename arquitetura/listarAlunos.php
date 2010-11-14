

<?php
include 'config/load-classes.php';

$alunoDao = new AlunoDao();
foreach ($alunoDao->selectAllAlunos() as $rows){


    echo "Id_aluno:  ".$rows["id_aluno"]."<br/>";
    echo "Nome:  ".$rows["nome"];
    echo $rows["sobrenome"]."<br/>";
    echo "Cidade:  ".$rows["cidade"]."<br/>";
    echo "Estado:  " .$rows["estado"]."<br/>";
    echo "Matricula:  " .$rows["matricula"]."<br/>";
    echo "<br/>-------------------------------------------------------------<br/>";

    
}
?>
    

        
   
