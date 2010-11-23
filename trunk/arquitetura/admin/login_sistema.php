<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
?>
<form action="valida.php" method="post">
   Login <input type="text" name="login"><br>
   Senha <input type="password" name="senha"><br>
    <input type="submit">
    
</form>
   