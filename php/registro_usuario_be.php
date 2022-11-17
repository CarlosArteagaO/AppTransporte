<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $pais = $_POST['pais'];
    $ciudad = $_POST['ciudad'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    //encriptamiento de contraseña

    $contrasena = hash('sha512', $contrasena);
    $confirmar_contrasena = hash('sha512', $confirmar_contrasena);

    
    $query = "INSERT INTO usuarios(nombre_completo,correo,pais,ciudad,contrasena,confirmar_contrasena) 
    VALUES ('$nombre_completo','$correo','$pais','$ciudad','$contrasena','$confirmar_contrasena')";

    //Verificar que el correo no se repita en la base de datos

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if (mysqli_num_rows($verificar_correo) > 0 ){
        echo '
            <script>
                alert("Este correo ya esta registadro, por favor intente con otro");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '<script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "../index.php";
            </script>
        ';
    }

mysqli_close($conexion);

?>