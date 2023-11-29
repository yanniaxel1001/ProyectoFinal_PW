<?php

    require("conexion_db.php");
    if (isset($_POST['btn-aceptar'])) {

        $c_confirmacion = $_POST['confirmacion'];
        mysqli_query($conexion, "DELETE FROM usuarios WHERE password_usuario = '$c_confirmacion'");
        $_SESSION = [];
        session_unset();
        session_destroy();
        header("Location: index.php");
    }
?>