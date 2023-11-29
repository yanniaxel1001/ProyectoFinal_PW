<?php
    include("conexion_db.php");

    if (isset($_POST['btn-aceptar'])) {
        if (strlen($_POST['email_usuario']) >= 1 &&
        strlen($_POST['pass_usuario']) >= 1) {
            $email = $_POST['email_usuario'];
            $pass = $_POST['pass_usuario'];

            $consulta = "SELECT * FROM usuarios WHERE email_usuario = '$email'
            and password_usuario = '$pass'";

            $resultado = mysqli_query($conexion, $consulta);
            if ($resultado){
                echo '
                    <script>
                        alert("Usuario logeado correctamente");
                        window.location = "user_logeado.php";
                    </script>';
            }else {
                echo '
                    <script>
                        alert("Datos incorrectos");
                        window.location = "login_page.php";
                    </script>';
            }
        }    
    }
    mysqli_close($conexion);
?>