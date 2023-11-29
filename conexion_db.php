<?php
    $host_db = "localhost:3306";
    $user_db = "root";
    $pass_db = "";
    $db_name = "stylehub";

    $conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

    if($conexion->connect_error){
        echo"<h1>MySQL no te está dando permisos para ejecutar las consultas</h1>";
    }
    
?>