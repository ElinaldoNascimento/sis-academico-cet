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
        $usuario = new Usuario();
        $dao = new UsuarioDao();
        $usuario->setLogin(trim($_POST['login']));
        $usuario->setSenha(md5(trim($_POST['senha'])));
        if($dao->verifica($usuario) == null) {
            header("Location:login.php");
        }

        else {
            session_start();
            $_SESSION['login'] = $usuario->getLogin();
            $_SESSION['senha'] = $usuario->getSenha();
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
            $usuario = new Usuario();
            $dao = new UsuarioDao();
            $usuario->setLogin($login);
            $usuario->setSenha($senha);
            $user = $dao->verifica($usuario);
            if($user == null) {
                header("Location:login.php");
            }
        }
        return $user;
    }
    public static function logout() {
        session_start();
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header("Location:login.php");
    }
    
    
}
?>
