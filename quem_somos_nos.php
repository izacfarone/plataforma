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

    <style>
        .justificado {
            text-align: justify;
            text-justify: inter-word;
        }
    </style>

</head>

<body>


    <!-- HEADER-->
    <header>
        <nav class="red lighten-1">
            <div class="container">
                <div class="nav-wrapper">
                <a href="index.php"> <img src="img/ong.jpg" alt="" class="circle responsive-img"> </a>

                    <!--COMO A TELA FICA NAS VERSÕES MOBILE (TABLET E CELULAR)-->
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i
                            class="material-icons">menu</i></a>

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

    <div class="container">
            <div class="row">
                    <div class="col s7 push-s7"><span class="flow-text">This div is 7-columns wide on pushed to the right by 5-columns.</span></div>
                    <div class="col s5 pull-s5"><span class="flow-text">5-columns wide pulled to the left by 7-columns.</span></div>
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
                        <li><a class="grey-text text-lighten-3" href="historias.html">Histórias</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Fale Conosco</a></li>
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

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'left'
    });
  });
      
</script>

</body>

</html>