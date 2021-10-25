<?php
include_once "cabecera.php";
?>

<div class="container">

  <?php 
  echo "<h2>APLICACIÓN DAW</h2>";
  $usuario="Alejandro";
  $curso="2DAW";
  ?>

  <p>Usuario: <?php 
  echo $usuario,'-',$curso;
  echo '<br>';
  $valores = [10, 20 ,30];
  $cuotas = ['Enero'=>10, 'Marzo'=>20, 'Abril'=>30];
  print_r($cuotas);
  echo '<br>';
  print_r($valores);
  echo '<br>';
    for($i=0;$i<3;$i++){
        echo $valores[$i], ' ';
    }
   echo '<br>' ;
   echo "Valor de Enero: ".$cuotas['Enero']; 
   echo '<br>' ;

  $array = [[5, 10, 15],

            [10, 20, 30],

            [100, 200, 300]];

  

// Mostramos mensaje con el índice de cada  array y los valores que contiene
echo '<table class="table">
    <thead>
    <tr>
        <th>Valor 1</th>
        <th>Valor 2</th>
        <th>Valor 3</th>
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
    ?> </p>   

  