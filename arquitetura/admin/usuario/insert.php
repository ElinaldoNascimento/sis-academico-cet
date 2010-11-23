<?php

include '../../config/load-classes.php';
$usuario = AdminSessionFilter::authSuper();

$user = new Usuario();
$dao = new UsuarioDao();
$user->setNome(trim($_POST['nome']));
$user->setLogin(trim($_POST['login']));
$user->setSenha(md5(trim($_POST['senha'])));
$user->setNivel($_POST['nivel']);
if (!empty($_POST['ativo'])) {
    $user->setAtivo(1);
} else {
    $user->setAtivo(0);
}
$id = $dao->adiciona($user);
header("Location: view.php?id={$id}");
?>



