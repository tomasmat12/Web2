<?php

    if(isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];
        $genero = $_GET['selectGenero'];
        $pais = $_GET['paises'];
        echo "<p>Nombre : " . $nombre . "</p>";
        echo "<p>Apellido : " . $apellido . "</p>";
        echo "<p>Edad : " . $edad . "</p>";
        echo "<p>Genero : " . $genero. "</p>";
        echo "<p>Pais  : " . $pais. "</p>";
        echo "Interes General : ";
        foreach($_GET['intereses'] as $select){
            echo ("<p> ".$select ." </p>");
        }
    }




?>