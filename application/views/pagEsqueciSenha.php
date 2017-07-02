<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Esqueci minha senha</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/creative.css'); ?>">
    </head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="recovery-panel panel panel-success" style="margin-top: 300px">
                        <div class="panel-heading">
                            <h3 class="panel-title">Recuperação de Senha</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="#">
                                <fieldset>
                                    <input id="textinput" name="textinput" placeholder="email@email.com" class="form-control input-md" required="" type="text">
                                    <span class="help-block">Insira o email cadastrado no sistema</span>     
                                    <button id="recupera" name="recupera" class="btn btn-success">Recuperar</button>
                                    <button id="cancela" name="cancela" class="btn btn-danger">Cancelar</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
