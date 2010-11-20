<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<html>
    <head>
        <title>Cadastrar Curso</title>
    </head>
    <script language="JavaScript">
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
   <a href="javascript:abrir('cadastrarMateria.html');">Adicionar Materias</a>
            </p>
            
        </form>


    </body>
</html>