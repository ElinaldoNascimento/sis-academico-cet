<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'config/load-classes.php';


if(isset ($_POST["submit"])){

    $contato = new Contato();

    $contato->setBairro($_POST["bairro"]);
    $contato->setCep($_POST["cep"]);
    $contato->setCidade($_POST["cidade"]);
    $contato->setComplemento($_POST["complemento"]);
    $contato->setEmail($_POST["email"]);
    $contato->setEndereco($_POST["endereco"]);
    $contato->setEstado($_POST["estado"]);
    $contato->setNumero($_POST["numero"]);
    $contato->setObservacao($_POST["observacao"]);
    $contato->setTelefoneCelular($_POST["telefoneCelular"]);
    $contato->setTelefoneFixo($_POST["telefoneFixo"]);

    $contatoDao = new ContatoDao();
    $contatoDao->insertContato($contato);
    
   $pessoa = new Pessoa();
   $pessoa->setNome($_POST["nome"]);
   $pessoa->setId_contato($contato->getId_contato());


   $pessoaDao = new PessoaDao();

   $pessoaDao->insertPessoa($pessoa);

   $pessoaFisica = new PessoaFisica();
   
   $pessoaFisica->setCpf($_POST["cpf"]);
   $pessoaFisica->setDataNascimento($_POST["dataNascimento"]);
   $pessoaFisica->setEstadoCivil($_POST["estadoCivil"]);
   $pessoaFisica->setEstadoExpedidor($_POST["estadoExpedidor"]);
   $pessoaFisica->setNacionalidade($_POST["nacionalidade"]);
   $pessoaFisica->setNaturalidade($_POST["naturalidade"]);
   $pessoaFisica->setOrgaoExpedidor($_POST["orgaoExpedidor"]);
   $pessoaFisica->setRg($_POST["rg"]);
   $pessoaFisica->setSexo($_POST["sexo"]);
   $pessoaFisica->setSobrenome($_POST["sobrenome"]);
   $pessoaFisica->setId_pessoaFisica($pessoa->getId_pessoa());

   $pessoaFisicaDao = new PessoaFisicaDao();
   $pessoaFisicaDao->insertPessoaFisica($pessoaFisica);

   
    echo "Dados Inseridos Com Sucesso";

}
?>
