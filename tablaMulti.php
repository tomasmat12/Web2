<?php

    if (isset ($_GET['limite'])){

        $cant = $_GET['limite'];
        echo ("-"."&nbsp");
        for ($i=1; $i<$cant; $i++){
            echo ("&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".$i);
        }
            echo ("</br>");

        for ($i=1; $i<$cant; $i++){
            echo ($i);
            for ($j=1; $j<$cant; $j++){
                if ($i*$j<10){
                    echo("&nbsp"."&nbsp");
                }
                echo ( "&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp".$i*$j);
            }
            echo ("</br>");
        }
    }  



    /* Hacerlo NO a lo CHANCHO con  algo asi ...
    
    $nombre1   = "Adriana";
    $apellido1 = "Ortiz";
    $arr = array("Pedro", "Duarte");

    echo "<table>";
    echo "<tr>";
    echo "  <th> Nombre  </th>";
    echo "  <th> Apellido </th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> " . $nombre1 . "</td>";
    echo "<td> " . $apellido1 . "</td>";
    echo "</tr>";
    echo "<tr>  <td>" . $arr[0] . "</td> <td>" . $arr[1] ."</td>  </tr>" ;
    echo "</table>";

?>