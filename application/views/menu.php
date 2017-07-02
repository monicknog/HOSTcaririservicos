<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <title>Cariri Serviços</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('bootstrap-3.3.7-dist/css/estilo2.css'); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('/css/creative.css'); ?>">
        <link rel="shortcut icon" href="<?php echo base_url('/img/icones/icone.png');?>">

    </head>
    <body>  


        <!--Começo menu -->
        <section>  
            <nav id="inicio" class="navbar navbar-default navbar-fixed-top " role="navigation" >
                <div class="container-fluid" >


                    <!--CABEÇALHO DO MENU-->
                    <div class="navbar-header">
                        <!-- CRIANDO O BOTAO ,AONDE VAO FICAR O MENU QUANDO A TELA FOR PEQUENA
                        COLAPSON É O EFEITO QUE FAZ APARECER O BOTAO-->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                            <span class="sr-only">Logo do Cariri Serviços</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--NOME QUE FICA NO MENU,PODE COLOCAR UM LOGO AQUUI-->
                        <a class="navbar-brand" href="<?php echo base_url(''); ?>"><img src="<?php echo base_url('/img/logoNormal.png'); ?>"></a>
                    </div>
                    <!-- FIM CABEÇALHO DO MENU-->
                    <!--essa DIV faz com que aO diminuir a pagina todos os campos do menu desapareça e vá parar no icone
                   button tem data-target="#bs-example-navbar-collapse-1" esse nome tem que ser igual ao id abaixo
                   e ele que faz a comunicação-->
                    <div class="collapse navbar-collapse marcacao" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right"  >
                           <li><a  href="<?php echo base_url("/servicos"); ?>">Serviços</a></li>
                            <li><a  href="<?php echo base_url("/sobre"); ?>">Sobre</a></li>

                            <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
                                <li><a href="<?= base_url('/perfilUsuario') ?>">Meu Perfil</a></li>
                                <li><a href="<?= base_url('/logout') ?>">Sair</a></li>
                                
                            <?php else : ?>
                                <li><a  href="<?php echo base_url("/cadastro");?>">Cadastre-se</a></li>
                                <li><a  href="#"data-toggle="modal" data-target="#modal01">Entre</a></li>

                            <?php endif; ?> 
                        </ul>
                    </div>
                    <!--Fim dos links-->

                </div><!--Fim Collapse-->

            </nav>
        </section>
        <!--Fim do menu -->


        <!--Janela Modal-->
        <section>
            <div class="container containerModal">
                <div class="row">
                    <div class="col-xs-5 col-sm-7 col-lg-6">

                        <?php echo validation_errors(); ?> 

                        <?php echo form_open('ControllerLogin/conferirLogin'); ?>
                        <div class="modal containerModal" id="modal01" role="dialog" tabindex="-1" aria-labelledby="myModalLabel">
                            <div class="modal-dialog modal-sm " role="document">
                                <div class="modal-content">
                                    <div class="modal-header pageModal" >

                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true" style="color:white;opacity: 1;">&times;</span>
                                            <span class="sr-only">Fechar Janela Modal</span>
                                        </button>
                                        <h4 class="modal-title text-center"><img src="<?php echo base_url('/img/icones/cadeado.png'); ?>" class="headerModal">Informe seus Dados</h4> 
                                    </div>

                                    <div class="modal-body fontt">

                                        <label for="login"  class="botaoInput">Login:</label>
                                        <div class="form-group">
                                            <input type="text" name="Usuario" id="login" placeholder="Usuário" class="form-control" maxlength="50" required>
                                        </div>
                                        <label for="senha" class="botaoInput">Senha:</label>
                                        <div class="form-group">
                                            <input type="password" id="senha" name="Senha" placeholder="Senha" class="form-control" maxlength="50" required>
                                        </div>

                                        <div class="col-xs-6 col-lg-5" >    
                                            <input type="checkbox" name="salvarSenha" value="sim" checked=""> Lembrar-me  
                                        </div>
                                        <div class="col-xs-6 col-lg-7 text-right">
                                            <a href="#">Esqueci minha senha</a>
                                        </div>
                                        <div class="col-xs-12 col-lg-12 espmodal" >
                                            Ainda não está cadastrado?<small><a href="<?php echo base_url("cadastro/"); ?>">Clique Aqui!</a>             
                                        </div>
                                    </div>

                                    <div class="modal-footer" style="border: none">

                                        <a href="#"> <button input type="submit" value="Login" name="Salvar" class="btn btn-primary btn-block botaoLogin"><img src="<?php echo base_url('/img/icones/login.png'); ?>"  class="headerModal">Entrar</button></a>
            <!--                            <a href="<?php echo base_url("cadastro/"); ?>"> <button type="button" class="btn btn-danger btn-block">Entrar</button></a>-->
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /. Janela Modal-->

        <!-- chamando js-->
        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"); ?>"></script>
        <script src="<?php echo base_url("bootstrap-3.3.7-dist/js/bootstrap.min.js"); ?>"></script>
        <script languag="javascript">
            function abertura() {
                document.getElementById("inicio").className = "corrente";
            }
            function trocaMenu(id) {
                document.getElementById("inicio").className = "normal";
                document.getElementById("contato").className = "normal";
                document.getElementById("sair").className = "normal";
                if (id == "I") {
                    document.getElementById("inicio").className = "corrente";
                } else {
                }
            }
        </script>
    </body>
</html>
