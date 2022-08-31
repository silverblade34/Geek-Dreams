
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon-logo.png">
    <title>GeekDreams|Administrador</title>
    <link rel="stylesheet" href="css/ver_productos.css">
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
        <section class="container-buscador">
            <div class="container">
                <form action="" method="POST">
                    <h5>Visualice sus productos</h5>
                    <div>
                        <p>Nombre de producto:</p>
                        <input class="input-nombre" type="text" name="nombre" id="">
                    </div>
                    <div>
                        <h5>Filtro de búsqueda:</h5>
                    </div>
                    <div class="filtros">
                        <div>
                            <p>Página: </p>
                            <select name="pagina" id="">
                                <option value="0">Selecciona la página</option>
                                <option value="1">Anime</option>
                                <option value="2">Series</option>
                                <option value="3">Comics</option>
                                <option value="4">Videojuegos</option>
                                <option value="5">Libros</option>
                            </select>
                        </div>
                        <div>
                            <p>Categoría: </p>
                            <select name="categoria" id="">
                                <option value="0">Elige una opción</option>
                                <option value="1">Ropa</option>
                                <option value="2">Accesorios</option>
                                <option value="3">Merchandesing</option>
                                <option value="4">Decoración</option>
                            </select>
                        </div>
                        <div>
                            <p>Precio desde: </p>
                            <input type="number" step=0.01 name="precioI" id="">
                        </div>
                        <div>
                            <p>Precio hasta: </p>
                            <input type="number" step=0.01 name="precioM" id="">
                        </div>
                        <div>
                            <p>Fecha desde: </p>
                            <input type="date" name="fechaI" id="">
                        </div>
                        <div>
                            <p>Fecha hasta: </p>
                            <input type="date" name="fechaM" id="">
                        </div>
                        <div class="btn-buscar">
                            <input type="submit" name="buscarProductos" id="" value="Buscar">
                        </div>
                    </div>

                </form>
                <div class="tabla-pro">
                    <h5>Lista de productos</h5>
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Categoria</th>
                                <th>Precio</th>
                                <th>Página</th>
                                <th>Imagen</th>
                                <th>Stock</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <?php
                        include('include/consulta.php');
                        while ($row = mysqli_fetch_assoc($resultado)) {
                        ?>
                            <tr class="tr-datos">
                                <td><?php echo $row['nombre'] ?></td>
                                <td><?php echo $row['descripcion'] ?></td>
                                <td><?php echo $row['idCategoria'] ?></td>
                                <td>S/.<?php echo $row['precio'] ?></td>
                                <td><?php echo $row['pagina'] ?></td>
                                <td><img src="uploads/<?php echo $row['rutaImagen'] ?>" alt="" width="150px"></td>
                                <td><?php echo $row['cantidad'] ?></td>
                                <td><?php echo $row['fecha'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <?php include('include/footer.php'); ?>
</body>

</html>