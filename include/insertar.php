<?php
include('conexionBD.php');

if (isset($_POST['guardar'])) {

  $nombre = $_POST['nombreP'];
  $descripcion = $_POST['descripcionP'];
  $categoria = $_POST['categoriaP'];
  $precio = $_POST['precioP'];
  $cantidad = $_POST['cantidadP'];
  $pagina = $_POST['paginaP'];
  $imagen = $_FILES['ruta']['name'];

  date_default_timezone_set('America/Lima');
  $fecha = date('Y-m-d'); //Sacamos la hora y fecha actual

  $extensiones = array(0 => 'image/jpg', 1 => 'image/jpeg', 2 => 'image/png');
  $max_tamanyo = 1024 * 1024 * 8 * 2;

  $ruta_fichero_origen = $_FILES['ruta']['tmp_name'];
  $ruta_nuevo_destino = '../uploads/' . $_FILES['ruta']['name'];
  if (in_array($_FILES['ruta']['type'], $extensiones)) {
    if ($_FILES['ruta']['size'] < $max_tamanyo) {
      if (move_uploaded_file($ruta_fichero_origen, $ruta_nuevo_destino)) {
        echo 'Fichero guardado con éxito';
        $insertar = "INSERT INTO productos values (null,'$nombre','$descripcion','$categoria','$precio','$pagina','$imagen','$cantidad','$fecha')";
        $resultado = mysqli_query($conn, $insertar);
        if ($resultado) {
          header("location:../insertar_productos.php?inserto=true");
        } else {
          echo "<script>alert('No se pudo registrar, revise que este insertando una imagen o verifique que pese menos que 2MB');window.history.go(-1);</script>";
        }
      }
    }
  }
}
