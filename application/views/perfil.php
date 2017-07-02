<!DOCTYPE html>

<html>
    <head>

        <title>Perfil</title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/menu.css'); ?>">
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
    </head>
    <body>

        <section class="containerPerfil">
            <div class="container-fluid ">
                <div class="col-lg-12">
                    <!--Cabeçalho-->
                    <div class="col-lg-4 tituloPerfil">                     
                        <h1>MEU PERFIL</h1> 
                    </div>
                    <div class="listaPerfil col-lg-7">
                        <div class="listaPerfilDireito col-xs-5 col-lg-4"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIM Cabeçalho-->

        <!--Conteudo-->
        <div class="container-fluid containerConteudoPerfil ">
            <div class="col-xs-12 col-lg-12">
                <!--Foto perfil-->
                <section class="col-lg-3 ladoEsquerdo">
                    <div class="descricaoImagem">
                        <img class="img-circle" width="154px" height="154px" src="<?php
                        if (isset($servico_aux)) {
                            foreach ($servico_aux as $usuario) {
                                echo $usuario->Url_Foto;
                            }
                        }
                        ?>">
                        <p><?php
                            if (isset($servico_aux)) {
                                foreach ($servico_aux as $usuario) {
                                    echo '<br>' . $usuario->Nome_Usuario;
                                }
                            }
                            ?></p>
                        <p><img src=" <?php echo base_url("/img/icones/perfil1.png");?>"><?php
                            if (isset($servico_aux)) {
                                foreach ($servico_aux as $usuario) {
                                    echo $usuario->Email;
                                }
                            }
                            ?></p>
                        <p><img src=" <?php echo base_url("/img/icones/perfil2.png");?>"><?php
                            if (isset($servico)) {
                                foreach ($servico as $s) {
                                    echo $s->Nome_Servico . '<br>';
                                }
                            }
                            ?></p>
                    </div>
                    <div class="novoServico hidden-sm hidden-xs  ">
                        <p>Caso exerça mais de um serviço,clique no botão!</p>
                        <button class="botaoNovoServiço" data-toggle="modal"  data-target="#modalNovoServico"  href="#">Adicionar + </button>
                    </div>
                </section>
                <!--Fim foto perfil-->


                <!--Dados Pessoais-->
                <section class="col-lg-4 fonts">
                    <h2 class="tituloConteudo"><img class="espacoImg" src=" <?php echo base_url("/img/icones/titulo1.png");?>">Dados Pessoais<a class="linkPerfil" data-toggle="modal" data-target="#modalDadosPessoais" href="#">alterar</a></h2>
                    <p><img class="espacoImgPequeno"  src=" <?php echo base_url("/img/icones/perfil3.png");?>">24 Anos,<?php
                        if (isset($servico_aux)) {
                            foreach ($servico_aux as $usuario) {
                                if ($usuario->Sexo == 1) {
                                    echo ' Masculino';
                                } elseif ($usuario->Sexo == 2) {
                                    echo ' Feminino';
                                } elseif ($usuario->Sexo == 3) {
                                    echo ' Outros';
                                }
                            }
                        }
                        ?></p>
                    <p><img class="espacoImgPequeno"  src=" <?php echo base_url("/img/icones/dadosPessoais3.png");?>"><?php
                        if (isset($servico_aux)) {
                            foreach ($servico_aux as $usuario) {
                                echo $usuario->Cidade . ', ' . $usuario->Estado;
                            }
                        }
                        ?></p>
                    <p><img class="espacoImgPequeno"  src=" <?php echo base_url("/img/icones/dadosPessoais5.png");?>"><?php
                        if (isset($servico_aux)) {
                            foreach ($servico_aux as $usuario) {
                                echo $usuario->Bairro . ', ' . $usuario->CEP;
                            }
                        }
                        ?></p>
                    <p><img class="espacoImgPequeno"  src=" <?php echo base_url("/img/icones/dadosPessoais4.png");?>"><?php
                        if (isset($servico_aux)) {
                            foreach ($servico_aux as $usuario) {
                                echo $usuario->Rua . ', ' . $usuario->Numero_End;
                            }
                        }
                        ?></p>
                    <p><img class="espacoImgPequeno"  src=" <?php echo base_url("/img/icones/dadosPessoais2.png");?>"><?php
                        if (isset($servico_aux)) {
                            foreach ($servico_aux as $usuario) {
                                echo $usuario->Telefone1;
                            }
                        }
                        ?></p>
                </section>
                <!--Fim Dados Pessoais-->
                <!--Escolaridade-->
                <section class="col-lg-4 fonts">

                    <h2  class="tituloConteudo "><img class="espacoImg"  src=" <?php echo base_url("/img/icones/titulo2.png");?>">Qualificações<a class="linkPerfil"data-toggle="modal" data-target="#modalEscolaridade"  href="#">alterar</a></h2>
                    <p><img class="espacoImgPequeno"  src=" <?php echo base_url("/img/icones/qualificacao2.png");?>"><?php
                        if (isset($qualificacao)) {
                            foreach ($qualificacao as $q) {
                                echo $q->Nome_Grau;
                            }
                        }
                        ?></p>
                    <p> <img class="espacoImgPequeno"  src=" <?php echo base_url("/img/icones/qualificacao3.png");?>"><?php
                        if (isset($qualificacao)) {
                            foreach ($qualificacao as $q) {
                                echo $q->Nome_Curso;
                            }
                        }
                        ?></p>
                    <p><img class="espacoImgPequeno"  src=" <?php echo base_url("/img/icones/qualificacao4.png");?>"><?php
                        if (isset($qualificacao)) {
                            foreach ($qualificacao as $q) {
                                echo $q->Instituicao;
                            }
                        }
                        ?></p>
                    <p> <img class="espacoImgPequeno"  src=" <?php echo base_url("/img/icones/qualificacao5.png");?>"><?php
                        if (isset($qualificacao)) {
                            foreach ($qualificacao as $q) {
                                echo $q->Duracao;
                            }
                        }
                        ?></p>
                </section>
                <!--Fim Escolaridade-->


                <!--Experiencia-->
                <section class="col-lg-8 fonts"> 

                    <h2 class="tituloConteudo"><img class="espacoImg"  src=" <?php echo base_url("/img/icones/titulo3.png");?>">Serviços</h2>
                    <?php
                    if (isset($servico)) {
                        foreach ($servico as $s) {
                            ?>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                                <p><img class="espacoImgPequeno" src=" <?php echo base_url("/img/icones/qualificacao3.png");?>"><?php echo $s->Nome_Area; ?> </p>
                                <p><img class="espacoImgPequeno"  src=" <?php echo base_url("/img/icones/perfil2.png");?>"><?php echo $s->Nome_Servico; ?> </p>
                                <a href="#" data-toggle="modal" data-target="#modalEditarServico">
                                    <button class="botaoNovoServiço" onclick="preencherModalEdicao('<?php echo $s->ID_Area; ?>', '<?php echo $s->Nome_Area; ?>', '<?php echo $s->Nome_Servico; ?>', '<?php echo $s->Detalhe_Servico; ?>', <?php echo $s->ID_Servico; ?>)">Editar</button>
                                </a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </section>
                <div class="novoServico visible-xs">
                    <p>Caso exerça mais de um serviço,clique no botão!</p>
                    <button class="botaoNovoServiço" data-toggle="modal"  data-target="#modalNovoServico"  href="#">Adicionar + </button>
                </div>
            </div>
        </div>
        <!--FIM Conteudo-->

        <!--Janela Modal Dados Pessoais-->
        <section>
            <div class="container containerModal">
                <div class="row">
                    <div class="col-xs-5 col-sm-7 col-lg-6">

                        <div class="modal containerModal" id="modalDadosPessoais" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-lg " role="document">
                                <div class="modal-content">
                                    <div class="modal-header pageModal" >

                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true" style="color:white;opacity: 1;">&times;</span>
                                            <span class="sr-only">Fechar Janela Modal</span>
                                        </button>
                                        <h4 class="modal-title text-center"><img src="<?php echo base_url('/img/icones/cadeado.png'); ?>" class="headerModal">Dados Pessoais</h4> 
                                    </div>

                                    <div class="modal-body fontt">

                                        <!--Formulario dados Pessoais-->
                                        <section>

                                            <div class="container" style="padding-top: 30px;margin-bottom: 40px;">
                                                <div class="row">                  
                                                    <div class="col-xs-12 col-md-10 col-lg-11">

                                                        <!--Lado Esquerdo-->
                                                        <div class="col-md-5 col-lg-5">
                                                            <div class="form-group">
                                                                <label for="Nome_Usuario">Nome completo:</label>
                                                                <input type="text" class="form-control" name="Nome_Usuario" id="Nome_Usuario" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->Nome_Usuario;
                                                                    }
                                                                }
                                                                ?>" readonly required/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Email">Email:</label>
                                                                <input type="text" class="form-control" name="Email" id="Email" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->Email;
                                                                    }
                                                                }
                                                                ?>" readonly required/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="CPF">CPF/CNPJ</label>
                                                                <input type="text" class="form-control" name="CPF" id="CPF" placeholder="*CPF ou CNPJ" maxlength="14" onKeyPress="MascaraCPF(CPF);" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->CPF;
                                                                    }
                                                                }
                                                                ?>" readonly required/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Data_de_nascimento">Data de Nascimento:</label>
                                                                <input type="date" class="form-control" name="dataNasc" id="dataNascimento" placeholder="*Data de nascimento" onBlur="ValidaDataform1.data);" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->Data_Nascimento;
                                                                    }
                                                                }
                                                                ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Telefone1">Telefone:</label>
                                                                <input type="text" class="form-control" name="Telefone1" id="Telefone1" onkeyup="MascaraTelefone(Telefone1);" maxlength="15" placeholder="*Telefone" required value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->Telefone1;
                                                                    }
                                                                }
                                                                ?>"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Telefone2">Telefone (2) :</label>
                                                                <input type="text" class="form-control" name="Telefone2" id="Telefone2" onkeyup="MascaraTelefone(Telefone2);" maxlength="15" placeholder="Telefone 2" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->Telefone2;
                                                                    }
                                                                }
                                                                ?>"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Sexo">Sexo:</label>
                                                                <input type="radio" id="Sexo1" name="Sexo" id="Sexo" value="1" required <?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        if ($usuario->Sexo == 1) {
                                                                            echo 'checked';
                                                                        }
                                                                    }
                                                                }
                                                                ?>/>Masculino
                                                                <input type="radio" class="" name="Sexo" id="Sexo2" value="2" required <?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        if ($usuario->Sexo == 2) {
                                                                            echo 'checked';
                                                                        }
                                                                    }
                                                                }
                                                                ?>/>Feminino
                                                                <input type="radio" class="" name="Sexo" id="Sexo3" value="3" required <?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        if ($usuario->Sexo == 3) {
                                                                            echo 'checked';
                                                                        }
                                                                    }
                                                                }
                                                                ?>/>Outros
                                                            </div>


                                                        </div>
                                                        <!--Fim do lado Esquerdo-->

                                                        <!--Lado Direito-->    
                                                        <div class=" col-md-5 col-lg-5 borda">
                                                            <div class="form-group">
                                                                <label>Cep:</label>
                                                                <input name="CEP" class="form-control" type="text" id="cep" placeholder="*Cep" maxlength="9" onkeyup="MascaraCep(cep);" onblur="pesquisacep(cep);" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->CEP;
                                                                    }
                                                                }
                                                                ?>"/>       
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="rua">Rua:</label>
                                                                <input name="Rua" class="form-control" type="text" id="rua" size="60" placeholder="*Rua" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->Rua;
                                                                    }
                                                                }
                                                                ?>"/>                                 
                                                            </div>
                                                            <div class="form-group col-lg-6" style="margin-left: -15px; margin-bottom:0px;">
                                                                <label for="Numero">Número:</label>
                                                                <input type="number" class="form-control" name="Numero" id="numero" min="0" placeholder="Nº" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->Numero_End;
                                                                    }
                                                                }
                                                                ?>"/>
                                                            </div>
                                                            <div class="form-group col-xs-12 col-lg-6">
                                                                <label for="uf">Estado:</label>
                                                                <input name="Estado" class="form-control" type="text" id="uf" size="2" placeholder="*Estado" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->Estado;
                                                                    }
                                                                }
                                                                ?>"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="bairro">Bairro:</label>
                                                                <input name="Bairro" class="form-control" type="text" id="bairro" size="40" placeholder="*Bairro" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->Bairro;
                                                                    }
                                                                }
                                                                ?>"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="cidade">Cidade:</label>
                                                                <input name="Cidade" class="form-control" type="text" id="cidade" size="40" placeholder="*Cidade" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->Cidade;
                                                                    }
                                                                }
                                                                ?>"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Complemento">Complemento:</label>
                                                                <input type="text" class="form-control" name="Complemento"  id="Complemento" placeholder="Complemento" value="<?php
                                                                if (isset($servico_aux)) {
                                                                    foreach ($servico_aux as $usuario) {
                                                                        echo $usuario->Complemento;
                                                                    }
                                                                }
                                                                ?>"/>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!--Fim Lado Direito--> 
                                                    </div>

                                                    <div class="modal-footer" style="border: none">
                                                        <div class="col-lg-9 ">
                                                            <div class="col-lg-6"><a href="#"><button onclick="alterarDadosPessoais('<?php
                                                                    if (isset($servico_aux)) {
                                                                        foreach ($servico_aux as $usuario) {
                                                                            echo $usuario->ID_Usuario;
                                                                        }
                                                                    }
                                                                    ?>')" class="btn btn-primary btn-block botaoLogin"><img src="<?php echo base_url('/img/icones/login.png'); ?>"  class="headerModal">Alterar</button></a></div>
                                                            <div class="col-lg-6"> <a href="#"> <button input type="submit" value="Login" name="Salvar" class="btn btn-danger btn-block botaoLogin"><img src="<?php echo base_url('/img/icones/login.png'); ?>"  class="headerModal">Cancelar</button></a></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
                        <!-- /. Janela Modal Dados Pessoais-->

                        <!--Janela Modal Esolaridade-->
                        <section>
                            <div class="container-fluid containerModal">



                                <div class="modal containerModal" id="modalEscolaridade" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-md " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header pageModal" >

                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true" style="color:white;opacity: 1;">&times;</span>
                                                    <span class="sr-only">Fechar Janela Modal</span>
                                                </button>
                                                <h4 class="modal-title text-center"><img src="<?php echo base_url('/img/icones/cadeado.png'); ?>" class="headerModal">Escolaridade</h4> 
                                            </div>

                                            <div class="modal-body fontt">
                                                <!-- Conteudo -->
                                                <section>

                                                    <div class="container-fluid" style="margin: 0px; padding: 0px;">

                                                        <div class="col-xs-12 col-lg-12">                                                        
                                                            <div class="form-group">
                                                                <select class="form-control" id="grauModal">
                                                                    <option value="<?php
                                                                    if (isset($qualificacao)) {
                                                                        foreach ($qualificacao as $q) {
                                                                            echo $q->ID_Grau;
                                                                        }
                                                                    }
                                                                    ?>"><?php
                                                                                if (isset($qualificacao)) {
                                                                                    foreach ($qualificacao as $q) {
                                                                                        echo $q->Nome_Grau;
                                                                                    }
                                                                                }
                                                                                ?></option>
                                                                    <?php
                                                                    if (isset($listaQualificacao)) {
                                                                        foreach ($listaQualificacao as $l) {
                                                                            ?>
                                                                            <option value="<?php echo $l->ID_Grau; ?>">
                                                                                <?php echo $l->Nome_Grau; ?>
                                                                            </option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="Nome_CursoModal" value="<?php
                                                                if (isset($qualificacao)) {
                                                                    foreach ($qualificacao as $q) {
                                                                        echo $q->Nome_Curso;
                                                                    }
                                                                }
                                                                ?>" placeholder="*Nome do curso">                 
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="instituicaoModal" placeholder="*Instituição" value="<?php
                                                                if (isset($qualificacao)) {
                                                                    foreach ($qualificacao as $q) {
                                                                        echo $q->Instituicao;
                                                                    }
                                                                }
                                                                ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="duracaoModal" placeholder="*Duração" value="<?php
                                                                if (isset($qualificacao)) {
                                                                    foreach ($qualificacao as $q) {
                                                                        echo $q->Duracao;
                                                                    }
                                                                }
                                                                ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="form-control" id="ID_Idioma">
                                                                    <option value="<?php
                                                                    if (isset($idiomas)) {
                                                                        foreach ($idiomas as $idi) {
                                                                            echo $idi->ID_Idioma;
                                                                        }
                                                                    }
                                                                    ?>"><?php
                                                                                if (isset($idiomas)) {
                                                                                    foreach ($idiomas as $idi) {
                                                                                        echo $idi->Nome_Idioma;
                                                                                    }
                                                                                }
                                                                                ?></option>
                                                                    <?php
                                                                    if (isset($listaIdioma)) {
                                                                        foreach ($listaIdioma as $li) {
                                                                            ?>
                                                                            <option value="<?php echo $li->ID_Idioma; ?>">
                                                                                <?php echo $li->Nome_Idioma; ?>
                                                                            </option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="form-control" id="Nivel">
                                                                    <option value="<?php
                                                                    if (isset($idiomas)) {
                                                                        foreach ($idiomas as $idi) {
                                                                            echo $idi->ID_Nivel;
                                                                        }
                                                                    }
                                                                    ?>"><?php
                                                                                if (isset($idiomas)) {
                                                                                    foreach ($idiomas as $idi) {
                                                                                        echo $idi->Nivel;
                                                                                    }
                                                                                }
                                                                                ?></option>
                                                                    <?php
                                                                    if (isset($listaNivel)) {
                                                                        foreach ($listaNivel as $ln) {
                                                                            ?>
                                                                            <option value="<?php echo $ln->ID_Nivel; ?>">
                                                                                <?php echo $ln->Nivel; ?>
                                                                            </option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </section>
                                                <!-- Fim Conteudo -->


                                            </div>

                                            <div class="modal-footer" style="border: none">
                                                <div class="col-lg-12 ">
                                                    <div class="col-lg-6"><a href="#"> <button onclick="atualizarQualificacoes('<?php
                                                                    if (isset($servico_aux)) {
                                                                        foreach ($servico_aux as $usuario) {
                                                                            echo $usuario->ID_Usuario;
                                                                        }
                                                                    }
                                                                    ?>','<?php
                                                                if (isset($qualificacao)) {
                                                                    foreach ($qualificacao as $q) {
                                                                        echo $q->ID_Qualificacao;
                                                                    }
                                                                }
                                                                ?>')" class="btn btn-primary btn-block botaoLogin"><img src="<?php echo base_url('/img/icones/login.png'); ?>"  class="headerModal">Alterar</button></a></div>
                                                    <div class="col-lg-6"> <a href="#"> <button class="btn btn-danger btn-block botaoLogin"><img src="<?php echo base_url('/img/icones/login.png'); ?>"  class="headerModal">Cancelar</button></a></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </section>
                        <!-- /. Janela Modal Escolaridade-->

                        <!--Janela Novo Serviço-->
                        <section>
                            <div class="container-fluid containerModal">
                                <div class="modal containerModal" id="modalNovoServico" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-md " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header pageModal" >
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true" style="color:white;opacity: 1;">&times;</span>
                                                    <span class="sr-only">Fechar Janela Modal</span>
                                                </button>
                                                <h4 class="modal-title text-center"><img src="<?php echo base_url('/img/icones/cadeado.png'); ?>" class="headerModal">O que deseja adicionar?</h4> 
                                            </div>

                                            <div class="modal-body fontt">
                                                <!--Conteudo -->
                                                <section>
                                                    <div class="container-fluid">
                                                        <div class="col-xs-12 col-lg-12">
                                                            <div class="form-group">
                                                                <select class="form-control" id="ID_Area" name="ID_Area">
                                                                    <option>*Area de Atuação</option>
                                                                    <?php
                                                                    if (isset($area)) {
                                                                        foreach ($area as $a) {
                                                                            ?>
                                                                            <option value="<?php echo $a->ID_Area; ?>">
                                                                                <?php echo $a->Nome_Area; ?>
                                                                            </option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input  type="text" id="Nome_Servico" name="Nome_Servico" class="form-control" placeholder="*Serviço a Oferecer">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="Detalhe_Servico" id="Detalhe_Servico" placeholder="*Fale sobre o seu serviço">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!--\FIM Conteudo -->
                                            </div>

                                            <div class="modal-footer" style="border: none">
                                                <div class="col-lg-12 ">
                                                    <div class="col-lg-6"><a href="#"> <button class="btn btn-primary btn-block botaoLogin" onclick="registrarServico('<?php
                                                            if (isset($servico_aux)) {
                                                                foreach ($servico_aux as $usuario) {
                                                                    echo $usuario->ID_Usuario;
                                                                }
                                                            }
                                                            ?>');"><img src="<?php echo base_url('/img/icones/login.png'); ?>"  class="headerModal">Inserir</button></a></div>
                                                    <div class="col-lg-6"> <a href=""> <button input type="submit" class="btn btn-danger btn-block botaoLogin"><img src="<?php echo base_url('/img/icones/login.png'); ?>"  class="headerModal">Cancelar</button></a></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </section>
                        <!-- /. Janela Modal Novo Serviço-->

                        <!--Janela Editar Serviço-->
                        <section>
                            <div class="container-fluid containerModal">
                                <div class="modal containerModal" id="modalEditarServico" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-md " role="document">
                                        <div class="modal-content">
                                            <div class="modal-header pageModal" >
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true" style="color:white;opacity: 1;">&times;</span>
                                                    <span class="sr-only">Fechar Janela Modal</span>
                                                </button>
                                                <h4 class="modal-title text-center"><img src="<?php echo base_url('/img/icones/cadeado.png'); ?>" class="headerModal">Editar Serviço</h4> 
                                            </div>

                                            <div class="modal-body fontt">
                                                <!--Conteudo -->
                                                <section>
                                                    <div class="container-fluid">
                                                        <div class="col-xs-12 col-lg-12">
                                                            <input type="hidden" id="ID_Servico2">
                                                            <div class="form-group">
                                                                <select class="form-control" id="ID_Area2">
                                                                    <option id="setada"></option>
                                                                    <?php
                                                                    if (isset($area)) {
                                                                        foreach ($area as $a) {
                                                                            ?>
                                                                            <option value="<?php echo $a->ID_Area; ?>">
                                                                                <?php echo $a->Nome_Area; ?>
                                                                            </option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input  type="text" id="Nome_Servico2" name="Nome_Servico" class="form-control" placeholder="*Serviço a Oferecer">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="Detalhe_Servico" id="Detalhe_Servico2" placeholder="*Fale sobre o seu serviço">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <!--\FIM Conteudo -->
                                            </div>

                                            <div class="modal-footer" style="border: none">
                                                <div class="col-lg-12 ">
                                                    <div class="col-lg-6"><a href="#"> <button onclick="alterarServico('<?php echo $a->ID_Area; ?>', '<?php echo $a->ID_Area; ?>')" class="btn btn-primary btn-block botaoLogin"><img src="<?php echo base_url('/img/icones/login.png'); ?>"  class="headerModal">Alterar</button></a></div>
                                                    <div class="col-lg-6"> <a href="#"> <button input type="submit" value="Login" name="Salvar" class="btn btn-danger btn-block botaoLogin"><img src="<?php echo base_url('/img/icones/login.png'); ?>"  class="headerModal">Cancelar</button></a></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </section>
                        <!-- /. Janela Modal Editar Serviço-->
                        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/modal.js"); ?>"></script>
                        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/updateAndInsertDb.js"); ?>"></script>
                        </body>
                        </html>
