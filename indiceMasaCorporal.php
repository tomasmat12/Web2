<?php

   if (isset( $_POST['peso']) && isset($_POST['altura']) ){
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $pow = pow ($altura,2);
        //echo ($pow);
        $indiceM = ( $peso / $pow ); 
        echo (" Indice masa : ". $indiceM);
        echo ("</br>");
        echo ("</br>");
        if ( $indiceM < 18.5 )
            echo ("Peso : " . $indiceM . " bajo");
        elseif ($indiceM < 24.99)
            echo ("Peso : " . $indiceM . " Normal");
            elseif ($indiceM < 30)
                echo ("Peso : " . $indiceM . " Sobrepeso");
            else
            echo ("Peso : " . $indiceM . " Obesidad");
        /*
        Bajo peso	<18,50
        Normal	18,5 - 24,99
            
        Sobrepeso	≥25,00
        Obesidad	≥30,00
*/

    }



?>