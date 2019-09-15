<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Materialize </title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>

    <body class="body">

        <?php
        require './conn.php';

        $Comentarios = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($Comentarios['SendComentario'])):
            unset($Comentarios['SendComentario']);
            $conn = new Conn();

            $result_comentar = "INSERT INTO comentario (nome, celular, comentario, created) VALUES (:nome, :celular, :comentario, NOW())";

            $comentar = $conn->getConn()->prepare($result_comentar);


            $comentar->bindParam(':nome', $Comentarios['nome'], PDO::PARAM_STR);
            $comentar->bindParam(':email', $Comentarios['celular'], PDO::PARAM_STR);
            $comentar->bindParam(':celular', $Comentarios['comentario'], PDO::PARAM_STR);

            $ $comentar->execute();

            if ($ $comentar->rowCount()):
                echo 'Muito obrigado pela sua contribuição';
            endif;


        endif;
        ?>

        <!-- HEADER-->
        <header>
            <nav class="red lighten-1">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="index.php"> <img src="img/ong.jpg" alt="" class="circle responsive-img"> </a>

                        <!--COMO A TELA FICA NAS VERSÕES MOBILE (TABLET E CELULAR)-->
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                        <!-- De tablet para baixo-->
                        <ul class="right hide-on-med-and-down">
                            <li><a href="adote.php">Adote</a></li>
                            <li><a href="doe.php">Doe</a></li>
                            <li><a href="historias.php">Histórias</a></li>
                            <li><a href="fale_conosco.php">Fale Conosco</a></li>
                            <li><a href="quem_somos_nos.php">Quem somos nós</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>

                        <!--FORMATANDO A TELA PARA A VERSÃO DE CELULAR-->
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="adote.php">Adote</a></li>
                            <li><a href="doe.php">Doe</a></li>
                            <li><a href="historias.php">Histórias</a></li>
                            <li><a href="fale_conosco.php">Fale Conosco</a></li>
                            <li><a href="quem_somos_nos.php">Quem somos nós</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--FIM DO CABEÇALHO-->

        <div class="container">
            <br>
            <div class="row z-depth-5">
                <div class="">
                    <br>
                    <h5 class="center-align"> <i class="small material-icons prefix">record_voice_over</i> Fale Conosco</h5>

                    <br>
                </div>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="icon_prefix" name="nome" type="text" required="Insara nome">
                            <label for="icon_prefix">Nome Completo</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" name="celular" type="tel" class="validate">
                            <label for="icon_telephone">Celular</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="textarea2" name="comentario" class="materialize-textarea" data-length="250"></textarea>
                            <label for="textarea2">Faça o seu comentário (reclamação, sujestão, denuncia de animal abandonado) de forma
                                suscinta.</label>
                        </div>
                    </div>
                    <div class="col s6 offset-s10">
                        <button class="btn waves-effect waves-light blue row" type="submit" name="SendComentario">Enviar
                        </button>

                    </div>
                    <br>
                </form>


            </div>
        </div>

        <!-- RODAPÉ-->
        <footer class="page-footer red lighten-1">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">ONG Amemais</h5>

                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Páginas</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Adote</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Doe</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Histórias</a></li>
                            <li><a class="grey-text text-lighten-3" href="historias.html">Fale Conosco</a></li>
                            <li><a class="grey-text text-lighten-3" href="quem_somos_nos.html">Quem somos nós</a></li>
                            <li><a class="grey-text text-lighten-3" href="login.html">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2019 Copyright Text
                </div>
            </div>
        </footer>

        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Materialize JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

        <script>
            $(document).ready(function () {
                // BOTÃO MENU
                $(".button-collapse").sideNav();
                // SLIDER
                $('.slider').slider();
            });
        </script>
    </body>