<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <h1>Editar Usuário </h1>
        <?php
        require './conn.php';
        $conn = new Conn();

        //Editar usuario
        $Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty(($Dados['SendEditUser']))):
            unset($Dados['SendEditUser']);
            $result_up_user = "UPDATE usuario SET nome=:nome, email=:email, celular:=celular, "
                    . "usuario=:usuario senha=:senha, modified=NOW() WHERE id=:";
            $resultado_up_user = $conn->getConn()->prepare($result_up_user);
            $resultado_up_user->bindParam(':nome', $Dados['nome']);
            $resultado_up_user->bindParam(':email', $Dados['email']);
            $resultado_up_user->bindParam(':celular', $Dados['celular']);
            $resultado_up_user->bindParam(':usuario', $Dados['usuario']);
            $resultado_up_user->bindParam(':senha', $Dados['senha']);
            $resultado_up_user->bindParam(':id', $Dados['id']);

            $resultado_up_user->execute();
        endif;

        //Pesquisando os dados do usuario
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
        $limit = 1;
        $result_user = "SELECT * FROM usuario WHERE id=:id LIMIT :limit";
        $resultado_user = $conn->getConn()->prepare($result_user);
        $resultado_user->bindParam(':id', $id, PDO::PARAM_INT);
        $resultado_user->bindParam(':limit', $limit, PDO::PARAM_INT);

        $resultado_user->execute();

        $row_user = $resultado_user->fetch(PDO::FETCH_ASSOC);
        ?>

        <form name="editar" action="" method="POST">
            <div class="card-panel z-depth-5">

                <input type="hidden" name="id" value="<?php echo $row_user['id']; ?>">
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" class="validate" value="<?php echo $row_user['nome']; ?>">
                    <label>Nome Completo</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" class="validate" maxlength=30
                           value="<?php echo $row_user['email']; ?>">
                    <label>E-mail</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">perm_phone_msg</i>
                    <input type="text" name="celular" class="validate" maxlength=30
                           value="<?php echo $row_user['celular']; ?>">>
                    <label>Celular</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input type="text" name="usuario" class="validate" maxlength=30
                           value="<?php echo $row_user['usuario']; ?>">>
                    <label>Usuario</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="senha" class="validate" maxlength=16>
                    <label>Insira Senha (máximo 16 caracteres)</label>
                </div>



                <input type="submit" name="SendEditUser" value="Editar" class="btn left col s12 blue">

                <div class="clearfix"></div>
            </div>
        </form>

    </body>
</html>
