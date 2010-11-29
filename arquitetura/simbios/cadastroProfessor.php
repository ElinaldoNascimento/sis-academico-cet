<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>SIMBIOS - Cadastro de Professores</title>
        <link rel="stylesheet" type="text/css" href="../media/css/geral.css" />
        <link rel="stylesheet" type="text/css" href="../media/css/cadastro-professor.css" />
    </head>
    <body>
        <div id="topo">

            <div id="box-logo">
                <img src="../media/img/logo-simbios.png" id="logo" alt="SIMBIOS" title="SIMBIOS" />
            </div>

            <div id="header-topo">
                <span id="saudacao">bem vindo: </span> <strong id="usuario">administrador</strong>
                <div id="box-info-sistema">
                    <ul>
                        <li class="border-right-menu">
                            <span>Último acesso: </span> <span id="data">01/01/2010 às 05:15:10</span>
                        </li>

                        <li class="border-left-menu">
                            <a href="javascript:void(0)">Gerenciar minha conta</a>
                        </li>
                    </ul>
                </div>

                <a href="javascript:void(0)" id="logout">sair</a>
                
            </div>

            <div id="box-menu-topo">
                <ul id="inicio-cadastro">
                    <li id="inicio">
                        <a href="index.php">Inicio</a>
                    </li>
                    <li id="atividades">
                        <a href="javascript:void(0)">histórico de atividades</a>
                    </li>
                </ul>

                <ul id="menu-cadastro">
                    <li>
                        <a id="cadastro-professor" href="cadastroProfessor.php"><span>cadastrar professor</span></a>
                    </li>
                    <li>
                        <a id="cadastro-aluno" href="cadastroAluno.php"><span>cadastrar aluno</span></a>
                    </li>
                </ul>
                
                <ul id="menu-pesquisa">
                    <li>
                        <a id="pesquisa-professor" href="javascript:void(0)"><span>pesquisar professor</span></a>
                    </li>
                    <li>
                        <a id="pesquisa-aluno" href="javascript:void(0)"><span>pesquisar aluno</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="box-corpo">
            <div id="corpo">

                <h3><strong>Cadastro de Professores</strong></h3>
                
                <div id="box-conteudo">
                    <div id="menu">
                        <ul>
                            <li class="categoria">Cursos</li>
                            <li class="border-top-none"><a href="javascript:void(0)">Banco de Dados</a></li>
                            <li><a href="javascript:void(0)">Ciências da Computação</a></li>
                            <li><a href="javascript:void(0)">Redes de Computadores</a></li>
                            <li class="border-bottom-none"><a href="javascript:void(0)">Sistemas para Internet</a></li>
                        </ul>
                        <ul>
                            <li class="categoria">Cursos</li>
                            <li class="border-top-none"><a href="javascript:void(0)">Banco de Dados</a></li>
                            <li><a href="javascript:void(0)">Ciências da Computação</a></li>
                            <li><a href="javascript:void(0)">Redes de Computadores</a></li>
                            <li class="border-bottom-none"><a href="javascript:void(0)">Sistemas para Internet</a></li>
                        </ul>
                        <ul>
                            <li class="categoria">Cursos</li>
                            <li class="border-top-none"><a href="javascript:void(0)">Banco de Dados</a></li>
                            <li><a href="javascript:void(0)">Ciências da Computação</a></li>
                            <li><a href="javascript:void(0)">Redes de Computadores</a></li>
                            <li class="border-bottom-none"><a href="javascript:void(0)">Sistemas para Internet</a></li>
                        </ul>
                    </div>

                    <div id="conteudo">

                        <form action="cadastroAluno.php" method="post" name="formCadastroAluno">

                            <fieldset>
                                <legend id="grupo-dados-pessoais"><img src="../media/img/seta.png" alt="" /> Dados pessoais </legend>
                                <p>
                                <label for="nome">Nome:</label><input type="text" name="nome" id="nome" />
                                </p>
                                <p>
                                    <label for="sobrenome">SobreNome:</label><input type="text" name="sobrenome" id="sobrenome" />
                                </p>
                            </fieldset>

                            <fieldset>
                                <legend id="grupo-endereco"><img src="../media/img/seta.png" alt="" /> Endereço </legend>
                                <p>
                                    <label for="endereco">Endereço:</label><input type="text" name="endereco" id="endereco" />
                                </p>
                                <p>
                                    <label for="bairro">Bairro:</label><input type="text" name="bairro" id="bairro" />
                                </p>
                                <p>
                                    <label for="complemento">Complemento:</label><input type="text" name="complemento" id="complemento" />
                                </p>
                                <p>
                                    <label for="cidade">Cidade:</label><input type="text" name="cidade" id="cidade" />
                                </p>
                                <p>
                                    <label for="estado">Estado:</label><input type="text" name="estado" id="estado" />
                                </p>
                                <p>
                                    <label for="numero">Numero:</label><input type="text" name="numero" id="numero" />
                                </p>
                                <p>
                                    <label for="cep">CEP:</label><input type="text" name="cep" id="cep" />
                                </p>
                            </fieldset>

                            <fieldset>
                                <legend id="grupo-dados-academicos"><img src="../media/img/seta.png" alt="" /> Dados acadêmicos </legend>
                                <p>
                                    <label for="email">E-Mail:</label><input type="text" name="email" id="email" />
                                </p>
                                <p>
                                    <label for="telefonefixo">Telefone Fixo:</label><input type="text" name="telefoneFixo" id="telefonefixo" />
                                </p>
                                <p>
                                    <label for="telefonecelular">Telefone Celular:</label><input type="text" name="telefoneCelular" id="telefonecelular" />
                                </p>
                                <p>
                                    <label for="obervacao">Observação:</label><input type="text" name="observacao" id="observacao" />
                                </p>
                                <p>
                                    <label for="cpf">Cpf:</label><input type="text" name="cpf" id="cpf" />
                                </p>
                                <p>
                                    <label for="datanascimento">DataNascimento:</label><input type="text" name="dataNascimento" id="datanascimento" />
                                </p>
                                <p>
                                    <label for="estadocivil">EstadoCivil:</label><input type="text" name="estadoCivil" id="estadocivil" />
                                </p>
                                <p>
                                    <label for="estadoexpedidor">EstadoExpedidor:</label><input type="text" name="estadoExpedidor" id="estadoexpedidor" />
                                </p>
                                <p>
                                    <label for="nacionalidade">Nacionalidade:</label><input type="text" name="nacionalidade" id="nacionalidade" />
                                </p>
                                <p>
                                    <label for="naturalidade">Naturalidade:</label><input type="text" name="naturalidade" id="naturalidade" />
                                </p>
                                <p>
                                    <label for="orgaoexpedidor">OrgaoExpedidor:</label><input type="text" name="orgaoExpedidor" id="orgaoExpedidor" />
                                </p>
                                <p>
                                    <label for="rg">RG:</label><input type="text" name="rg" id="rg" />
                                </p>
                                <p>
                                    <label for="sexo">Sexo:</label><input type="text" name="sexo" id="sexo" />
                                </p>
                                <p>
                                    <label for="matricula">Matricula:</label><input type="text" name="matricula" id="matricula" />
                                </p>
                            </fieldset>

                            <p>
                                <input type="submit" value=".:Enviar:."/>
                            </p>

                            <p>
                                <input type="reset" value=".:Limpar:."/>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="rodape">
            <p>
                <a href="http://jigsaw.w3.org/css-validator/check/referer">
                    <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS válido!" />
                </a>
            </p>
            <p>
                <a href="http://validator.w3.org/check?uri=referer">
                    <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" />
                </a>
            </p>
        </div>
        
    </body>
</html>