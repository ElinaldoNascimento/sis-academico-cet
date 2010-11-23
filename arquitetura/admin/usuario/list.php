<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
$dao = new UsuarioDao();

if($_POST){
    $usuarioList = $dao->search($_POST['valor']);
    $valor = $dao->getResult($_POST['valor']);
}
else{
    $usuarioList = $dao->lista();
}
?>

<?php
if($_POST){
    echo "Foram encontradas {$valor} ocorrencias para \" {$_POST['valor']}\" ";
}


?>


<table border="1" align="center">
    <th>Nome</th><th>Login</th><th>Ativo</th><th colspan="4">A&ccedil;&otilde;es</th>
    <?php
      foreach ($usuarioList as $user) {
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


   