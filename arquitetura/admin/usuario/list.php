<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
$dao = new UsuarioDao();
?>


<table border="1" align="center">
    <th>Nome</th><th>Login</th><th>Ativo</th><th colspan="3">A&ccedil;&otilde;es</th>
    <?php
      foreach ($dao->lista() as $user) {
    ?>
    <tr>

        <td><?php echo $user->nome;?></td>
        <td><?php echo $user->login;?></td>
        <td><?php echo $user->ativo;?></td>
        <td><a href="view.php?id=<?php echo $user->id;?>">Vizualizar</a></td>
        <td><a href="edit.php?id=<?php echo $user->id;?>">Editar</a></td>
        <td><a href="edit_passwd.php?id=<?php echo $user->id;?>">Redefinir senha</a></td>
    </tr>
<?php } ?>
</table>


   