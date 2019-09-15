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
    <body >   
        
        <?php
        require './conn.php';
        $conn = new Conn();
        $conn->getConn();
        
        $nome = "Izac Farone";
        $email = "izacfaronedoctum@gmail.com";
        $senha = "25052015";
        
        try {
           $result_cadastrar= "INSERT INTO usuario (nome, email, senha, created) VALUES (:nome, :email, :senha, NOW())";
           $cadastrar = $conn->getConn()->prepare($result_cadastrar);
           
           $cadastrar->bindParam(':nome', $nome, PDO::PARAM_STR);
           $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
           $cadastrar->bindParam(':senha', $senha, PDO::PARAM_STR);
           
           $cadastrar->execute();
           
           if($cadastrar->rowCount()):
               echo 'Cadastrado com Sucesso';
           endif;
           
        } catch (Exception $ex) {
            
        }
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
              <li><a href="badges.html">Adote</a></li>
              <li><a href="sass.html">Doe</a></li>
              <li><a href="historias.html">Histórias</a></li>
              <li><a href="fale_conosco.html">Fale Conosco</a></li>
              <li><a href="quem_somos_nos.html">Quem somos nós</a></li>
              <li><a href="login.html">Login</a></li>
            </ul>
          </div>
          </div>
        </nav>
    </header>

    <!-- SLIDER -->
    <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/cao_e_gato.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>Aqui somos todos uma família!</h3>
              <h5 class="light grey-text text-lighten-3">A família Amemais.</h5>
            </div>
          </li>
          <li>
            <img src="img/gato.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>Left Aligned Caption</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="img/Animais-para-serem-adotados-Cláudio-Lahos-16.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>Venha nos visitar</h3>
              <h5 class="light grey-text text-lighten-3">Agende uma visita e conheça um pouco mais sobre a .</h5>
            </div>
          </li>
          <li>
            <img src="img/abandonado.JPG"> <!-- random image -->
            <div class="caption center-align">
              <h3>Abandono é crime!</h3>
              <h5 class="light grey-text text-lighten-3">Encontrou um animal abandonado? Entre em contato!!!</h5>
            </div>
          </li>
        </ul>
      </div>

      <!-- CONTEUDO -->
      <div class="row container">

        <!-- NOTICAS -->
        <section class=" col s12 m6 l9">
          <h5 class="light"> Últimas noticias </h5>

          <article class="col s12 l6 xl4">
            <div class="card">
              <div class="card-image">
                 <img src="img/banner.jpg">                 
               </div>
               <div class="card-content">
                 <span class="card-title">Card Title</span>
                 <p>I am a very simple card. I am good at containing small bits of information.
                 I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                   <a href="#">This is a link</a>
                </div>
            </div>
          </article>

            <article class="col s12 l6 xl4">
            <div class="card">
              <div class="card-image">
                 <img src="img/banner.jpg">                 
               </div>
               <div class="card-content">
                 <span class="card-title">Card Title</span>
                 <p>I am a very simple card. I am good at containing small bits of information.
                 I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                   <a href="#">This is a link</a>
                </div>
            </div>
          </article>

           <article class="col s12 l6 xl4">
            <div class="card">
              <div class="card-image">
                 <img src="img/banner.jpg">                 
               </div>
               <div class="card-content">
                 <span class="card-title">Card Title</span>
                 <p>I am a very simple card. I am good at containing small bits of information.
                 I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                   <a href="#">This is a link</a>
                </div>
            </div>
          </article>

          <article class="col s12 l6 xl4">
            <div class="card">
              <div class="card-image">
                 <img src="img/banner.jpg">                 
               </div>
               <div class="card-content">
                 <span class="card-title">Card Title</span>
                 <p>I am a very simple card. I am good at containing small bits of information.
                 I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                   <a href="#">This is a link</a>
                </div>
            </div>
          </article>

            <article class="col s12 l6 xl4">
            <div class="card">
              <div class="card-image">
                 <img src="img/banner.jpg">                 
               </div>
               <div class="card-content">
                 <span class="card-title">Card Title</span>
                 <p>I am a very simple card. I am good at containing small bits of information.
                 I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                   <a href="#">This is a link</a>
                </div>
            </div>
          </article>

           <article class="col s12 l6 xl4">
            <div class="card">
              <div class="card-image">
                 <img src="img/banner.jpg">                 
               </div>
               <div class="card-content">
                 <span class="card-title">Card Title</span>
                 <p>I am a very simple card. I am good at containing small bits of information.
                 I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                   <a href="#">This is a link</a>
                </div>
            </div>
          </article>
        </section>


        <!-- SIDEBAR -->
        <aside class="col s12 m6 l3">
        <h5 class="light"> Mais lidas </h5>
        <ul class="collection">
            <li class="collection-item avatar">
              <img src="img/user.jpg" alt="" class="circle">
              <span class="title">Title</span>
              <p>First Line <br>
                 Second Line
              </p>
              <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
              <i class="material-icons circle">folder</i>
              <span class="title">Title</span>
              <p>First Line <br>
                 Second Line
              </p>
              <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
              <i class="material-icons circle green">insert_chart</i>
              <span class="title">Title</span>
              <p>First Line <br>
                 Second Line
              </p>
              <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
            <li class="collection-item avatar">
              <i class="material-icons circle red">play_arrow</i>
              <span class="title">Title</span>
              <p>First Line <br>
                 Second Line
              </p>
              <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
          </ul>

          <h5 class="light">Sobre o autor</h5>
          <div class="card blue center">
                     <div class="card-content white-text">
                       <img width="100" src="img/user.jpg" class="circle responsive-img">
                       <p>I am a very simple card. I am good at containing small bits of information.
                       I am convenient because I require little markup to use effectively.</p>
                     </div>                    
                   </div>
        </aside>
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
    $(document).ready(function(){
       // BOTÃO MENU
       $(".button-collapse").sideNav(); 
       // SLIDER
       $('.slider').slider();     
    });  
    </script> 

    </body>
  </html>
