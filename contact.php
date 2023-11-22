<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" media="(prefers-color-scheme: light)">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" media="(prefers-color-scheme: dark)">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <title>MIM Arquitectura</title>
</head>

<body>
    <header>
        <nav>
            <ul class="menu m1">
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html#us">Nosotros</a></li>
            </ul>
            <figure>
                <img src="img/logo_white.png" alt="logo de MIM Arquitectura">
            </figure>
            <ul class="menu m2">
                <li><a href="projects.html">Proyectos</a></li>
                <li><a href="contact.html">Cotizar</a></li>
            </ul>
            <i class="fa-solid fa-bars menu__button"></i>
        </nav>
    </header>

    <main id="contact_page">
        <section id="hero">
           
            <div class="container">

                <div class="right">
                    <figure class="texture">
                        <img src="img/textura.png" alt="">
                    </figure>
                    <h4>CONTACTO</h4>
                    <h2>Da el primer paso, <br>
                        <strong>En manos de expertos.</strong>
                    </h2>
                </div>
                <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Tulipan%20215.%20Colonia%20Jardines%20de%20las%20delicias.%20Cuernavaca,%20Morelos%2062343%20MX+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe>
            </div>
        </section>
        
        <section id="contact_form">
            <h4>FORMULARIO</h4>
            <form action="">
                <input type="text" name="name" id="name" placeholder="NOMBRE Y APELLIDO">
                <input type="tel" name="phone" id="phone" placeholder="TELÉFONO">
                <input type="email" name="mail" id="mail" placeholder="CORREO ELECTRÓNICO">
                <input type="text" name="city" id="city" placeholder="CIUDAD">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="MENSAJE"></textarea>
                <div>
                    <input type="text" placeholder="TAMAÑO DE SUPERFICIE EN M2">
                    <textarea name="" id="" cols="30" rows="10" placeholder="TAMAÑO DE SUPERFICIE EN M2"></textarea>
                </div>
                <a href="" class="square__button gray" type="submit"><i>Enviar</i></a>
            </form>
        </section>
        <section id="contact">
            <h4>CONTACTO</h4>
            <div>
                <h2>Cotiza,<br> <strong>Trabajemos juntos.</strong></h2>
                <a href="" class="square__button white"><i>COTIZAR</i></a>
            </div>
            <div>
                <div class="phone">
                    <h4>TELÉFONO</h4>
                    <p>55 4571 1146</p>
                </div>
                <div class="mail">
                    <h4>CORREO</h4>
                    <p>contacto@mim.com.mx</p>
                </div>
                <div class="address">
                    <h4>PROYECTOS</h4>
                    <p>Tulipan 215. Colonia Jardines de las delicias. Cuernavaca, Morelos 62343 MX</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <figure class="texture">
            <img src="img/textura.png" alt="">
        </figure>
        <figure class="logo">
            <img src="img/logo_white.png" alt="logo MiM Arquitectura">
        </figure>
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="index.html#us">NOSOTROS</a></li>
            <li><a href="projects.html">PROYECTOS</a></li>
            <li><a href="index.html#services">SERVICIOS</a></li>
        </ul>
        <p>TODOS LOS DERECHOS RESERVADOS</p>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>