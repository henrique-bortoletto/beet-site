<?php session_start(); ?>

<?php
    include("conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $usuario = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        $rsenha = filter_input(INPUT_POST, 'r_senha', FILTER_SANITIZE_STRING);
        
        if ($senha != $rsenha) {
            $_SESSION['erro'] = "Senhas não são iguais :(";
            header("Location: criar_conta.php");
        } else {
            $sql = "INSERT INTO cliente VALUES (DEFAULT, '$usuario', '$email', '$senha', NOW(), NULL, 2, NULL)";
            $result = mysqli_query($conn, $sql);
            $res_insert = mysqli_affected_rows($conn);
            
            if ($res_insert) {
                 $_SESSION['sucess'] = "Cadastro feito com sucesso :)";
                 header("Location: logar.php");
            } else {
                $_SESSION['erro'] = "Erro ao cadastrar :(";
                header("Location: logar.php");
            }
        }
    }
?>