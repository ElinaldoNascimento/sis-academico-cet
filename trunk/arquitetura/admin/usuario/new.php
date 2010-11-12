<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
?>

<form action="insert.php" method="post">
    Nome: <input type="text" name="nome"><br>
    Login: <input type="text" name="login"><br>
    Senha: <input type="password" name="senha"><br>
    Confirmação: <input type="password" name="senha"><br>
    Nível <select name="">
        <option value="">0</option>
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
    </select><br>
    Ativo <input type="checkbox" name="ativo"><br>
    <input type="submit" value="Enviar">
</form>

   