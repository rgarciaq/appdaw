<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
    <p> Codigo: <input type="text" name="codigo" id="codigo"></p>
    <p> Tipo: <select name="tipo" size="1">
        <option value="1">Litio</option>
        <option value="2">Plomo</option>
        <option value="3">Níquel</option>
    </select>
    <p> Marca: <input type="text" name="marca" id="marca"></p>
    <p> Carga: <input type="text" name="carga" id="carga"></p>
    <p> Capacidad: <input type="text" name="capacidad" id="capacidad"></p>
    <p> Ciclos de vida: <input type="text" name="ciclos" id="ciclos"></p>
    <p> Estado: <input type="text" name="estado" id="estado"></p>
    <input type="submit" value="enviar">
    </form>
</body>
</html>

<?php

//Defi nición del nombre del archivo

$archivo = "datos.txt";


//Verifi cando la existencia del archivo

if (!file_exists($archivo)){

    echo 'Archivo NO existe..!!';

}else{

//Abriendo en forma de lectura

    $abrir = fopen($archivo, "r");

}

$codigo="";
$tipo="";
$marca="";
$carga="";
$capacidad="";
$ciclos="";
$estado="";

if(isset($_POST['codigo'])){
$codigo = $_POST['codigo'];
}

if(isset($_POST['tipo'])){
$tipo = $_POST['tipo'];
}

if(isset($_POST['marca'])){
$marca = $_POST['marca'];
}

if(isset($_POST['carga'])){
$carga=$_POST['carga'];
}

if(isset($_POST['capacidad'])){
$capacidad=$_POST['capacidad'];
}

if(isset($_POST['ciclos'])){
$ciclos=$_POST['ciclos'];
}

if(isset($_POST['estado'])){
$estado=$_POST['estado'];
}

//Enviar información de los productos

fwrite($abrir, $codigo);

fwrite($abrir, $tipo);

fwrite($abrir, $marca);

fwrite($abrir, $carga);

fwrite($abrir, $capacidad);

fwrite($abrir, $ciclos);

fwrite($abrir, $estado);


//Cerrar el archivo

fclose($abrir);



?>

