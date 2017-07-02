<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Cariri Serviçoss</title>



    </head>
    <body>  
        <!--Imagem principal-->

        <header>
            <div class="header-content">
                <div class="header-content-inner">

                    <div class="container-fluid">

                        <div class="caixa">

                            <p>Encontre o profissional ideal</p>
                            <p id="sloga">Contrate os<strong> melhores profissionais</strong> sem sair de sua casa</p>
                            <div class="form-group form-group-lg">
                                <div class=" col-xs-12 col-sm-11 col-md-11 col-lg-10 col-lg-offset-1 ">

                                    <?php echo form_open('ControllerLista/filtrar'); ?>
                                    <input type="text" class="form-control" name="BuscaServico" placeholder="Serviço ex: pedreiro, babá, eletricista, doméstica">
                                    <div class="form-group">
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
                                    <button  class="btn btn-primary btn-block btn-md botaoProcurar" type="submit"><span class="glyphicon glyphicon-search"></span> Procurar</button>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </header>


       


    </body>
</html>
