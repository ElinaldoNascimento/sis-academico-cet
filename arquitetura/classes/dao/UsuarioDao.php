<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminDao
 *
 * @author Marcus Vinicius
 */
class UsuarioDao {
    private $connection = null;

    public function  __construct() {
        $this->connection = Conexao::getConnection();
    }


    public function lista(){
        $sql = "select*from usuario order by id desc";
        $stm = $this->connection->query($sql);
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }

    public function adiciona($usuario){
        $sql = "insert into usuario(nome,login,senha,ativo) values(:nome,:login,:senha,:ativo)";
        $this->connection->beginTransaction();
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":nome",$usuario->getNome());
        $stmt->bindParam(":login",$usuario->getLogin());
        $stmt->bindParam(":senha",$usuario->getSenha());
        $stmt->bindParam(":ativo",$usuario->getAtivo());
        $stmt->execute();
        $id = $this->connection->lastInsertId();
        $this->connection->commit();
        return $id;
    }
    public function atualiza($usuario){
        $sql = "update usuario set nome =:nome,login =:login,ativo =:ativo where id =:id";
        $this->connection->beginTransaction();
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":nome",$usuario->getNome());
        $stmt->bindParam(":login",$usuario->getLogin());
        $stmt->bindParam(":ativo",$usuario->getAtivo());
        $stmt->bindParam(":id",$usuario->getId());
        $stmt->execute();
        $this->connection->commit();
        
    }
    public function atualiza_passwd($usuario){
        $sql = "update usuario set senha =:senha where id =:id";
        $this->connection->beginTransaction();
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":senha",$usuario->getSenha());
        $stmt->bindParam(":id",$usuario->getId());
        $stmt->execute();
        $this->connection->commit();
        
    }
    public function retorna($id){
        $sql = "select*from usuario where id =:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetchObject();
    }
    public function verifica($usuario){
        $sql = "select * from usuario where login =:login and senha =:senha and ativo = 1";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":login",$usuario->getLogin());
        $stmt->bindParam(":senha",$usuario->getSenha());
        $stmt->execute();
        return $stmt->fetchObject();
    }
    public function alteraPermissao($usuario){
        $sql = "insert into permissoes_usuario(permissao_id,usuario_id) values(:permissao_id,:usuario_id)";
        foreach ($usuario->getPermissoes() as $permissao) {
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(":permissao_id",$permissao);
            $stmt->bindParam(":usuario_id",$usuario->getId());
            $stmt->execute();
        }
        
    }
    public function getPermissions($id){
        $sql = "select permissao_id,usuario_id,nome from permissoes_usuario inner join permissao on permissao.id = permissoes_usuario.permissao_id where usuario_id =:id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function search($pesq) {
        $sql = 'select*from usuario where nome like :query or login like :query order by id desc';
        $stmt = $this->connection->prepare($sql);
        $query = '%'.$pesq.'%';
        $stmt->bindParam(':query',$query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getResult($pesq) {
        $sql = 'select count(*) from usuario where nome like :query or login like :query order by id desc';
        $stmt = $this->connection->prepare($sql);
        $query = '%'.$pesq.'%';
        $stmt->bindParam(':query',$query);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}
?>
