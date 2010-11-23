<?php

include '../../config/load-classes.php';
$usuario = AdminSessionFilter::authSession();

$dao = new UsuarioDao();
$user = new Usuario();
$id = $_POST['id'];
$user->setId($id);
$user->setPermissoes($_POST['permissao']);
$dao->alteraPermissao($user);
header("Location: view.php?id={$id}");
?>





