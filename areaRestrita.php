<?php
    require_once 'usuario.php';
    $usuario = new Usuario();
    $usuario->conectar("cadastrousuarioturma33", "localhost", "root", "");
    $dados = $usuario->listarUsuarios();
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Dados</title>
</head>
<body>
    <h1>Listar Usuários</h1>
    <table border=1>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($dados))
                {
                    foreach ($dados as $pessoa):
                ?>
                    <tr>
                        <td><?php echo $pessoa['nome'];?></td>
                        <td><?php echo $pessoa['email'];?></td>
                        <td><?php echo $pessoa['telefone'];?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $pessoa['id_usuario']; ?>">Editar</a>
                        </td>

                        <td>
                            <a href="delete.php?id=<?php echo $pessoa['id_usuario']; ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach;
                }
                else
                {
                    echo "Nenhum Usuário Cadastrado.";
                }
            ?>
        </tbody>
    </table>
</body>
</html>