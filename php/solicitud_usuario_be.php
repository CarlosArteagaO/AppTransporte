<?php

    include 'conexion_be.php';

    $tipo = $_POST['tipo'];
    $modelo = $_POST['modelo'];
    $capacidad = $_POST['capacidad'];
    $comuna = $_POST['comuna'];
    $capacidad = $_POST['inicio'];
    $horario = $_POST['final'];


    $query = "INSERT INTO solicitud_usuario(tipo,modelo,capacidad,comuna,inicio,final) 
            VALUES ('$tipo','$modelo','$capacidad','$comuna','$inicio','$final')";

    //Verificar que el correo no se repita en la base de datos

    /*$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if (mysqli_num_rows($verificar_correo) > 0 ){
        echo '
            <script>
                alert("Solicitud no ingresada, por favor intente nuevamente");
                window.location = "../bienvenida.php";
            </script>
        ';
        exit();
    }
    */

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Solicitud realizada exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '<script>
            alert("Intentalo de nuevo, solicitud no registrada");
            window.location = "../index.php";
            </script>
        ';
    }

mysqli_close($conexion);