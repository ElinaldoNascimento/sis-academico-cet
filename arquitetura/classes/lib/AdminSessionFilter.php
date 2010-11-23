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
        session_start();
        $usuario = new Usuario();
        $dao = new UsuarioDao();
        $config = new Config();
        $usuario->setLogin(trim($_POST['login']));
        $usuario->setSenha(md5(trim($_POST['senha'])));
        $user = $dao->verifica($usuario);
        if($user == null) {
            $url = $_SESSION['url'];
            header("Location:{$url}");
        }
        else {
            $_SESSION['login'] = $usuario->getLogin();
            $_SESSION['senha'] = $usuario->getSenha();
            $_SESSION['nivel'] = $user->nivel;
            if($user->nivel == "super"){
                header("Location:{$config->url}admin/restrito/index.php");
            }
            else{
                header("Location:{$config->url}admin/sistema/index.php");
            }
            
        }
    }

    public static function authSession() {
        session_start();
        $login = $_SESSION['login'];
        $senha = $_SESSION['senha'];
        $config = new Config();
        if(empty ($login) || empty ($senha)) {
            header("Location:{$config->url}");
        }
        else {
            $usuario = new Usuario();
            $dao = new UsuarioDao();
            $usuario->setLogin($login);
            $usuario->setSenha($senha);
            $user = $dao->verifica($usuario);
            if($user == null) {
                $_SESSION = array();
                header("Location:{$config->url}");
            }
        }
        return $user;
    }

    public static function authSuper() {
        session_start();
        $login = $_SESSION['login'];
        $senha = $_SESSION['senha'];
        $config = new Config();
        if(empty ($login) || empty ($senha)) {
            header("Location:{$config->url}");
        }
        else {
            $usuario = new Usuario();
            $dao = new UsuarioDao();
            $usuario->setLogin($login);
            $usuario->setSenha($senha);
            $user = $dao->verifica($usuario);
            if($user != null) {
                if($user->nivel != "super"){
                    $_SESSION = array();
                    header("Location:{$config->url}");
                }
            }
            else{
                $_SESSION = array();
                header("Location:{$config->url}");
            }
        }
        return $user;
    }



    public static function logout() {
        session_start();
        $config = new Config();
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        header("Location:{$_SESSION['url']}");
    }
    
    
}
?>
