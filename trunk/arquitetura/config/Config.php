<?php

/*
 * Variaveis de configuração com o banco
 */
class Config {
    
    public $db;
    public $url;

    public function  __construct() {

        $this->db = Array();
        $this->db['driver'] = "mysql";
        $this->db['host'] = "localhost";
        $this->db['database'] = "arquitetura";
        $this->db['user'] = "root";
        $this->db['password'] = "";

        $this->url = "http://localhost/arquitetura/";
    }
}
?>
