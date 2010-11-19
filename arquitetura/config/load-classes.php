<?php
define('DIRETORIO',str_replace("config","",dirname(__FILE__)));
define('DS',DIRECTORY_SEPARATOR);

function __autoload($classe) {

            if (strpos($classe, "Dao")){
                   require_once DIRETORIO.DS."classes".DS."dao".DS."{$classe}.php";
            }
            else if($classe == "Config"){
                   require_once DIRETORIO.DS."config".DS."{$classe}.php";
            }
            else if($classe == "Conexao"){
                   require_once DIRETORIO.DS."classes".DS."lib".DS."{$classe}.php";
            }
            else if($classe == "AdminSessionFilter"){
                   require_once DIRETORIO.DS."classes".DS."lib".DS."{$classe}.php";
            }
            else{
                   require_once DIRETORIO.DS."classes".DS."bean".DS."{$classe}.php";
            }
            
             

}
$config = new Config();
$urlBase = $config->url."admin";
?>