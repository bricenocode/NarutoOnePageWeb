<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naruto Shippuden</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="icon" href="../assets/img/icono.png">
</head>

<body>

    <!--Seccion del menu de navegacion-->

    <nav class="nav" id="nav">
        <ul class="nav nav__list">
            <li class="nav__item"><a href="#main-header" class="nav__link">INICIO</a></li>
            <li class="nav__item"><a href="#personajesPrincipales" class="nav__link">PERSONAJES PRINCIPALES</a></li>
            <li class="nav__item"><a href="#historia" class="nav__link">HISTORIA</a></li>
            <li class="nav__item"><a href="#jutsustecnicas" class="nav__link">JUTSUS Y TÉCNICAS</a></li>
            <li class="nav__item"><a href="#aldealocalizacion" class="nav__link">ALDEAS Y LOCALIZACIONES</a></li>
            <li class="nav__item"><a href="#galeria" class="nav__link">GALERIA</a></li>
        </ul>
    </nav>
    <!--Seccion de bienvenida a la página-->

    <header class="main-header" id="main-header">
        <div class="container">
            <img src="https://i.ebayimg.com/images/g/C4QAAOSwrPJhsUos/s-l1600.png" alt="Logo de naruto"
                class="main-header logo">
            <div class="main-header box">
                <img src="https://www.pngall.com/wp-content/uploads/13/Naruto-Uzumaki-PNG-Cutout.png"
                    alt="imagen de naruto de pie modo sobrado" class="box--img" alt="naruto re piola">
                <p>¡Bienvenidos a mi página de Naruto!<br><br>

                    Aquí encontrarás todo lo que necesitas saber sobre el increíble mundo de Naruto. Esta web está
                    diseñada para los fans de la serie, tanto los nuevos como los veteranos. Sumérgete en la historia de
                    Naruto Uzumaki, un joven ninja con un sueño inquebrantable de convertirse en el Hokage, el líder de
                    su aldea.
                    <br><br>
                    Explora secciones dedicadas a los personajes más icónicos, las mejores batallas, curiosidades y
                    teorías que mantienen viva la emoción. Además, podrás disfrutar de galerías de imágenes, resúmenes
                    de episodios, y actualizaciones sobre el universo de Naruto.
                    <br><br>
                    ¡Gracias por visitarnos y disfruta de tu estancia en el mundo ninja!
                </p>
                <a href="#nav" class="boton-volver">Volver al inicio</a>
            </div>
        </div>
    </header>

    <!--Seccion de personajes principales-->

    <section id="personajesPrincipales">
        <div class="container">
            <h2>PERSONAJES PRINCIPALES</h2>
            </p>
            <div class="personajesPrincipales--column">
                <div class="personajesPrincipales--box">
                    <?php include '../includes/personajeNaruto.php';?>
                </div>
                <div class="personajesPrincipales--box">
                    <?php include '../includes/personajeSasuke.php';?>
                </div>
                <div class="personajesPrincipales--box">
                    <?php include '../includes/personajeSakura.php';?>
                </div>

                <div class="personajesPrincipales--box">
                    <?php include '../includes/personajeKakashi.php';?>
                </div>

                <div class="personajesPrincipales--box">
                    <?php include '../includes/personajeJiraya.php';?>
                </div>

                <div class="personajesPrincipales--box">
                    <?php include '../includes/personajeItachi.php';?>
                </div>

                <div class="personajesPrincipales--box">
                    <?php include '../includes/personajeNagato.php';?>
                </div>

                <div class="personajesPrincipales--box">
                    <?php include '../includes/personajeObito.php';?>
                    
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!--Seccion de historia-->

    <section id="historia">
        <div class="historia background">
            <div class="container">
                <h2>HISTORIA</h2>
                <p class="info-history" id="info-history">
