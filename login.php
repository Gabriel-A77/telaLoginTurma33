<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
</head>
<body>
    <h2>TELA LOGIN</h2>
    <form action="" method="post">
        <label>Usuário:</label>
        <input type="email" name="email" id="" placeholder="Digite Seu Email"><br><br>
        <label>Senha:</label>
        <input type="password" name="senha" id="" placeholder=**********><br><br>
        <input type="submit" value="LOGAR"><br>
        <a href="cadastro.php">INSCREVA-SE</a>
    </form>

    <?php
        if(isset($_POST['email']))
        {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if(!empty($email) && !empty($senha))
            {
                $usuario->conectar("cadastrousuarioturma33", "localhost", "root", "");
                if($usuario->msgError =="")
                {
                    if($usuario->logar($email, $senha))
                    {
                        header("location: areaRestrita.php");
                    }
                    else
                    {
                        ?>
                        <div class="msg-erro">
                            <p>Email E/Ou Senha Incorretos.</p>
                        </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <div class="msg-erro">
                        <?php echo "Erro: ".$usuario->msgErro; ?>
                    </div>
                    <?php
                }
            }
            else
            {
                ?>
                <div class="msg-erro">
                    <p>Preencha Todos Os Campos</p>
                </div>
                <?php
            }
        }
    ?>

</body>
</html>