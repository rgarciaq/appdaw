<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include_once 'datos.php';
$nombres=array();
$contador=0;
foreach($datos as $empresa){
    
    if(!in_array($empresa['NOMBRE'],$nombres)){
        array_push($nombres, $empresa['NOMBRE']);
    }
    
}

?>
<body>
<form method="POST" action="mostrarEmpresa.php">
        <p>Empresa: <?php echo "<select name='nombre'>";
                                foreach($nombres as $nombre){
                                    echo "<option value='".$nombre."'>".$nombre."</option>";
                                }
                                echo "</select>"?></p>
        <br><input type="submit" value="Buscar" name="botonbusqueda">
    </form>
</body>
</html>