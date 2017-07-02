<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/menu.css'); ?>">
    </head>
    <body>
       
        <!--Cabeçalho-->

        <section style="padding-top: 40px" class="text-center">
            <div class="col-lg-12">
                <h1><p>Seu Currículo</p></h1>
                <h4><p>Efetue as etapas para concluir seu cadastro</p></h4>
                <div class="col-md-5 col-md-offset-4  col-lg-4 col-lg-offset-4"> 
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <span class="">70% Completo</span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-12"> 
                    <h5><p class="space">Perfil Qualificação Experiêcia</p></h5>
                    <hr>
                </div>
            </div>
        </section>
        <!--Fim Cabeçalho-->  
        <!-- Conteudo -->
        <?php echo form_open_multipart('/cadastro/servico'); ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-12">
                        <div class="col-xs-12 col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="ID_Grau" onchange="desativarCampos(this.value);" id="selectOption">
                                    <option>*Qualificação</option>
                                    <?php
                                    if (isset($grau)) {
                                        foreach ($grau as $g) {
                                            ?>
                                            <option value="<?php echo $g->ID_Grau; ?>">
                                                <?php echo $g->Nome_Grau; ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>  
                            <div class="form-group" id="Nome_CursoDiv">
                            </div>
                            <div class="form-group" id="instituicaoDiv">
                            </div>
                            <div class="form-group" id='cargaHorariaDiv'>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="ID_Idioma" id="nivelCaixa" onchange="caixaNivel();">
                                    <option value="0">*Domina Outra Lingua?</option>
                                    <?php
                                    if (isset($idiomas)) {
                                        foreach ($idiomas as $i) {
                                            ?>
                                            <option value="<?php echo $i->ID_Idioma; ?>">
                                                <?php echo $i->Nome_Idioma; ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>    
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="nivelIdioma" name="nivelIdioma" disabled>
                                    <?php
                                    if (isset($nivel)) {
                                        foreach ($nivel as $n) {
                                            ?>
                                            <option value="<?php echo $n->ID_Nivel; ?>">
                                                <?php echo $n->Nivel; ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="alert alert-info form-group">
                                Para adicionar <strong>mais </strong>qualificações visite seu <strong>perfil</strong>!
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Continuar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   <!-- Fim Conteudo -->


        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/js.js"); ?>"></script>
     
        <?php echo form_close(); ?>

    </body>
</html>
