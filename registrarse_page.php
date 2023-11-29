<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Registro</title>

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
        <div class="col s12 l4 offset-l2">
            <div class="card-panel center-align">
                <h6>Registrate</h6>
                <img src="imagenes/img_chica_ropa.png" alt="" class="responsive-img">
            </div>
        </div>
        <div class="col s12 l4 ">
            <div class="card-panel">
                <form action="registrar.php" method="POST">
    
                    <label for="nombre_usuario">Nombre(s):</label>
                    <input type="text" id="nombre_usuario" name="nombre_usuario" required>
            
                    <label for="apellido_usuario">Apellidos:</label>
                    <input type="text" id="apellido_usuario" name="apellido_usuario" required>
            
                    <label for="edad_usuario">Edad:</label>
                    <input type="number" id="edad_usuario" name="edad_usuario" required>
            
                    <label for="email_usuario">Email:</label>
                    <input type="email" id="email_usuario" name="email_usuario" required>
            
                    <label for="pass_usuario">Contraseña:</label>
                    <input type="password" id="pass_usuario" name="pass_usuario" required>
            
                    <div class="center-align">
                        <button class="btn" type="submit" name="btn-guardar">Guardar</button>
                    </div>
                    <div class="center-align">
                        <a href="login_page.php">¿Ya tienes cuenta?</a>
                    </div>
                    <div class="center-align">
                        <br>
                        <a href="index.php">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        include("registrar.php");

    ?>

</body>
</html>