<?php

include '../../config/load-classes.php';
$usuario = AdminSessionFilter::authSession();
$id = $_GET['id'];
?>

<form action="update_passwd.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>"><br>
    Nova senha<input type="text" name="senha"><br>
    <input type="submit" value="Enviar"><br>
    
</form>



