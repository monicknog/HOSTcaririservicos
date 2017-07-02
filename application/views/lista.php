<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Trabalhador</title>
     
 <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/menu.css'); ?>">
    </head>
    
    <body>
<div class="container" style="margin-top: 15px">
    <div class="page-header">
        <div class="row">

            <div class=" col-md-2  col-md-offset-2">
                <h4>Filtrar por:</h4>
            </div>

            <div class="col-md-3 form-group">
                <?php echo form_open('ControllerLista/filtrar'); ?>
                <input type="text" class="form-control" name="BuscaServico" placeholder="Serviços">
            </div>

            <div class="form-group col-md-3">
                <select name="Cidade" class="form-control">
                    <option value="SF">
                        Selecione a cidade...
                    </option>
                    <option value="Barbalha">
                        Barbalha
                    </option>
                    <option value="Caririaçu">
                        Caririaçu
                    </option>
                    <option value="Crato">
                        Crato
                    </option>
                    <option value="Farias">
                        Farias Brito
                    </option>
                    <option value="Jardim">
                        Jardim
                    </option>
                    <option value="Juazeiro">   
                        Juazeiro do Norte
                    </option>
                    <option value="Missão">
                        Missão Velha
                    </option>
                    <option value="Nova">
                        Nova Olinda
                    </option>
                    <option value="Santana">
                        Santana do Cariri
                    </option>
                </select>
            </div>
            <div class="col-md-1">
                <button class="btn btn-primary btn-block btn-md botaoProcurar" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
<?php
    if ($servico_aux) {
        foreach ($servico_aux as $serv) {
           ?>
            <div class="col-md-6">
                <div class="well-lg well well-sm">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4">
                            <img src="<?php echo $serv->Url_Foto; ?>" alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-md-8 col-sm-4 col-lg-8">
                            <h4><?php echo $serv->Nome_Usuario ?></h4>
                            <small><cite title="Cidade"><?php echo $serv->Cidade . ', ' . $serv->Estado; ?><i class="glyphicon glyphicon-map-marker">
                                    </i></cite></small>
                            <p>
                                <i class="glyphicon glyphicon-cog"></i><?php echo $serv->Nome_Servico; ?>
                                <br />
                                <i class="glyphicon glyphicon-earphone"></i><?php echo $serv->Telefone1; ?>
                                <br />
                                <i class="glyphicon glyphicon-earphone"></i><?php echo $serv->Telefone2; ?>
                            </p>
                            <!-- Split button -->
                            <div class="btn-group">
                                <a href="#"data-toggle="modal" data-target="#modal02">
                                    <button type="button" class="btn btn-primary" value="perfil" onclick="preencherModal('<?php echo $serv->Url_Foto; ?>','<?php echo $serv->Nome_Usuario ?>','<?php echo $serv->Nome_Servico; ?>',
                                                '<?php echo $serv->Email; ?>','<?php echo $serv->Telefone1; ?>','<?php echo $serv->Telefone2; ?>','<?php echo $serv->Bairro; ?>','<?php echo $serv->Cidade . ', ' . $serv->Estado; ?>',
                                                '<?php echo $serv->Sexo; ?>');">Ver Perfil</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            
        }
    }
    ?> 
    <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/modal.js"); ?>"></script>
    <!-------------------------------- Começa aqui o modal do PERFIL -------------------------------------------->


        <div class="modal" id="modal02" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" style="left:auto;" style="top:50px;">


            <div class="container">
                <div class="row">

                    <div class="modal-dialog modal-sm " role="document">




                    </div>
                    <div class="col-md-7 ">

                        <div class="panel panel-default">
                            <div class="panel-heading"><button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true" style="color:red;">×</span>
                                    <span class="sr-only">Fechar Janela Modal</span>

                                </button>  <h4 >Perfil</h4></div></button>
                            <div class="panel-body">

                                <div class="box box-info">

                                    <div class="box-body">
                                        <div class="col-sm-6">
                                            <div  align="center"><img id="urlFoto" src="" alt="" class="img-rounded img-responsive" />  
                                            </div>

                                            <br>
                                        </div>

                                        <!--------------- /Entrada de Dados ------------------>

                                        <div class="col-sm-6">
                                            <h4 style="color:#00b1b1;" id="nomeUsuario"></h4>
                                            <span><p id="nServico"></p></span>   
                                            <span><p id="email">E-mail: <?php echo $serv->Email; ?></p></span> 
                                            <span><p id="t1"><?php echo $serv->Telefone1; ?></p></span>
                                            <span><p id="t2"></p></span> 
                                            <span><p id="bairroM"></p></span> 
                                            <span><p id="cidadeEstado"></p></span>
                                            <span><p id="sexo"></p></span> 

                                        </div>
                                        <div class="clearfix"></div>
                                        <hr style="margin:5px 0 5px 0;">


                                        <div class="col-sm-7 col-xs-6 ">Descrição do funcionario:o que ele é com 245
                                        caracteres.</div>
                                        <div class="clearfix"></div>
                                        <div class="bot-border"></div>



                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->

                                </div>


                            </div> 
                        </div>
                    </div>  



                </div>
            </div>



        </div>

<!--Acaba aqui -->
    <!-- Passador de paginas -->
    <center><div  style="position:relative;  top:90%; width:200px;">  <?php echo $pagination; ?>  </div>   </center>

</div>



    <body>
    <html>