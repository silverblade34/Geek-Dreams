<?php
include('include/conexionBD.php');
$productos = "SELECT * FROM productos WHERE pagina=3";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/icon-logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekDreams|Anime</title>

    <link rel="stylesheet" href="css/anime.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header id="landing">
        <nav class="nav" id="nav">
            <div class="logo">
                <a href="index.php">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            <div class="lista-nav">
                <ul class="menu" id="menu">
                    <li class="items-menu"><a href="#">Animes</a></li>
                    <li class="items-menu"><a href="#">Series</a></li>
                    <li class="items-menu"><a href="#">Comics</a></li>
                    <li class="items-menu"><a href="#">Videojuegos</a></li>
                    <li class="items-menu"><a href="#">Libros</a></li>
                    <li class="items-menu"><a class="item-active" href="#">Carrito</a></li>
                </ul>
            </div>
            <div class="icon-menu" id="btn-menu">
                <i class="fa-solid fa-bars fa-2xl"></i>
            </div>
        </nav>
        <section>
            <div data-aos="fade-right" class="container-landing">
                <h1>Animes</h1>
                <h3>¡Encuentra todos los mangas, disfraces y accesorios que buscas!</h3>
                <p>El anime o アニメ es un término con el que se identifica en general a la animación de procedencia
                    japonesa. Hablamos de una industria muy potente, que fusiona el entretenimiento con la herencia
                    cultural del país.El anime es una forma exitosa de expresión, de narrativa y de cinema gracias a su
                    excelente diversidad de temas, al manejo profundo de los personajes y a la calidad de la animación,
                    logrando en dibujos e imágenes animadas situaciones que tomaría mucho tiempo y dinero producir con
                    efectos especiales. </p>
                <button><a href="#productos">Buscar productos</a></button>
            </div>
        </section>
        <div class="flecha-fixed">
            <a href="#landing"><img src="img/up-arrow.png" alt=""></a>
        </div>
    </header>
    <main id="productos">
        <section class="barra-buscar">
            <form action="">
                <div class="conteiner-buscar">
                    <div>
                        <ul>
                            <li class="btn-categorias">
                                <div>Categorias <i class="fa-solid fa-angle-down"></i></div>
                                <ul class="lista-categorias">
                                    <li class="items-categorias">Ropa</li>
                                    <li class="items-categorias">Accesorios</li>
                                    <li class="items-categorias">Merchandising</li>
                                    <li class="items-categorias">Decoración</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <input class="input-text" type="text" name="" id="" placeholder="Busca tu producto"><input class="input-submit" type="submit" value="Buscar">
                    </div>

                </div>
                </div>
            </form>
        </section>
        <section class="productos">
            <div>
                <h1>Nuestros productos</h1>
            </div>
            <div class="container-productos">
                <?php
                $resultado = mysqli_query($conn, $productos);
                while ($row = mysqli_fetch_assoc($resultado)) {
                ?>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="<?php echo $row['rutaImagen'] ?>" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"><?php echo $row['nombre']; ?> </h2>
                            <p class="description">S/. <?php echo $row['precio']; ?></p>

                            <button class="button">Ver más</button>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
    </main>

    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>