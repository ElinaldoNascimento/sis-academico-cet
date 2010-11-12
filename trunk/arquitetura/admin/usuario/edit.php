<?php
include '../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
?>

<a href="index.php">Index</a><br>
<a href="logout.php">Logout</a><br>

<?php
if ($admin->nivel == 0) {
?>
<a href="/usuario/index.php">Administrar Usuários</a>
<?php } ?>


   