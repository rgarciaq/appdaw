
<?php
$notas = array(


array("id"=>1,"nombre"=>"Luz Lázaro","valor"=>10),

array("id"=>2,"nombre"=>"Ángela Torres","valor"=>8),

array("id"=>3,"nombre"=>"Fernanda Lázaro","valor"=>2),

array("id"=>4,"nombre"=>"Manuel Torres","valor"=>9),

array("id"=>5,"nombre"=>"Lucero Mendoza","valor"=>5),

array("id"=>6,"nombre"=>"Alejandra Menor","valor"=>6),

array("id"=>7,"nombre"=>"Victoria Bautista","valor"=>2),

array("id"=>8,"nombre"=>"Federico Malaver","valor"=>4)


);
?>
<form action="mostrar.php" method='POST'>
<?php
echo '<h1>Mostrar Notas Indexado</h1>';
echo '<table>';
echo '<tr>';
    echo'<td><center>Nº Orden</center></td>';
    echo'<td><center>Nombre</center></td>';
    echo'<td><center>Notas</center></td>';
echo '</tr>';    

   foreach($notas as $nota){

       $id=$nota['id'];


       echo '<tr>';

           echo '<td><center>'.$nota['id'].'</center></td>';

           echo '<td><center>'.$nota['nombre'].'</center></td>';

           echo '<td><center>'.$nota['valor'].'</center></td>';


       echo '</tr>';

   }

   echo '</table>';



?>
<p><input type="submit" value="Mostrar Resumen" ></p>

</form>

