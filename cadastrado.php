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
       
       <!--INÍCIO DE INSERCÃO NO BANCO DE DADOS-->
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
           echo "Cadastrado com sucesso";
           endif;
           
           
        } catch (Exception $ex) {
            
        }
        ?>
       <!--FIM DE INSERCÃO NO BANCO DE DADOS-->

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
    </body>

</html>