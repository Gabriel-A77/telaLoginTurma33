<?php
    require_once 'usuario.php';

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $usuario = new Usuario();
        $usuario->conectar("cadastrousuarioturma33","localhost","root","");

        $sqlSelect = "DELETE FROM usuarios WHERE id_usuario=$id";

        $usuario->excluirUsuario($id);

        header('Location: areaRestrita.php');
    }
    else
    {
        echo 'ID do Usuário não Fornecido';
    }
?>