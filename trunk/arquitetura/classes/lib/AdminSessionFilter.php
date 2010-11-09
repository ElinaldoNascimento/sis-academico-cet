<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/

/**
 * Description of AdminSessionFilter
 *
 * @author Marcus Vinicius
 */
class AdminSessionFilter {
    
    public static function authUser() {
        $admin = new Administrador();
        $dao = new AdminDao();
        $admin->setLogin(trim($_POST['login']));
        $admin->setSenha(md5(trim($_POST['senha'])));
        if($dao->verifica($admin) == null) {
            header("Location:login.php");
        }

        else {
            session_start();
            $_SESSION['login'] = $admin->getLogin();
            $_SESSION['senha'] = $admin->getSenha();
            header("Location:index.php");
        }
    }

    public static function authSession() {
        session_start();
        $login = $_SESSION['login'];
        $senha = $_SESSION['senha'];

        if(empty ($login) || empty ($senha)) {
            header("Location:login.php");
        }
        else {
            $admin = new Administrador();
            $dao = new AdminDao();
            $admin->setLogin($login);
            $admin->setSenha($senha);
            $admin_obj = $dao->verifica($admin);
            if($admin_obj == null) {
                header("Location:login.php");
            }
        }
        return $admin_obj;
    }
    public static function logout() {
        session_start();
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header("Location:login.php");
    }
    
    public function  __get($attr) {
        if($attr == "Admin"){
            return new Administrador();
        }
        else if($attr == "AdminDao"){
            return new AdminDao();
        }
    }
}
?>
