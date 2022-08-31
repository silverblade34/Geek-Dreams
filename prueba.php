<?php
$array=array('Hola','Buscar');
$hola="holaaaa";

function comprobar($hola){
    if(!empty($hola)){
       $c1="No esta vacio";
    }else{
       $c1="nombre=$hola[0]";
    }
    return $c1;
}
$compuesto="el animal: ".comprobar($array);
echo $compuesto;
