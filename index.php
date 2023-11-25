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
    <header id="header">
        <nav>
            <ul class="menu m1">
                <li><a href="index.php">Home</a></li>
                <li><a href="#us">Nosotros</a></li>
            </ul>
            <figure>
                <img src="img/favicon.png" alt="logo de MIM Arquitectura">
            </figure>
            <ul class="menu m2">
                <li><a href="projects.php">Proyectos</a></li>
                <li><a href="contact.php">Cotizar</a></li>
            </ul>
            <i class="fa-solid fa-bars menu__button"></i>
        </nav>
    </header>

    <main>
        <section id="hero" class="mainHero">

            <div class="container">
                <div class="slider">
                    <div class="slider__projects">
                        <div class="slider__projects--project">
                            <figure><img src="img/1b.jpg" alt=""></figure>
                        </div>
                        <div class="slider__projects--project">
                            <figure><img src="img/Acceso.jpg" alt=""></figure>
                        </div>
                        <div class="slider__projects--project">
                            <figure><img src="img/cocina 2.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="buttons">
                        <div>
                            <h4>PROYECTOS</h4>
                            <h4><strong id="project__title">Proyecto Hidalgo</strong></h4>
                        </div>
                        <div class="slider__controls">
                            <div class="button prev__project">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="button next__project">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                        <a href="" class="square__button white"><i>VER</i></a>
                    </div>
                    <a href="" class="square__button white"><i>VER TODOS LOS PROYECTOS</i></a>
                </div>

                <div class="right">
                    <figure class="texture">
                        <img src="img/textura.png" alt="">
                    </figure>
                    <h1>Somos un <strong>Despacho</strong></h1>
                    <p>encargado de responder a las necesidades físicas y sensoriales de nuestros clientes y usuarios
                    </p>
                </div>
            </div>
            <!-- <a href="#us">¿QUIENES SOMOS?</a> -->
        </section>
        <section id="us">

            <div class="container">
                <h4>NOSOTROS</h4>
                <h2>Nuestra <strong>Historia</strong></h2>
                <p>En el año 2016, nuestro punto de partida fue el Diseño y Construcción de una nave indsutrial, despues
                    creamos MiM Arquitectura. Somos un despacho de arquitectos egresados de la facultad de arquitectura,
                    Ciudad Universitaria.</p>
                <!-- <a href="contact.php" class="square__button gray"><i>CONTACTAR</i></a> -->
            </div>
            <figure>
                <img src="img/interiores 1.jpg" alt="">
            </figure>
        </section>
        <section id="services">
            <div class="title">
                <h4>SERVICIOS</h4>
                <h2><strong>Servicios</strong><br> a tu altura.</h2>
            </div>

            <div class="container">
                <div class="service">
                    <h3>Diseño/Proyecto Arquitectónico</h3>
                    <p>Siempre buscando funcionalidad y planteando una manera diferente y creativa de desarrollar el
                        Diseño Residencial, comercial, habitacional</p>
                </div>
                <div class="service">
                    <h3>Proyecto Ejecutivo</h3>
                    <p>Proyectos diseñados de manera elocuente para aterrizar en su construcción</p>
                </div>
                <div class="service">
                    <h3>Obra Civil/Construcción </h3>
                    <p>La construcción es indispensable para nosotros, ya que, es lo que nos ha llevado a crear relación
                        con varias especialidades y contratistas que forman parte de nuestro equipo de trabajo para
                        desarrollar la construcción</p>
                </div>
                <div class="service">
                    <h3>Diseño de Interiores/Acabado</h3>
                    <p>Proyectos enfocados en diseñar espacios especificos a traves de la elección de revestimentos,
                        colores y acabados ya sea residencial o comercial</p>
                </div>
            </div>
            <!-- <div class="services__slider">
                <div class="services__container">
                    <div class="service">
                        <div class="info">
                            <h3>Proyecto Arquitectónico</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium reiciendis dolores
                                rem illum nobis obcaecati magni rerum repudiandae iste.</p>
                        </div>

                        <div class="image">
                            <figure>
                                <img src="img/1b.jpg" alt="">
                            </figure>
                            <div class="foreground">
                                <a href="">Ver</a>
                            </div>
                        </div>

                    </div>
                    <div class="service">
                        <div class="info">
                            <h3>Proyecto Ejecutivo</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium reiciendis dolores
                                rem illum nobis obcaecati magni rerum repudiandae iste.</p>
                        </div>

                        <div class="image">
                            <figure>
                                <img src="img/Acceso.jpg" alt="">
                            </figure>
                            <div class="foreground">
                                <a href="">Ver</a>
                            </div>
                        </div>

                    </div>
                    <div class="service">
                        <div class="info">
                            <h3>Lorem ipsum</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium reiciendis dolores
                                rem illum nobis obcaecati magni rerum repudiandae iste.</p>
                        </div>

                        <div class="image">
                            <figure>
                                <img src="img/cocina 2.jpg" alt="">
                            </figure>
                            <div class="foreground">
                                <a href="">Ver</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slider__controls">
                    <div class="button prev__service">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="button next__service">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div> -->
        </section>
        <section id="contact">
            <h4>CONTACTO</h4>
            <div class="container">
                <div>
                    <h2>Cotiza,<br> <strong>Trabajemos juntos.</strong></h2>
                    <a href="contact.php" class="square__button white"><i>COTIZAR</i></a>
                    
                </div>
                <div>
                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <p>55 4571 1146</p>
                    </div>
                    <div class="mail">
                        <i class="fa-solid fa-envelope"></i>
                        <p>contacto@mim.com.mx</p>
                    </div>
                    <div class="address">
                        <i class="fa-solid fa-location-pin"></i>
                        <p>Tulipan 215. Colonia Jardines de las delicias. Cuernavaca, Morelos 62343 MX</p>
                    </div>
                </div>
            </div>
            <div class="social">
                <a href=""><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </section>
        <div class="whatsapp">
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </main>
    <footer>
        <figure class="texture">
            <img src="img/textura.png" alt="">
        </figure>
        <figure class="logo">
            <img src="img/logo_white.png" alt="logo MiM Arquitectura">
        </figure>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="index.php#us">NOSOTROS</a></li>
            <li><a href="projects.php">PROYECTOS</a></li>
            <li><a href="index.php#services">SERVICIOS</a></li>
        </ul>
        <p>TODOS LOS DERECHOS RESERVADOS</p>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>