<?php

    if (isset($_GET['mostrar'])){
        $can = $_GET['mostrar'];
    }
        
        $arre = array ();
        //print_r($arre);
        
        
        echo ("<ul>");
        for ($i=0; $i<$can; $i++) { //foreach ($arre as $car)
            array_push($arre , $i);                   
            echo ("<li>" . $arre[$i] . "</li>");      // . $car . 
        };
        echo ("</ul>");

        print_r($arre);

?>