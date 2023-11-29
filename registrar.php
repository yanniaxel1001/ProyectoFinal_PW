<?php
    include("conexion_db.php");

    $nombre = trim($_POST['nombre_usuario']);
    $apellido = trim($_POST['apellido_usuario']);
    $edad = trim($_POST['edad_usuario']);
    $email = trim($_POST['email_usuario']);
    $pass = trim($_POST['pass_usuario']);

    $consulta = "INSERT INTO usuarios(nombre_usuario, apellido_usuario, edad_usuario, email_usuario, password_usuario)
    VALUES ('$nombre', '$apellido', '$edad', '$email', '$pass')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header("location: /ProyectoFinal_PW/");
?>