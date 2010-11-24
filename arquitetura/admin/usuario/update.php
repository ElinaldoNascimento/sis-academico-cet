<?php

include '../../config/load-classes.php';
$usuario = AdminSessionFilter::authSuper();
$id = $_POST['id'];
$user = new Usuario();
$dao = new UsuarioDao();
$user->setId($id);
$user->setNome(trim($_POST['nome']));
$user->setLogin(trim($_POST['login']));
$user->setNivel($_POST['nivel']);
if (!empty($_POST['ativo'])) {
    $user->setAtivo(1);
} else {
    $user->setAtivo(0);
}
$dao->atualiza($user);
header("Location: view.php?id={$id}");
?>



