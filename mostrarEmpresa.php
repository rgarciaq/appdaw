<?php
include_once 'datos.php';

if(isset($_POST['nombre'])){
    $nombre=$_POST['nombre'] ;
}

foreach($datos as $empresa){
    if($nombre==$empresa['NOMBRE']){
        echo '<table class="table">
    <thead>
    <tr>
        <th>NOMBRE</th>
        <th>ID</th>
        <th>DEPARTAMENTO</th>
        <th>EMPLEADOS</th>
      </tr>
      </thead>
  <tbody>';
  for($i=0; $i<count($array); $i++) {
    echo '<tr>';

    for($x=0; $x<count($array[$i]); $x++) {
        echo '<td>';
        echo $array[$i][$x],"<br>";
        echo '</td>';
    }//fin bucle inferior
    echo '<td><a href="#" class="btn btn-info" role="button">Editar</a></td>';
    echo '<td><a href="#" class="btn btn-danger" role="button">Eliminar</a></td>';
    echo '</tr>';

  }//fin bucle superior
  echo '</tbody>
  </table>';
   
    }
}

?>