La historia de Naruto sigue la vida de Naruto Uzumaki, un joven ninja de la aldea oculta de Konoha. Desde su nacimiento, Naruto lleva sellado dentro de él al zorro demonio de nueve colas, Kurama, lo que le convierte en un paria en su propia aldea. Sin embargo, a pesar de su difícil infancia, Naruto sueña con convertirse en el Hokage, el líder y el ninja más fuerte de su aldea, para ganar el reconocimiento y el respeto de los demás.
<br><br>
La primera serie, Naruto, narra sus aventuras mientras entrena y realiza misiones junto a sus compañeros de equipo, Sasuke Uchiha y Sakura Haruno, bajo la tutela del maestro Kakashi Hatake. A lo largo de la serie, Naruto se enfrenta a diversos enemigos, incluido Orochimaru, un ninja renegado que desea destruir Konoha. La trama también se centra en la compleja relación entre Naruto y Sasuke, quien busca venganza contra su hermano Itachi Uchiha por la masacre de su clan.
<br><br>
En Naruto Shippuden, la historia avanza dos años y medio después de que Naruto deja Konoha para entrenar con Jiraiya. Naruto regresa más fuerte y determinado a rescatar a Sasuke, quien ha desertado de la aldea para unirse a Orochimaru en su búsqueda de poder. La serie aborda amenazas más grandes como la organización criminal Akatsuki, que busca capturar a todas las bestias con cola, incluido el propio Kurama dentro de Naruto.
<br><br>
A medida que la trama avanza, se revelan más sobre el pasado de Naruto, el origen de su poder y su conexión con otros personajes clave. La historia culmina en una guerra ninja mundial, donde Naruto y sus amigos luchan por proteger su mundo contra Madara Uchiha y Kaguya Otsutsuki. Finalmente, Naruto alcanza su sueño de ser reconocido como un héroe y líder, demostrando que la perseverancia y la amistad pueden superar cualquier obstáculo.</p>
            </div>
        </div>
    </section>

    <!--Seccion de jutsus y tecnicas-->

    <section id="jutsustecnicas">
        <div class="container">
            <h2>JUTSUS Y TÉCNICAS</h2>
            
            <?php include '../includes/jutsus.php';?>

        </div>
    </section>

    <!--Seccion de aldea y localización-->

    <section id="aldealocalizacion">
        <div class="container">
            <h2>ALDEA Y LOCALIZACIÓN</h2>
            <?php include '../includes/aldeas.php';?>
        </div>
    </section>


    <!--Seccion de galeria-->

    <section id="galeria">
        <div class="container">
            <h2>GALERIA</h2>
            <div class="galeria">
                <div class="foto"><img src="https://inperfecto.com.mx/wp-content/uploads/2020/05/naruto-vs-pain.jpg"
                        alt="Imagen 1"></div>
                <div class="foto"><img src="https://i.ytimg.com/vi/pYEiHJWVz98/maxresdefault.jpg" alt="Imagen 2"></div>
                <div class="foto"><img src="https://www.mundodeportivo.com/alfabeta/hero/2021/02/sasu.jpg?width=1200"
                        alt="Imagen 3"></div>
                <div class="foto"><img
                        src="https://i.pinimg.com/originals/06/83/2f/06832f9477c1a91538e9a5892530fd71.jpg"
                        alt="Imagen 4"></div>
                <div class="foto"><img src="https://images5.alphacoders.com/532/532559.jpg" alt="Imagen 5"></div>
                <div class="foto"><img
                        src="https://i.pinimg.com/originals/79/18/b4/7918b4f64e3007b40abf5973a7b786bb.jpg"
                        alt="Imagen 6"></div>
                <div class="foto"><img src="https://i.pinimg.com/736x/2f/29/ac/2f29acada18e86005f5098adc3ea48af.jpg"
                        alt="Imagen 7"></div>
                <div class="foto"><img
                        src="https://wallpapers.com/images/hd/naruto-final-form-1920-x-810-5tmzzhhr68bb18qz.jpg"
                        alt="Imagen 8"></div>
            </div>
        </div>
    </section>



    <!--Seccion de pie de página-->

    <footer id="mainfooter">
        <div class="socialMedia">
            <ul class="mainfooter list">
                <li class="mainfooter item"><a href="https://www.instagram.com/migueldbg_/" target="_blank"><img
                            src="../assets/img/logoInstagram.webp" alt="Logo de instagram" class="logo--rrss"></a></li>
                <li class="mainfooter item"><a href="https://github.com/bricenocode" target="_blank"><img
                            src="../assets/img/logoGitHub.png" alt="Logo de Git Hub" class="logo--rrss"></a></li>
                <li class="mainfooter item"><a href="https://www.linkedin.com/in/miguel-brice%C3%B1o-3777ab302/"
                        target="_blank"><img src="../assets/img/logoLinkdn.webp" alt="Logo de Linkdn"
                            class="logo--rrss"></a></li>
            </ul>
        </div>
        <p>Naruto One Page Web 2024&copy;</p>
    </footer>
</body>

</html>