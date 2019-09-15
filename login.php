
<!DOCTYPE html>
<html>
    <head>
        <!-- created by OSTON CODE CYPHER -->
        <!--Support/subscribe my channel @ youtube.com/ostoncodecypher -->
        <title>Amemais - Login / Registrar</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
        <link rel="stylesheet" href="css/custom.css">  
        <style>

            .progress{
                width:50%;
                margin:0 auto;
                margin-top:20%;
            }

            @media only screen and (max-width:924px){
                .progress{
                    width:70%;
                    margin:0 auto;
                    margin-top:60%;
                }
            }

        </style>
    </head>

    <body class="body">

        <?php
        require './conn.php';

        $Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($Dados['SendCadUser'])):
            unset($Dados['SendCadUser']);
            $conn = new Conn();

            $result_cadastrar = "INSERT INTO usuario (nome, email, celular, usuario, senha, created) VALUES (:nome, :email, :celular, :usuario, :senha, NOW())";

            $cadastrar = $conn->getConn()->prepare($result_cadastrar);


            $cadastrar->bindParam(':nome', $Dados['nome'], PDO::PARAM_STR);
            $cadastrar->bindParam(':email', $Dados['email'], PDO::PARAM_STR);
            $cadastrar->bindParam(':celular', $Dados['celular'], PDO::PARAM_STR);
            $cadastrar->bindParam(':usuario', $Dados['usuario'], PDO::PARAM_STR);
            $cadastrar->bindParam(':senha', $Dados['senha'], PDO::PARAM_STR);

            $cadastrar->execute();


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






        <div id="flayer">
            <div id="slayer">
                <div class="container" id="content">


                    <div class="row">
                        <div class="col l3 m3 s12"></div>
                        <div class="col l6 m6 s12">
                            <form name="cadastrar" action="" method="POST">
                                <div class="card-panel z-depth-5">
                                    <h5 class="center">Cadastre-se</h5>
                                    <p class="center">Junte-se à nossa família agora!</p>

                                    <div class="input-field">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input type="text" name="nome" class="validate">
                                        <label>Nome Completo</label>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">email</i>
                                        <input type="email" name="email" class="validate" maxlength=30>
                                        <label>E-mail</label>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">perm_phone_msg</i>
                                        <input type="text" name="celular" class="validate" maxlength=30>
                                        <label>Celular</label>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">assignment_ind</i>
                                        <input type="text" name="usuario" class="validate" maxlength=30>
                                        <label>Usuario</label>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">lock</i>
                                        <input type="password" name="senha" class="validate" maxlength=16>
                                        <label>Insira Senha (máximo 16 caracteres)</label>
                                    </div>


                                    <p class="right">Já é cadastrado(a) <a href="#login" class="modal-trigger">Fazer Login</a></p>
                                    <input type="submit" name="SendCadUser" value="Registrar" class="btn left col s12 blue">

                                    <div class="clearfix"></div>
                                </div>
                            </form>

                        </div>
                        <div class="col l3 m3 s12"></div>



                    </div>
                </div>
            </div>
        </div>

        <!-- login form put in the form -->
        <div class="modal modal-fixed-footer" id="login">
            <form action="" method="POST">

                <div class="modal-conent">
                    <div class="container">
                        <h5 class="center">Login</h5>
                        <p class="center">Juntos somos mais fortes!</p>
                        <div class="row">

                            <div class="col m12 s12">
                                <div class="input-field">
                                    <i class="material-icons prefix">person</i>
                                    <input type="text" name="username">
                                    <label>Insira usuario/email</label>
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">lock</i>
                                    <input type="password" name="pass1">
                                    <label>Insira senha</label>
                                </div>
                                <p>
                                    <label>
                                        <input type="checkbox">
                                        <span>Mantenha-se conectado</span>
                                    </label>
                                </p>
                            </div>

                        </div>
                    </div><!-- end of modal container -->
                </div>

                <div class="modal-footer">
                    <div class="container">


                        <p class="left"> <a href="login.html" class="modal-trigger">Cadastrar</a></p>
                        <input type="submit" name="submit" value="login" class="btn pulse">
                        <input type="button"  value="fechar" class="btn modal-close red">
                    </div>



                </div>
        </div>
    </form>
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
    $(document).ready(function () {
        // BOTÃO MENU
        $(".button-collapse").sideNav();
        // SLIDER
        $('.slider').slider();
    });
</script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/custom.js"></script>
<script>

    const login = document.querySelectorAll(".modal");
    M.Modal.init(login, {
        opacity: 0.7,
        dismissible: false
    });

    document.querySelector("#content").style.display = "none";
    document.querySelector("#flayer").classList.add("progress");
    document.querySelector("#slayer").classList.add("indeterminate");

    setTimeout(function () {
        document.querySelector("#flayer").classList.remove("progress");
        document.querySelector("#slayer").classList.remove("indeterminate");
        document.querySelector("#content").style.display = "block";
    }, 3000)
</script>
<script type="text/javascript">
	$(document).ready(function(){
			$("#celular").mask("(99) 99999-9999");
		});
</script>

</body>

</html>

