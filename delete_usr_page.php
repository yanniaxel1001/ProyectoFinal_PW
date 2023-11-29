<?php

    require("conexion_db.php");
    if (!empty($_SESSION["id"])) {
        $id = $_SESSION["id"];
        $resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = $id");
        $row = mysqli_fetch_assoc($resultado);
    }else {
        header("Location: login_page.php");
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
                    <h6>¿Estas seguro?</h6>
                </div>
                <div class="center-align">
                    <br>
                    <form action="delete_usr.php" method="POST">
                        <input type="confirmacion" id="confirmacion" name="confirmacion" required placeholder="Ingresa tu contraseña">
                        <div class="center-align">
                        <button class="btn red" type="submit" name="btn-aceptar">Aceptar</button>
                        </div>
                    </form>
                    <a href="user_logeado.php" class="btn">Cancelar</a>
                </div>
            </div>
        </div>
    </div>