
<?php

//Defi nición del nombre del archivo

$archivo = "claves.txt";


//Verifi cando la existencia del archivo

if (!file_exists($archivo)){

    echo 'Archivo NO existe..!!';

}else{

//Abriendo en forma de lectura

    $abrir = fopen($archivo, "r");

}


//Obtener el contenido a partir de la lectura

$contenido = fread($abrir, filesize($archivo));

//Cerrando el archivo

fclose($abrir);

//Imprimir el contenido del archivo

echo $contenido;



?>

