<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Materialize </title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
        <link rel="stylesheet" href="css/custom.css">

    </head>
    <body>

        <ul id="slide-out" class="side-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Contatos</a></li>
        </ul>
        
        <a class="btn" data-activates="slide-out"><i class="material-icons">menu</i></a>


        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Materialize JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

        <script>
           document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.btn');
    var instances = M.Sidenav.init(elems, options);
  });


  $(document).ready(function(){
    $('.bnt').sidenav();
  });
        </script>
    </body>
</html>

