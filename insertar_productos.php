<?php
if (isset($_GET['inserto']) == true) {
    echo "<script>alert('El producto se agrego correctamente')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon-logo.png">
    <title>GeekDreams|Administrador</title>
    <link rel="stylesheet" href="css/admin-productos.css">
    <link rel="stylesheet" href="css/menu_footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include('include/menu_admin.php');
    ?>
    <main>
        <section class="insertar-productos">
            <div class="img">
                <div>
                    <h3>Ingrese sus productos</h3>
                    <p>Recuerde que para una mejor experiencia de sus usuarios es recomendable siempre mantener
                        actualizada su lista de productos.</p>
                    <img src="img/administrador/img-productos.png" alt="">
                </div>
            </div>
            <div class="form">
                <form action="include/insertar.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <p>Nombre de producto:</p>
                        <input type="text" name="nombreP" id="" placeholder="Ingrese el nombre">
                    </div>
                    <div>
                        <p>Descripción:</p>
                        <textarea name="descripcionP" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-categoria">
                        <div>
                            <p>Precio:</p>
                            <input type="number" name="precioP" step=0.01 id="">
                        </div>
                        <div>
                            <p>Cantidad:</p>
                            <input type="number" name="cantidadP" id="">
                        </div>
                    </div>
                    <div class="form-categoria">
                        <div>
                            <p>Categoría:</p>
                            <select name="categoriaP" id="">
                                <option>Elige una opción</option>
                                <option value="1">Ropa</option>
                                <option value="2">Accesorios</option>
                                <option value="3">Merchandising</option>
                                <option value="4">Decoración</option>
                            </select>
                        </div>
                        <div>
                            <p>Página:</p>
                            <select name="paginaP" id="">
                                <option>Elige una opción</option>
                                <option value="1">Animes</option>
                                <option value="2">Series</option>
                                <option value="3">Comics</option>
                                <option value="4">Videojuegos</option>
                                <option value="4">Libros</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <p>Suba su imagen:[Debe pesar menor o igual a 2MB]</p>
                        <input type="file" name="ruta" id="">
                    </div>
                    <div>
                        <input type="submit" name="guardar" value="Guardar producto">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php
    include('include/footer.php')
    ?>
    <script src="js/script.js"></script>
</body>

</html>