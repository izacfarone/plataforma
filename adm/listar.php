<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista Usuarios</title>
    </head>
    <body>
        <h1>Listar Cadastro</h1>

        <div class="row">
            <div class="col l3 m3 s12"></div>
            <div class="col l6 m6 s12">
                 <?php
                require './Conn.php';

                $conn = new Conn();
                $result_user = "SELECT * FROM usuario";

                $resultado_user = $conn->getConn()->prepare($result_user);
                $resultado_user->execute();

                while ($row_user = $resultado_user->fetch(PDO::FETCH_ASSOC)):
                    echo "ID: " . $row_user['id'] . "<br>";
                    echo "Nome: " . $row_user['nome'] . "<br>";
                    echo "Inserido: " . date('d/m/Y H:i:s', strtotime($row_user['created'])) . "<br>";
                    if (!empty($row_user['modified'])):
                        echo "Alterado: " . date('d/m/Y H:i:s', strtotime($row_user['modified'])) . "<br>";
                    endif;
                    echo "<a href='visualizar1.php?id=" . $row_user['id'] . "'>Visualizar</a>"."<br>";
                    echo "<a href='editar.php?id=" . $row_user['id'] . "'>Editar</a>";
                    echo "<hr>";
                endwhile;
                ?>
            </div>
        </div>

               
                </body>
                </html>
