<?php

    require("conexion_db.php");
    if (!empty($_SESSION["id"])) {
        header("Location: user_logeado.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StyleHub</title>

    <link rel="icon" type="image/jpg" href="imagenes/logo_web_page.png"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <style>
        .registrar{
            margin-top: 70px;
        }

        h6 {
            font-size: 30px;
        }

    </style>
</head>
<body class="deep-purple lighten-3">
    <div class="row registrar">
        <div class="col s12 l4 offset-l4">
            <div class="card-panel">
                <div class="center-align">
                    <h6>Iniciar Sesion</h6>
                </div>
                <form action="login.php" method="POST">
                    <label for="email_usuario">Email:</label>
                    <input type="email" id="email_usuario" name="email_usuario" required>
            
                    <label for="pass_usuario">Contraseña:</label>
                    <input type="password" id="pass_usuario" name="pass_usuario" required>
                    
                    <div class="center-align">
                        <button class="btn" type="submit" name="btn-aceptar">Aceptar</button>
                    </div>
                    <br>
                    <div class="center-align">
                        <a href="registrarse_page.php">¿No tienes cuenta?</a>
                    </div>
                    <div class="center-align">
                        <br>
                        <a href="index.php">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>