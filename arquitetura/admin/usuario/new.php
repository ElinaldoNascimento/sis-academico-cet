<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
?>

<form action="" method="">
    Nome: <input type="text" name=""><br>
    Login: <input type="text" name=""><br>
    Senha: <input type="text" name=""><br>
    Confirmação: <input type="text" name=""><br>
    Nível <select name="">
        <option value="">0</option>
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
    </select><br>
    Ativo <input type="checkbox" name=""><br>
    <input type="submit" value="Enviar">
</form>

   