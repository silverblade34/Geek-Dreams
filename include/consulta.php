<?php
 include('conexionBD.php');

 if(isset($_POST['buscarProductos'])){
    
 $n=$_POST['nombre'];
 $pi=$_POST['precioI'];
 $pm=$_POST['precioM'];
 $fi=$_POST['fechaI'];
 $fm=$_POST['fechaM'];

 $p=$_POST['pagina'];
 $c=$_POST['categoria'];

 $consultas=array($n,$pi,$pm,$fi,$fm);

 //Comprobar nombre
function comprobarN($n){
   if(empty($n)){
      $c1="";
   }else{
      $c1="AND nombre LIKE '%$n%'";
   }
   return $c1;
}

//Comprobar precio mayor
function comprobarP($pi,$pm){

   if(empty($pi)&& empty($pm)){
      $c1="";//----------------
   }else if(empty($pi)&& !empty($pm)){
      $c1="AND precio BETWEEN 0 AND $pm";
   }else if(!empty($pi)&& empty($pm)){
      $c1="AND precio BETWEEN $pi AND 99999";
   }else{
      $c1="AND precio BETWEEN $pi AND $pm";
   }
   return $c1;
}
//Comprobar fecha inferior y mayor
function comprobarF($fi,$fm){
   date_default_timezone_set('America/Lima');
   $fecha = date('Y-m-d');
   if(empty($fi)&& empty($fm)){
      $c1="";//----------------
   }else if(empty($fi)&& !empty($fm)){
      $c1="AND fecha BETWEEN '2010-01-01' AND '$fm'";
   }else if(!empty($fi)&& empty($fm)){
      $c1="AND fecha BETWEEN '$fecha' AND '$fi'";
   }else{
      $c1="AND fecha BETWEEN '$fi' AND '$fm'";
   }
   return $c1;
}
//Comprobar categoria
function comprobarC($c){
   if($c==0){
      $c1="";
   }else{
      $c1="AND idCategoria=$c";
   }
   return $c1;
}
//Comprobar pagina
function comprobarPa($p){
   if($p==0){
      $c1="";
   }else{
      $c1="AND pagina=$p";
   }
   return $c1;
}
 function buscar($consultas,$p,$c){
    if(empty($consultas)&&$p==0&$c==0){
       $consulta="SELECT * FROM productos";
    }else{
      $consulta="SELECT*FROM productos WHERE 1 ".comprobarN($consultas[0])." ".comprobarP($consultas[1],$consultas[2])." ".comprobarF($consultas[3],$consultas[4])." ".comprobarC($c)." ".comprobarPa($p);
   }
    return $consulta;
 }
 $consulta=buscar($consultas,$p,$c);
 $resultado = mysqli_query($conn, $consulta);


 }else{
   $consulta="SELECT * FROM productos";
   $resultado = mysqli_query($conn, $consulta);
 }
?>