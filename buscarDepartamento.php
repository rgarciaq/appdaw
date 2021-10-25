<?php

include_once 'datos.php';

$contador=0;
if(isset($_POST['departamento'])){
    $departamento=$_POST['departamento'] ;
}

foreach($datos as $empresa){
    if($departamento==$empresa['DEPARTAMENTO']){
        $contador++;
    }
}

echo "Hay ".$contador ." empresas de ".$departamento;

?>