<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muevete</title>
    <link rel="stylesheet" href="../Login-register/assets/css/estilos2.css">
    <link rel="stylesheet" href="../Login-register/assets/css/fontello.css">
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Open+Sans:wght@300;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <div class="contenedor">
            <div class="contenedor__logo">
                <img src="../Login-register/assets/img/imagen4.png" alt="">
            </div>
            <input type="checkbox" id="menu-bar" placeholder="1">
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="">Inicio</a>
                <a href="">Buscar</a>  
                <a href="">Soporte</a>
                <a herf="">Contacto</a>          
            </nav>
        </div>
    </header>

    <main>
        <section id="banner">
            <video muted autoplay loop>
                <source src="../Login-register/assets/img/carretera.mp4" type="video/mp4">
            </video>
            <div class="contenedor_text">
                <h2>Encuentra lo que necesitas aqui</h2>
                <p>Tenemos las mejores opciones y tarifas para ti</p>
            </div>
        </section>

        <section id="bienvenidos">
            <h2>Bienvenidos</h2>
            <br>
            <p>Registra tu vehiculo y comienza a generar ingresos <br>
            conduciendo en tu tiempo libre.</p>
        </section>

        <section id="blog">
            <div class="contenedor">
                <article>
                    <a class="registro"><b>Registro conductor</b></a>
                    <img src="../Login-register/assets/img/conductor.jpg" alt="">
                    <button onclick="location.href='//localhost/login-register/formulario.php'"><b>Ver mas</b></button>
                </article>
                <article>
                    <a class="programa"><b>Programa tu viaje</b></a>
                    <img src="../Login-register/assets/img/pasajero.jpg" alt="">
                    <button onclick="location.href='//localhost/login-register/formulario2.php'"><b>Ver mas</b></button>
                </article>
                <article>
                    <a class="soporte"><b>Soporte 24/7</b></a>
                    <img src="../Login-register/assets/img/soporte.jpg" alt="">
                    <button onclick="location.href='//localhost/login-register/formulario3.php'"><b>Ver mas</b></button>
                </article>
            </div>
        </section>
        <section id="info">
            <h3>Conoce las experiencias de nuestros clientes y conductores</h3>
            <div class="contenedor">
                <div class="info-pet">
                    <img src="../Login-register/assets/img/hombre1.jpg" alt="">
                    <h4>Jimmy</h4>
                    <p>"Trabajar en mis tiempos libres me ayuda <br>
                    para tener mas tiempo en la universidad"</p>
                </div>
                <div class="info-pet">
                    <img src="../Login-register/assets/img/mujer1.jpg" alt="">
                    <h4>Cristina</h4>
                    <p>"Puedo trabajar durante el tiempo que estime <br>
                        ¡No tengo jefes!"</p>
                </div>
                <div class="info-pet">
                    <img src="../Login-register/assets/img/hombre2.jpg" alt="">
                    <h4>Andres</h4>
                    <p>"Usando <b>Muevete</b> tengo la tranquilidad <br>
                    de encontrar un auto cuando lo necesito"</p>
                </div>
                <div class="info-pet">
                    <img src="../Login-register/assets/img/mujer2.jpg" alt="">
                    <h4>Helena</h4>
                    <p>"Me despedi de los taxis y colectivos, <br>
                        cambiate tu tambien a <b>Muevete</b>."</p>
                </div>
            </div>
        </section>
    </main>

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