<?php

    include 'conexion_be.php';

    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $comuna = $_POST['comuna'];
    $costo = $_POST['costo'];
    $capacidad = $_POST['capacidad'];
    $horario = $_POST['horario'];


    $query = "INSERT INTO registro_vehiculos(marca,modelo,comuna,costo,capacidad,horario) 
            VALUES ('$marca','$modelo','$comuna','$costo','$capacidad','$horario')";

    //Verificar que el correo no se repita en la base de datos

    /*$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if (mysqli_num_rows($verificar_correo) > 0 ){
        echo '
            <script>
                alert("Este correo ya esta registadro, por favor intente con otro");
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
                alert("Vehiculo almacenado exitosamente");
                window.location = "../bienvenida.php";
            </script>
        ';
    }else{
        echo '<script>
            alert("Intentalo de nuevo, vehiculo no almacenado");
            window.location = "../bienvenida.php";
            </script>
        ';
    }

mysqli_close($conexion);
