<?php session_start(); ?>

<?php 
    require("conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        
        $sql = "SELECT idcliente, nomeusuario, email, senha FROM cliente WHERE nomeusuario='$usuario' OR email='$usuario' AND senha='$senha' LIMIT 1";
        $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
        $res_usuario = mysqli_num_rows($result);
        
        if ($res_usuario) {
             while($row = mysqli_fetch_assoc($result)) {
                 $_SESSION['idcliente'] = $row['idcliente'];
                 $_SESSION['nomeusuario'] = $row['nomeusuario'];
                 $_SESSION['email'] = $row['email'];
             }
            $_SESSION['logado'] = true;
            header("Location: index.php");
        } else {
            $_SESSION['erro'] = "Usuario não encontrado  :(";
            header("Location: logar.php");
        }   
    }
?>