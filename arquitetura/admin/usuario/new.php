<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSuper();
?>

<form action="insert.php" method="post">
    Nome: <input type="text" name="nome"><br>
    Login: <input type="text" name="login"><br>
    Senha: <input type="password" name="senha"><br>
    Confirmação: <input type="password" name="senha"><br>
    nivel <select name="nivel">
        <option value="super">Super</option>
        <option value="comum">Comum</option>
    </select><br>
    Ativo <input type="checkbox" name="ativo"><br>
    <input type="submit" value="Enviar">
</form>

   