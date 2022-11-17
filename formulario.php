<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../Login-register/assets/css/style.for.css">
  <link rel="stylesheet" href="../Login-register/assets/css/fontello.css">

  <title>Formulario Registro</title>
</head>
<body>
  <section>
  <form action="php/registro_vehiculo_be.php" method="POST" class="form-register">
    <h4>Ingresa los datos de tu vehiculo</h4>
    <input class="controls" type="text" name="marca" id="marca" placeholder="Marca del vehiculo" required>
    <input class="controls" type="text" name="modelo" id="modelo" placeholder="Modelo del vehiculo" required>
    <input class="controls" type="text" name="comuna" id="comuna" placeholder="¿En que comuna quieres manejar?" required>
    <input class="controls" type="text" name="costo" id="costo" placeholder="Valor de costo por km" required>
    <input class="controls" type="number" name="capacidad" id="capacidad" placeholder="Capacidad de pasajeros" required>
    <input class="controls" type="text" name="horario" id="horario" placeholder="Selecciona una jornada" required>
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    <div class="selector">
    <input class="botons" type="checkbox" name="selector" alt="" placeholder="chek" required>
    </div>
    <input class="botons" type="submit" value="Registrar" placeholder="regitrar" required>
  </form>
</section>

  <footer>
    <div class="contenedor">
        <p class="copy">Muevete &copy; 2022</p>
        <div class="sociales">
            <a class="icon-facebook-squared" href="#"></a>
            <a class="icon-instagram" href="#"></a>
            <a class="icon-twitter" href="#"></a>
            <a class="icon-gplus" href="#"></a>
        </div>
    </div>
</footer>

</body>
</html>