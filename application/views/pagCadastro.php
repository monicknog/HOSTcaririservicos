<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Trabalhador</title>

        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/menu.css'); ?>">
    </head>
    <body>

        <!--Cabeçalho-->

        <section style="padding-top: 50px" class="text-center pageDadosPessoais">
            <div class="col-lg-12">
                <h1><p>Seu Currículo</p></h1>
                <h4><p class="subTitulo">Efetue as etapas para concluir seu cadastro</p></h4>
                <div class="col-md-5 col-md-offset-4  col-lg-4 col-lg-offset-4"> 
                    <div class="progress barraProgresso">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                            <span class="">25% Completo</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-12"> 
                    <h5><p class="space"><strong class="marcacao">Perfil</strong>  Escolaridade  Experiêcia</p></h5>
                    <hr>
                </div>
            </div>
        </section>
        <!--Fim Cabeçalho-->

        <!--Local da imagem-->
        <section>
            <?php echo form_open_multipart('/cadastro/qualificacao'); ?>
            <div class="container-fluid" >
                <div class= "col-xs-12 col-lg-12">
                    <div class="col-xs-12 col-lg-12 text-center">
                        <div  align="center"> <img alt="Selecione uma foto" name="userfile"  src="<?php echo base_url('/img/imgPerfil2.png'); ?>" id="profile-image1" class="-responsive"> 
                            <br>
                            <input id="profile-image-upload" name="upload" type="file">
                            <div style="color:black;" >Selecione uma foto</div>
                            <!--Upload Image Js And Css-->
                        </div>                         
                    </div>
                    <div class="col-xs-12 col-lg-12">
                        <hr id="hrr">
                    </div>
                </div>
        </section>
        <!-- Fim Local da imagem-->
        <div class="titulodadosPessoais">
            Informe seus dados pessoais, suas informações são importantes, é baseado nelas que você será contratado 
        </div>

        <!--Formulario dados Pessoais-->
        <section>

            <div class="container" style="padding-top: 30px;margin-bottom: 40px;">
                <div class="row">                  
                    <div class="col-xs-12 col-md-12 col-lg-11 col-lg-offset-1">

                        <!--Lado Esquerdo-->
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="Nome_Usuario">Nome completo:</label>
                                <input type="text" class="form-control" name="Nome_Usuario" id="Nome_Usuario" value="<?php
                                if (isset($NomeCompleto)) {
                                    echo $NomeCompleto;
                                }
                                ?>" readonly required/>
                            </div>
                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="text" class="form-control" name="Email" id="Email" value="<?php
                                if (isset($Email)) {
                                    echo $Email;
                                }
                                ?>" readonly required/>
                            </div>
                            <input type="hidden" name="Senha" value="<?php
                            if (isset($Senha)) {
                                echo $Senha;
                            }
                            ?>"/>
                                   <?php
                                   if (isset($msg)) {
                                       $alertaCPF = $msg;
                                       unset($msg);
                                       ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $alertaCPF; ?>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="CPF">CPF/CNPJ</label>
                                <input type="text" class="form-control" name="CPF" id="CPF" placeholder="*CPF ou CNPJ" maxlength="14" onKeyPress="MascaraCPF(CPF);" value="" required/>
                            </div>
                            <div class="form-group">
                                <label for="Data_de_nascimento">Data de Nascimento:</label>
                                <input type="date" class="form-control" name="dataNasc" onKeyPress="MascaraData(dataNasc);" maxlength="10" placeholder="*Data de nascimento" onBlur="ValidaDataform1.data);" value="<?php
                                if (isset($Data_Nascimento)) {
                                    echo $Data_Nascimento;
                                }
                                ?>">
                            </div>
                            <div class="form-group">
                                <label for="Telefone1">Telefone:</label>
                                <input type="text" class="form-control" name="Telefone1" id="Telefone1" onkeyup="MascaraTelefone(Telefone1);" maxlength="15" placeholder="*Telefone" required value="<?php
                                if (isset($Telefone1)) {
                                    echo $Telefone1;
                                }
                                ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="Telefone2">Telefone (2) :</label>
                                <input type="text" class="form-control" name="Telefone2" id="Telefone2" onkeyup="MascaraTelefone(Telefone2);" maxlength="15" placeholder="Telefone 2" value="<?php
                                if (isset($Telefone2)) {
                                    echo $Telefone2;
                                }
                                ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="Sexo">Sexo:</label>
                                <input type="radio" class="" name="Sexo" id="Sexo" value="1" required <?php
                                if (isset($Sexo) && ($Sexo == 1)) {
                                    echo 'checked';
                                }
                                ?>/>Masculino
                                <input type="radio" class="" name="Sexo" id="Sexo" value="2" required <?php
                                if (isset($Sexo) && ($Sexo == 2)) {
                                    echo 'checked';
                                }
                                ?>/>Feminino
                                <input type="radio" class="" name="Sexo" id="Sexo" value="3" required <?php
                                if (isset($Sexo) && ($Sexo == 3)) {
                                    echo 'checked';
                                }
                                ?>/>Outros
                            </div>


                        </div>
                        <!--Fim do lado Esquerdo-->

                        <!--Lado Direito-->    
                        <div class="col-lg-5 borda">
                            <div class="form-group">
                                <label>Cep:</label>
                                <input name="CEP" class="form-control" type="text" id="cep" placeholder="*Cep" maxlength="9" onkeyup="MascaraCep(cep);" onblur="pesquisacep(this.value);" value="<?php
                                if (isset($CEP)) {
                                    echo $CEP;
                                }
                                ?>"/>       
                            </div>
                            <div class="form-group">
                                <label for="rua">Rua:</label>
                                <input name="Rua" class="form-control" type="text" id="rua" size="60" placeholder="*Rua" value="<?php
                                if (isset($Rua)) {
                                    echo $Rua;
                                }
                                ?>"/>                                 
                            </div>
                            <div class="form-group col-lg-6" style="margin-left: -15px; margin-bottom:0px;">
                                <label for="Numero">Número:</label>
                                <input type="number" class="form-control" name="Numero" id="numero" min="0" placeholder="Nº" value="<?php
                                if (isset($Numero_End)) {
                                    echo $Numero_End;
                                }
                                ?>"/>
                            </div>
                            <div class="form-group col-xs-12 col-lg-6">
                                <label for="uf">Estado:</label>
                                <input name="Estado" class="form-control" type="text" id="uf" size="2" placeholder="*Estado" value="<?php
                                if (isset($Estado)) {
                                    echo $Estado;
                                }
                                ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="bairro">Bairro:</label>
                                <input name="Bairro" class="form-control" type="text" id="bairro" size="40" placeholder="*Bairro" value="<?php
                                if (isset($Bairro)) {
                                    echo $Bairro;
                                }
                                ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="cidade">Cidade:</label>
                                <input name="Cidade" class="form-control" type="text" id="cidade" size="40" placeholder="*Cidade" value="<?php
                                if (isset($Cidade)) {
                                    echo $Cidade;
                                }
                                ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="Complemento">Complemento:</label>
                                <input type="text" class="form-control" name="Complemento"  id="Complemento" placeholder="Complemento" value="<?php
                                if (isset($Complemento)) {
                                    echo $Complemento;
                                }
                                ?>"/>
                                </label>
                            </div>
                        </div>
                        <!--Fim Lado Direito--> 
                        <!--botao view lg de enviar-->
                        <div class="form-group col-lg-10 hidden-xs">
                            <button type="submit" class="btn btn-block btn-primary glyphicon glyphicon-saved"> Continuar</button>
                        </div>
                        <!-- fim botao de enviar-->
                        <div class="form-group col-xs-12 visible-xs">
                            <button type="submit" class="btn btn-block btn-primary glyphicon glyphicon-saved"> Continuar</button>
                        </div>

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/js.js"); ?>"></script>
    <script>
                                            $(function () {
                                                $('#profile-image1').on('click', function () {
                                                    $('#profile-image-upload').click();
                                                });
                                            });
    </script> 






</body>
</html>