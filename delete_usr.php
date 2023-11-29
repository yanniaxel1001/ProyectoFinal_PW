<?php

    require("conexion_db.php");
    if (isset($_POST['btn-aceptar'])) {
        $email = $_POST['email_usuario'];
        mysqli_query($conexion, "DELETE FROM usuarios WHERE email_usuario = '$email'");
        $_SESSION = [];
        session_unset();
        session_destroy();
        header("Location: index.php");
    }
?>