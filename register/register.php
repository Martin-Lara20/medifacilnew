<?php
    include("../conexion.php");

    if (isset($_POST['register'])) {
        if (strlen($_POST['nombre']) >= 1 || strlen($_POST['edad']) >= 1 || strlen($_POST['genero']) >= 1 || strlen($_POST['email']) >= 1) 
        {
            $nombre = trim($_POST['nombre']);
            $edad = trim($_POST['edad']);
            $genero = trim($_POST['genero']);
            $email = trim($_POST['email']);
            $consulta = "INSERT INTO user(nombre, edad, genero, email) VALUES ('$nombre', '$edad', '$genero','$email')";
            $resultado = mysqli_query($link,$consulta);
            if ($resultado = true) {
                ?> 
                <h3 class="ok">¡Te has inscripto correctamente!</h3>
               <?php
            } else {
                ?> 
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
               <?php
            }
        } else {
                ?> 
                <h3 class="bad">¡Por favor complete los campos!</h3>
               <?php
            }
    }
?>