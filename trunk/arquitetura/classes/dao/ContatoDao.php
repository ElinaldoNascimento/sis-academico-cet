<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ContatoDao{

    private $connection = null;

    public function  __construct() {

        $this->connection = Conexao::getConnection();
    }

    public function insertContato(Contato $contato){

        $sql = "insert into `contato`(cidade,estado,numero,telefoneFixo,telefoneCelular,
            email,bairro,cep,endereco,complemento,observacao) values(:cidade,:estado,:numero,:telefoneFixo,:telefoneCelular,
            :email,:bairro,:cep,:endereco,:complemento,:observacao)" ;
     
        $this->connection->beginTransaction();
        $stmt = $this->connection->prepare($sql);
        
        $stmt->bindParam(":cidade",$contato->getCidade());
        $stmt->bindParam(":estado",$contato->getEstado());
        $stmt->bindParam(":numero",$contato->getNumero());
        $stmt->bindParam(":telefoneFixo",$contato->getTelefoneFixo());
        $stmt->bindParam(":telefoneCelular",$contato->getTelefoneCelular());
        $stmt->bindParam(":email",$contato->getEmail());
        $stmt->bindParam(":bairro",$contato->getBairro());
        $stmt->bindParam(":cep",$contato->getCep());
        $stmt->bindParam(":endereco",$contato->getEndereco());
        $stmt->bindParam(":complemento",$contato->getComplemento());
        $stmt->bindParam(":observacao",$contato->getObservacao());

        $stmt->execute();
        $id_contato = $this->connection->lastInsertId();
        $this->connection->commit();

        $contato->setId_contato($id_contato);
        
        return $id_contato;
        
        
    }

    public function selectByIdContato($id_contato){

        $sql = "select * from contato where id_contato = ?";
        $stmt = $this->connection->prepare($sql);

        if($stmt->execute(array($id_contato))){
            while($row = $stmt->fetch()){
                
                $values = new Contato();
                $values->setCidade($row["cidade"]);
                $values->setBairro($row["bairro"]);
                $values->setCep($row["cep"]);
                $values->setComplemento($row["complemento"]);
                $values->setEmail($row["email"]);
                $values->setEndereco($row["endereco"]);
                $values->setEstado($row["estado"]);
                $values->setNumero($row["numero"]);
                $values->setObservacao($row["observacao"]);
                $values->setTelefoneCelular($row["telefoneFixo"]);
                $values->setTelefoneFixo($row["telefoneCelular"]);
            }
        }

        return $values;

    }

    public function selectAllContatos(){
        $sql = "select * from contato";

        return $stmt = $this->connection->query($sql);
    }

    
}

?>
