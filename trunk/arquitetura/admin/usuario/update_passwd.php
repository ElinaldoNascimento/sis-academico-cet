<?php

include '../../config/load-classes.php';
$usuario = AdminSessionFilter::authSession();
$id = $_POST['id'];
$user = new Usuario();
$dao = new UsuarioDao();
$user->setId($id);
$user->setSenha(md5(trim($_POST['senha'])));
$dao->atualiza_passwd($user);
header("Location: view.php?id={$id}");
?>



