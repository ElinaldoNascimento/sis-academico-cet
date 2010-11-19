<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();
?>

<?php include '../menu.php';?>
<a href="new.php">Novo</a><br>
<a href="list.php">Lista</a><br>


<center>

    <form action="list.php" method="post">
        Pesquisar <input type="text" name="valor">
        <input type="submit" value="OK">
    </form>
</center>


   