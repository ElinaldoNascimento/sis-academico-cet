<?php
include '../../config/load-classes.php';
$admin = AdminSessionFilter::authSession();



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
   $pessoaFisica->setId_pessoa_foreign($pessoa->getId_pessoa());


   $pessoaFisicaDao = new PessoaFisicaDao();
   $pessoaFisicaDao->insertPessoaFisica($pessoaFisica);

   $aluno = new Aluno();

   $aluno->setMatricula($_POST["matricula"]);
   $aluno->setId_pessoafisica_foreign($pessoaFisica->getId_pessoaFisica());


   $alunoDao = new AlunoDao();
   $alunoDao->insertAluno($aluno);


   header("Location:listarAlunos.php");

}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>

      <form action="cadastroAluno.php" method="post" name="formCadastroAluno">

          <p>
              <label for="nome">Nome:</label><input type="text" name="nome" id="nome"/>
          </p>

          <p>
              <label for="sobrenome">SobreNome:</label><input type="text" name="sobrenome" id="nome"/>
          </p>

          <p>
              <label for="endereco">Endereço:</label><input type="text" name="endereco" id="endereco"/>
          </p>

          <p>
              Bairro:<input type="text" name="bairro" id="bairro"/>
          </p>

          <p>
              Complemento:<input type="text" name="complemento" id="complemento" />
          </p>

          <p>
          Cidade:<input type="text" name="cidade" />
          </p>

          <p>
          Estado:<input type="text" name="estado"/><br/>
          </p>

          <p>
          Numero:<input type="text" name="numero"/><br/>
          </p>

          <p>
          CEP:<input type="text" name="cep"/><br/>
          </p>

          <p>
          E-Mail:<input type="text" name="email"/><br/>
          </p>

          <p>
          Telefone Fixo:<input type="text" name="telefoneFixo"/><br/>
          </p>

          <p>
          Telefone Celular:<input type="text" name="telefoneCelular"/><br/>
          </p>

          <p>
          Observação:<input type="text" name="observacao"/><br/>
          </p>

          <p>
          Cpf:<input type="text" name="cpf" id="cpf" /><br/>
         </p>
         
         <p>
          DataNascimento:<input type="text" name="dataNascimento" /><br/>
         </p>

         <p>
          EstadoCivil:<input type="text" name="estadoCivil"/><br/>
         </p>

         <p>
          EstadoExpedidor:<input type="text" name="estadoExpedidor"/><br/>
         </p>

         <p>
          Nacionalidade:<input type="text" name="nacionalidade"/><br/>
         </p>

         <p>
          Naturalidade:<input type="text" name="naturalidade"/><br/>
         </p>

         <p>
          OrgaoExpedidor:<input type="text" name="orgaoExpedidor"/><br/>
         </p>

         <p>
          RG:<input type="text" name="rg"/><br/>
         </p>

         <p>
          Sexo:<input type="text" name="sexo"/><br/>
         </p>

         <p>
          Matricula:<input type="text" name="matricula"/><br/>
         </p>


          <input type="submit" name="submit" value=".:Enviar:."/>

      </form>

  </body>
</html>
