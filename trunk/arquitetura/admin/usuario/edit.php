<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
$dao = new UsuarioDao();
$user = $dao->retorna($_GET['id']);
?>

<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $user->id;?>"><br>
    Nome: <input type="text" name="nome" value="<?php echo $user->nome;?>"><br>
    Login: <input type="text" name="login" value="<?php echo $user->login;?>"><br>    
    
    <?php if($user->ativo == 0){?>
          Ativo <input type="checkbox" name="ativo"><br>
    <?php }else{ ?>
          Ativo <input type="checkbox" name="ativo" checked="checked"><br>
    <?php } ?>
          
    <input type="submit" value="Enviar">
</form>


   