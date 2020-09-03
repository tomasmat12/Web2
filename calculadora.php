<?php

    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['selectOperacion'])) {

        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        $operacion  = $_POST['selectOperacion'];
        if ($operacion === "sumar")
            $total = $num1 + $num2 ;
        elseif ($operacion === "restar")
                $total = $num1 - $num2 ;
            elseif ($operacion === "multiplicar")
                    $total = $num1 * $num2 ;
                else
                    $total = $num1 / $num2 ;


        echo ("TOTAL de la ".$operacion. " entre ".$num1." y " .$num2. " es igual a : ".$total);



    }


    /*  OTRA FORMA DE SELECT
    en HTML    <select multiple name="cerveza[]">

    en PHP
    $cervezas=$_POST["cerveza"]; 

    //recorremos el array de cervezas seleccionadas. No olvidarse q la primera posición de un array es la 0 

    for ($i=0;$i<count($cervezas);$i++)    
    {     
    echo "<br> Cerveza " . $i . ": " . $cervezas[$i];    
    } 




?>