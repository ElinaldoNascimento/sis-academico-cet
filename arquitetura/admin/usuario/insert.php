<?php

include '../../config/load-classes.php';
$usuario = AdminSessionFilter::authSession();

$user = new Usuario();
$user->setNome(trim($_POST['nome']));
$user->setLogin(trim($_POST['login']));
$user->setSenha(md5(trim($_POST['senha'])));
$user->setNivel(trim($_POST['nivel']));
if (!empty($_POST['ativo'])) {
    $user->setAtivo(1);
} else {
    $user->setAtivo(0);
}
?>



