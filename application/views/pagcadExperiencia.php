<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/menu.css'); ?>">

    </head>
    <body>

        <!--Cabeçalho-->

        <section style="padding-top: 40px" class="text-center pageDadosPessoais">
            <div class="col-lg-12">
                <h1><p>Seu Currículo</p></h1>
                <h4><p class="subTitulo">Ultima etapa,Agora informe seus dados profissionais</p></h4>
                <div class="col-md-5 col-md-offset-4  col-lg-4 col-lg-offset-4"> 
                    <div class="progress barraProgresso">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            <span class="">80% Completo</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-12"> 
                    <h5><p class="space">Perfil  Escolaridade  <strong class="marcacao"> Experiência</strong></p></h5>
                    <hr>
                </div>
            </div>
        </section>
        <!--Fim Cabeçalho-->
        <!--Titulo -->
        <div class="tituloExperiencia">
            <p class="paragrafo"> Informe seus dados pessoais,suas informações são importantes,é baseado nelas que você será contratado</p>
        </div>
        <!--Fim Titulo -->
        
          <!--Conteudo -->
        <?php echo form_open_multipart('/concluido'); ?>
          <section>
            <div class="">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-12">
                            <div class="col-xs-12 col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" name="ID_Area">
                                        <option value="0">*Area de Atuação</option>
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
                                    <input  type="text" name="Nome_Servico" class="form-control" placeholder="*Serviço a prestar">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Detalhe_Servico" class="form-control" placeholder="Fale um pouco sobre o que irá prestar!">
                                </div>
                                <div class="alert alert-info form-group">
                                    Você pode adicionar outros serviços ao <strong>terminar</strong> o cadastro visitando o seu perfil!
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block">Finalizar Curriculo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php echo form_close(); ?>
        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/js.js"); ?>"></script>

    </body>
