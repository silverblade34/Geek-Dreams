<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekDreams|Administrador</title>
    <link rel="stylesheet" href="css/admin-productos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>

    </header>
    <main>
        <section class="insertar-productos">
            <div class="img">
                <img src="img/administrador/img-productos.png" alt="">
            </div>
            <div class="form">
                <form action="" method="POST">
                    <h3>Ingrese sus productos</h3>
                    <div>
                        <p>Nombre de producto:</p>
                        <input type="text" name="" id="" placeholder="Ingrese el nombre">
                    </div>
                    <div>
                        <p>Descripción:</p>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <p>Precio:</p>
                        <input type="number" name="" id="">
                    </div>
                    <div class="form-categoria">
                        <div>
                            <p>Categoría:</p>
                            <select name="" id="">
                                <option>Elige una opción</option>
                                <option value="1">Ropa</option>
                                <option value="2">Accesorios</option>
                                <option value="3">Merchandising</option>
                                <option value="4">Decoración</option>
                            </select>
                        </div>
                        <div>
                            <p>Página:</p>
                            <select name="" id="">
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
                        <p>Suba su imagen:</p>
                        <input type="file" name="" id="">
                    </div>
                    <div>
                        <input type="submit" value="Guardar producto">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>