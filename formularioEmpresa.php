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
//Crear un array para almacenar los departamentos(únicos)
$departamentos=array();
$contador=0;
//Recorrer el array de empresas
foreach($datos as $empresa){
    
    //Por cada empresa, preguntar si el array departamentos
    //contiene el departamento
    if(!in_array($empresa['DEPARTAMENTO'],$departamentos)){
        // $departamentos[$contador]=$empresa['DEPARTAMENTO'];
        // $contador++;
        array_push($departamentos, $empresa['DEPARTAMENTO']);
    }
    //Si no lo contiene, se añade el departamento al array
    
    //Si lo continen, no hago nada
}

?>

<body>
    <form method="POST" action="buscarDepartamento.php">
        <p>Departamento: <?php echo "<select name='departamento'>";
                                foreach($departamentos as $departamento){
                                    echo "<option value='".$departamento."'>".$departamento."</option>";
                                }
                                echo "</select>"?></p>
        <br><input type="submit" value="Buscar" name="botonbusqueda">
    </form>
</body>
</html>