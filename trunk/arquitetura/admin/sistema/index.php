<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
?>

<?php include '../menu.php';?>
<?php
if($admin->nivel == "super"){
?>
<a href="../usuario/index.php">Administrar usuarios</a>
<?php
}
?>
<center>Bem vindo <?php echo $admin->nome;?></center>





   