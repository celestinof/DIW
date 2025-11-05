<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--etiquetas php (comentario html) -->
    <?php 
    
    //diferencias en echo y print. Fijarse en las etiquetas de salto de página.
    echo "Hola mundo con echo <br>"; //imprime y salta por la etiquera <br>
    print "Hola mundo con print <br>";
    
    //empezamos con variables

    $var1; //declaramos una variable
    $var2="variable2"; //declaramos e incializamos variable

    print "El uso de comillas dobles no es baladí. Si llamamos a $var2 con comillas dobles, sale varible2. Si usásemos simples, sería el literal <br>";

    $nombre="Celes";
    $edad=38;

    //forma 1
    print "Mi nombre es $nombre y mi edad es $edad <br>";
    
    //forma 2. Más adecuada.
    print "Mi nombre es " . $nombre . " y mi edad es " . $edad . " . <br>";


    #prueba de variables globales
    function cambianombre() {

        global $nombre; /*con esta linea pasamos a hacer que $nombre dentro de la función sea global.
                          Si no la aplicamos (probar a comentar), no cambia la variable de fuera.*/
        $nombre="isa";
        echo $nombre;

}

    cambianombre();

    
    echo "<br>";

    echo $nombre; //Si no cambiamos la variable global, no afecta a esto.





    ?>
</body>
</html>