<?php
    session_start();
    unset($_SESSION['cuenta']);
    unset($_SESSION['nombre']);
    unset($_SESSION['tipo']);
    session_destroy();
    header('Location: index.php');  //Devuelve a la página anterior.
?>
