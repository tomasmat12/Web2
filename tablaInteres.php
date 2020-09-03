<?php

    if ((isset($_POST['dinero']) && ( isset($_POST['tazaMensual']) || isset($_POST['tazaAnual']) ) )){   //xor
        $tazaMensual = $_POST['tazaMensual'];
        $tazaAnual = $_POST['tazaAnual'];
        $dinero = $_POST['dinero'];
        if (!empty ($dinero) && (!empty($tazaAnual) xor !empty($tazaMensual))){
            if (!empty ($tazaMensual)){
                $tazaAnual = ($tazaMensual * 12);
            }
            $total = ($tazaAnual * $dinero) / 100 ;
            $totalMes = $total / 12 ;
        }
        $totalMes = round ($totalMes, 2);
       
        echo("</br>");
        echo(" Total invertido : ". $dinero);
        echo("</br>");
        echo(" Interes generado por mes : " . $totalMes);
        echo("</br>");
        echo(" Interes generado Anual : " . $total);     

        echo "<table>";
        echo "<tr>";
        echo "  <th> Mes   </th>";
        echo "  <th>  "."&nbsp"." Total  </th>";
        echo "  <th> "."&nbsp"." Total + Interes </th>";
        echo "</tr>";
        $sumatoria = $dinero ;
        $sumatoria = round ($sumatoria, 2);
        for ($i = 1 ; $i<13 ; $i++ ) {   
             
            echo "<tr>";
            echo "<td> " . $i . "</td>";
            echo "<td> " ."&nbsp"."&nbsp"."&nbsp"."&nbsp". $sumatoria . "</td>";
            echo "<td> "."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp". $sumatoria . "+". $totalMes . "</td>";
            echo "</tr>";
            $sumatoria = $sumatoria + $totalMes;
            $sumatoria = round ($sumatoria, 2);
        }
        // echo "<tr>  <td>" . $arr[0] . "</td> <td>" . $arr[1] ."</td>  </tr>" ;
        echo "</table>";
        echo("</br>");
        echo(" Dinero total al final del ciclo (12 meses) : " .($dinero + $total));  
        echo("</br>");
        echo(" Inversion INICIAL  : " .$dinero );


    }
    
    
?>