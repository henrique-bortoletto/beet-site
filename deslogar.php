<?php
    session_start();

    if (isset($_SESSION['logado']))      { unset($_SESSION['logado']);      }
    if (isset($_SESSION['idcliente']))   { unset($_SESSION['idcliente']);   }
    if (isset($_SESSION['nomeusuario'])) { unset($_SESSION['nomeusuario']); }
 
    session_destroy();
    header("Location: index.php");
?>