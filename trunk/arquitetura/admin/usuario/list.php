<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
$dao = new UsuarioDao();
?>



<?php
foreach ($dao->lista() as $user) {

?>
<a href=""><?php echo $user->nome;?></a><br>
<?php } ?>


   