<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
?>

<?php include '../menu.php';?>

<center>Bem vindo <?php echo $admin->nome;?></center>





   