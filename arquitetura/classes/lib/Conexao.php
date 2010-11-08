<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/

/**
 * Description of Conexao
 *
 * @author marcus
 */
class Conexao {
    private static $connection;

    private function __construct() {
        //não pode ser instanciado
    }
    public static function getConnection() {
        try {
            if(self::$connection == null) {
                $config = new Config();
                self::$connection = new PDO("{$config->db['driver']}:host={$config->db['host']};dbname={$config->db['database']}",$config->db['user'],$config->db['password']);
            }
            return self::$connection;
        } catch (PDOException $e) {
            print 'Erro ao se conectar => '.$e->getMessage();
        }

    }

}
?>
