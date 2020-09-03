<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo ("</br>");
        require_once 'metodoGET.php';

        echo (" Ejercicio 1 ");
        echo("<ul> <li> Hola Mundo  </li> </ul>");
        // $a = array(1 => 'uno', 2 => 'dos', 3 => 'tres');
        
        echo ("</br>");
        echo (" Ejercicio 2  </br>");
        $arre = array ("Chevrolet","Ford","Fiat","BMW");
        print_r($arre);
        
        $can = count($arre);
        echo ("<ul>");
        for ($i=0; $i<$can; $i++) {                       //foreach ($arre as $car)
            echo ("<li>" . $arre[$i] . "</li>");      // . $car . 
        };
        echo ("</ul>");
        
        echo ("</br>");
        echo (" Ejercicio 3 </br>");
        echo ("</br>");
    ?>
    <form action="metodoGET.php" method="GET">
        <label for="fname"> Nombre :</label>
        <input type="text" name="nombre" />
        <label for="fapellido"> Apellido :</label>
        <input type="text" name="apellido" />
        <label for="fedad"> Edad :</label>
        <input type="text" name="edad" />
        <label for="fgenero"> Genero </label>
        <select name="selectGenero">
            <option value="masculino">Masculino</option> 
            <option value="femenino">Femenino</option>
            <option value="otros">Otros</option>
        </select>
        </br>
        <label for="fpais"> Pais </label>
        </br>
        <input type="radio" id="argentina" name="paises" value="argentina">Argentina</input>
        <!-- <label for="argentina">Argentina</label><br> -->
        <input type="radio" id="brasil" name="paises" value="brasil">Brasil</input>
        <!--<label for="brasil">Brasil</label><br>-->
        <input type="radio" id="uruguay" name="paises" value="uruguay">Uruguay</input>
        <!--<label for="uruguay">Uruguay</label>-->

        </br>
        <label for="finteres"> Interes</label>
        </br>

        <input type="checkbox" id="deportes" name="intereses[]" value="Deportes">Deportes</input>
        <!-- <label for="deportes"> Deportes </label><br>-->
        <input type="checkbox" id="musica" name="intereses[]" value="Musica">Musica</input>
        <!-- <label for="musica"> Musica </label><br>-->
        <input type="checkbox" id="aireLibre" name="intereses[]" value="Aire_Libre">Aire Libre</input>
        <!-- <label for="aireLibre"> Aire Libre</label><br><br>-->

        
        
        
        
        <input type="submit">
    </form>

    <?php
        echo ("</br>");
        echo (" Ejercicio 4 </br>");
        echo ("</br>");    
        //?nombre=qwrt&apellido=wqrwq&edad=33
    ?>
    <p><a href="mostrarArre.php?mostrar=5"> Ver los primeros 5 </a></p>  
    <p><a href="mostrarArre.php?mostrar=10"> Ver los primeros 10 </a></p>
    <p><a href="mostrarArre.php?mostrar=15"> Ver los primeros 15 </a></p>
    <?php
        echo ("</br>");
        echo (" Ejercicio 5  Masa corporal </br>");
        echo ("</br>");    
        //?nombre=qwrt&apellido=wqrwq&edad=33
    ?>
    <form action="indiceMasaCorporal.php" method="POST">
        <label for="fpeso"> Peso :</label>
        <input type="text" name="peso" />
        <label for="faltura"> Altura :</label>
        <input type="text" name="altura" />
        <input type="submit">
    </form>
    <?php
        echo ("</br>");
        echo (" Ejercicio 6  Tabla de multiplicar </br>");
        echo ("</br>");    
       
    ?>
    <form action="tablaMulti.php" method="GET">
        <label for="flimite"> Limite de la tabla :</label>
        <input type="text" name="limite" />
        <input type="submit">
    </form>
    <?php
        echo ("</br>");
        echo (" Ejercicio 7  Tabla interes bancario </br>");
        echo ("</br>");    
       
    ?>
    <form action="tablaInteres.php" method="POST">
        <label for="fdiner"> Dinero a invertir :</label>
        <input type="text" name="dinero" />
        </br>
        </br>
        <label for="ftazaAnual"> Ingrese  % de taza de interes Anual :</label>
        <input type="text" name="tazaAnual" />
        <label for="ftazaMensual">o  % de taza de interes Mensual :</label>
        <input type="text" name="tazaMensual" />
        <input type="submit">
    </form>
    <?php
        echo ("</br>");
        echo (" Ejercicio 8   Calculadora </br>");
        echo ("</br>");    
       
    ?>
    <form action="calculadora.php" method="POST">
        <label for="fnumero1"> Numero 1 :</label>
        <input type="text" name="numero1" />
        </br>
        <label for="fnumero2"> Numero 2 :</label>
        <input type="text" name="numero2" />
        <label for="foperacion"> Operacion :</label>
        <select name="selectOperacion">
            <option value="sumar">Sumar</option> 
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <input type="submit">
    </form>
   
    <form action="pi.php" method="POST">
       <button type="submit" name="pi" method="POST"> Pi</button>
    </form>

    <!--
        AJAX // Jueves 27 clase de Ajax + PHP
        1.	Modifique el ejercicio 3 para que el programa sea llamado mediante AJAX.
        2.	Modifique el ejercicio 4 para separar la lista de la “botonera” mediante AJAX.
    -->
    
    
</body>
</html>





