<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$precio=0;
$cantidad=0;
$total="";
$cuotas="";
$idProducto="";
$valorProducto=0;


if(isset($_POST['precio'])){
    $precio=$_POST['precio'];
}
if(isset($_POST['cantidad'])){
    $cantidad=$_POST['cantidad'];
}
if(isset($_POST['producto'])){
    $idProducto=$_POST['producto'];
}
if(isset($_POST['cuotas'])){
    $cuotas=$_POST['cuotas'];
}

if(isset($_POST['valorProducto'])){
    $valorProducto=$_POST['valorProducto'];
}

$productos = array(

    array("id"=>"1", "producto"=>"Frigorifico","precio"=>350),
    array("id"=>"2", "producto"=>"Batidora","precio"=>50),
    array("id"=>"3", "producto"=>"Lavadora","precio"=>500),
    array("id"=>"4","producto"=>"Cafetera","precio"=>150)

);


?>
    <form method="post" action="formularioVenta.php">
        <h2>VENTA DE PRODUCTOS</h2>
        <p>Producto: <select name="producto" size="1"> 
            <?php foreach($productos as $producto){
                                   
                                   $seleccion = "";
                                   if($idProducto==$producto['id']){
                                        $seleccion="selected";
                                        $valorProducto=$producto['precio'];
                                    }
                                    echo "<option value='".$producto["id"]."'".$seleccion.">".$producto['producto']."</option>";
                                    } ?>
                                    </select></p>
        <p>Precio: <input type="text" name= "precio" value="<?php echo $valorProducto?>"></p>
        <p>Cantidad: <input type="text" name= "cantidad" value="<?php echo $cantidad ?>"></p>
        <p>Total: <input type="text" name="total" value="<?php echo $cantidad*$precio?>"></p>
        
        <p>Cuotas: <select name="cuota" size="1">     
        
        <?php for($i=1; $i<=12; $i++){
            echo '<option value="'.$i.'">'.$i.'</option>';
        }

                                    ?>
        </select></p>
        <?php 
            if($valorProducto==0){
               echo '<input type="submit" name="boton" value="Obtener precio">';
            }
            if($valorProducto>0 && $total==0){
                echo '<input type="submit" name="boton" value="Calcular Total">';
             }

            

        ?>
    </form>
</body>
</html>