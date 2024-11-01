<?php
    Class Usuario
    {
        private $pdo;
        
        public $msgError = "";

        public function conectar($nome, $host, $usuario, $senha)
        {
            global $pdo;

            try
            {
                $pdo = new PDO("mysql:dbname=".$nome, $usuario, $senha);
            }
            catch(PDOExeption $erro)
            {
                $msgError = $error->getMenssage();
            }
        }

        public function cadastrar($nome, $telefone, $email, $senha)
        {

            global $pdo;

            //verificar se o email ja esta cadastrado
            $sql = $pdo->prepare("SELECT id_usuario from usuario WHERE email = :maria"); //:maria significa que colocamos um apelido na variavel email do PHP
            $sql->bindValue(":maria",$email);
            $sql->execute();

            //verificar se existe um email cadastrado
            if($sql->rowCount() > 0)
            {
                return false;
            }
            else
            {
                //verificar usuario
                $sql = $pdo->prepare("INSERT INTO usuario (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
                $sql->bindValue(":n",$nome);
                $sql->bindValue(":t",$telefone);
                $sql->bindValue(":e",$email);
                $sql->bindValue(":s",$senha);
                $sql->execute();
                return true;
            }
        }


    }


?>