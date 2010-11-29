<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cadastrar Curso</title>
    </head>
    <script type=""  language="JavaScript">
function abrir(URL) {

  var width = 700;
  var height = 400;

  var left = 99;
  var top = 99;

  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

}
</script>
    <body>

        <form action="" name="adicionar_curso">
          
            <p>
                <label for="adicionar_curso">Adicionar Curso</label><input type="text" name="adicionar_curso"/><br/>
            </p>
           1º Período <br/>
           Materia: <select multiple>
                <?php
                include 'config/load-classes.php';
                $materiaDao = new MateriaDao();
                foreach ($materiaDao->selectAllMaterias()as $rows){
                    ?>

  <option value="<?php echo $rows["nome"];?>"> <?php echo $rows["nome"];?> </option>
                <?php
                }
                ?>
  
        </select> Adicionar outro campos para materia
            <br/> <a href="javascript:abrir('cadastrarMateria.html');">Incluir Materias</a><br/>
            <input type="submit" value="Gravar Curso" name="gravar_curso"/>
        </form>


    </body>
</html>