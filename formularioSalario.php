<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>

<?php
$empleado="";
$horas="";
$idCategoria = "";
$valorHora="";
if(isset($_POST['empleado'])){
    $empleado=$_POST['empleado'];
}
if(isset($_POST['horas'])){
    $horas=$_POST['horas'];
}
if(isset($_POST['categoria'])){
    $idCategoria=$_POST['categoria'];
}

if(isset($_POST['valorExtra'])){
    $valorExtra=$_POST['valorExtra'];
}


$categorias = array(

    array("nombre"=>"Jefe","valor"=>50, "valorExtra"=>60),
    array("nombre"=>"Administrativo","valor"=>30, "valorExtra"=>40),
    array("nombre"=>"Operario","valor"=>15, "valorExtra"=>20),
    array("nombre"=>"Becario","valor"=>8, "valorExtra"=>12)

);
?>
    <form method="post" action="formularioSalario.php">
    <p>Empleado: <input type="text" name= "empleado" value="<?php echo $empleado ?>"></p>
    <p>Horas: <input type="text" name= "horas" value="<?php echo $horas ?>"></p>
    Categoria: <select name="categoria" size="1">
                                
                                <?php foreach($categorias as $categoria){
                                   
                                   $seleccion = "";
                                   if($idCategoria==$categoria['valor']){
                                        $seleccion="selected";
                                        $valorHora=$categoria['valor'];
                                    }
                                    echo "<option value='".$categoria["id"]."'".$seleccion.">".$producto['nombre']."</option>";
                                    }

                                    ?>
                    </select>
 
   
   
   <?php echo '<p>Salario</p>';
        if($horas>40){
            $extra=(40*$valorHora)+(($horas-40)*$valorExtra);
            echo $extra.' €';
        }else if($horas!="" && $horas<=40){
            $bruto=$horas*$valorHora;
            echo $bruto.' €';
        }else{
            echo '0 €';
        }

        
   
   ?>
    <p>Descuento </p>
    <p>Salario Neto </p>
    <input type="button" name="calcular" value="Calcular">
    <input type="button" name="limpiar" value="Limpiar">
    
    </form>
</body>
</html>