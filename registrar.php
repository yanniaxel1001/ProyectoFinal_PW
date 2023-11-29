<?php
    include("conexion_db.php");

    if (isset($_POST['btn-guardar'])) {
        if (strlen($_POST['nombre_usuario']) >= 1 &&
        strlen($_POST['apellido_usuario']) >= 1 &&
        strlen($_POST['edad_usuario']) >= 1 &&
        strlen($_POST['email_usuario']) >= 1 &&
        strlen($_POST['pass_usuario']) >= 1) {
            $nombre = trim($_POST['nombre_usuario']);
            $apellido = trim($_POST['apellido_usuario']);
            $edad = trim($_POST['edad_usuario']);
            $email = trim($_POST['email_usuario']);
            $pass = trim($_POST['pass_usuario']);

            $consulta = "INSERT INTO usuarios(nombre_usuario, apellido_usuario, edad_usuario, email_usuario, password_usuario)
            VALUES ('$nombre', '$apellido', '$edad', '$email', '$pass')";

            $resultado = mysqli_query($conexion, $consulta);
            if ($resultado){
                echo '
                    <script>
                        alert("Usuario registrado exitosamente");
                        window.location = "user_logeado.php";
                    </script>';
            }
        }    
    }

    mysqli_close($conexion);
?>