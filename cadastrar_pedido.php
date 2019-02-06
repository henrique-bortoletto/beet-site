<?php session_start(); ?>
   
<?php 
    require("conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        $titulo = $_GET['titulo'];
        $descricao = $_GET['descricao'];
        $tipos = $_GET['tipo'];
        $idcliente = $_GET['id'];

        if (isset($_GET['tipo'])) {
            $quantidade = count($_GET['tipo']);
            $i = 1;
            $pedido = "";

            foreach ($_GET['tipo'] as $tipos) {
            $separador = "";

                if ($i < $quantidade) {
                    $separador = " - ";
                }
                $pedido = $pedido.$tipos.$separador;
                $i++;
            }
        }
        
        if (!empty($titulo) && !empty($descricao)) {
            $sql = "INSERT INTO pedido VALUES (DEFAULT, '$titulo', '$descricao', '$pedido')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $sql = "SELECT idpedido FROM pedido";
                $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $_SESSION['idpedido'] = $row['idpedido'];
                    }

                    $idpedido = $_SESSION['idpedido'];

                    $sql = "UPDATE cliente SET id_pedido='$idpedido' WHERE idcliente='$idcliente'";
                    $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

                    if ($result) {
                        $_SESSION['sucess'] = "Pedido feito com sucesso. Aguarde nosso contato :)";
                        unset($_SESSION['idpedido']);
                        header("Location: visualizar_pedido.php");
                    } 
                }
            } else {
                
                $_SESSION['erro'] = "Erro ao realizar pedido :(";
                header("Location: pedido_servico.php");
            }   
        } else {
            $_SESSION['erro'] = "Os campos obrigatórios não foram preenchidos :(";
            header("Location: pedido_servico.php");
        }
    }
?>
