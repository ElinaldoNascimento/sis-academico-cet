<?php
include '../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
?>

<?php include 'menu.php';?>

<center>Bem vindo <?php echo $admin->nome;?></center>
<?php
if ($admin->nivel == 0) {
?>
<a href="usuario/index.php">Administrar Usuários</a>
<?php } ?>


   