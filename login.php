<?php

    require("conexion_db.php");
    if (isset($_POST['btn-aceptar'])) {
        
        $email = $_POST['email_usuario'];
        $pass = $_POST['pass_usuario'];
        $resultado = mysqli_query($conexion, "SELECT * FROM usuarios where email_usuario = '$email'");
        $row = mysqli_fetch_assoc($resultado);

        if (mysqli_num_rows($resultado) > 0) {
            if ($pass == $row["password_usuario"]) {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                echo '
                    <script>
                        alert("Usuario logeado exitosamente");
                        window.location = "user_logeado.php";
                    </script>';
            }else {
                echo "<script> alert('Contrasena Equivocada');
                    window.location = 'login_page.php';
                </script>";
            }
        }else {
            echo "<script> alert('Usuario no registrado');
                window.location = 'login_page.php';
            </script>";
        }
    }
?>