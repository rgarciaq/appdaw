
<?php
    include_once 'index.php';
    $id;
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
   
function tablaAprobados($notas){
    $contAprobados=0;
    $contSuspensos=0;
    
        foreach($notas as $nota){
            
            if($nota['valor']>=5){
                $contAprobados++;
            }else{
                $contSuspensos++;
            }
        }

    echo'<table style="border:2px solid black" >';
    echo '<tr>';

        echo '<td><center>Total Alumnos</center></td>';
    
        echo '<td><center>Nº Aprobados</center></td>';
    
        echo '<td><center>Nº Suspensos</center></td>';
    
    
    echo '</tr>';
    
    echo '<tr>';

        echo '<td><center>'.count($notas).'</center></td>';

        echo '<td><center>'.$contAprobados.'</center></td>';

        echo '<td><center>'.$contSuspensos.'</center></td>';


    echo '</tr>';
    echo'</table>';
}



function tablaMayorNota($notas){

    $mayorNota=0;
    $menorNota=99;
    foreach($notas as $nota){
        if($nota['valor']>$mayorNota){
            $mayorNota=$nota['valor'];
        }else if($nota['valor']<$menorNota){
            $menorNota=$nota['valor'];
        }
    }

    echo'<br><table style="border:2px solid black" >';
    echo '<tr>';
    
        echo '<td><center>Alumno mayor nota</center></td>';
    
        echo '<td><center>Alumno menor nota</center></td>';
    
    
    echo '</tr>';
    
    echo '<tr>';


        echo '<td><center>'.$mayorNota.'</center></td>';

        echo '<td><center>'.$menorNota.'</center></td>';


    echo '</tr>';
    echo'</table>';
}  

tablaAprobados($notas);
tablaMayorNota($notas);
?>