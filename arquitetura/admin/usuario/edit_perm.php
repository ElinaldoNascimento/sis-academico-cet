<?php

include '../../config/load-classes.php';
$usuario = AdminSessionFilter::authSession();
$id = $_GET['id'];
$dao = new UsuarioDao();
$permissaoList = $dao->getPermissions($id);
?>


<form action="add_perm.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <fieldset>
        <legend>Usu&aacute;rio</legend>

    <?php
    foreach ($permissaoList as $permissao) {
        echo $permissao->nome."<br>";
    }
    ?>
    Adicionar <input type="checkbox" name="permissao[]" value="1">
    Alterar <input type="checkbox" name="permissao[]" value="2">
    Deletar <input type="checkbox" name="permissao[]" value="3">

    </fieldset>

    

    <input type="submit" value="Enviar">
</form>





