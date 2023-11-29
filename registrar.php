<?php
    require("conexion_db.php");

    if (isset($_POST['btn-guardar'])) {
        
        $nombre = $_POST['nombre_usuario'];
        $apellido = $_POST['apellido_usuario'];
        $edad = $_POST['edad_usuario'];
        $email = $_POST['email_usuario'];
        $pass = $_POST['pass_usuario'];
        $duplicate = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email_usuario = '$email'");

        if (mysqli_num_rows($duplicate) > 0) {
            echo
            "<script>
                alert('El email ya ha sido tomado');
            </script>";
        }else {
            $consulta = "INSERT INTO usuarios VALUES ('', '$nombre', '$apellido', '$edad', '$email', '$pass')";

            mysqli_query($conexion, $consulta);
                echo '
                    <script>
                        alert("Usuario registrado exitosamente");
                        window.location = "user_logeado.php";
                    </script>';
        }
    }

?>