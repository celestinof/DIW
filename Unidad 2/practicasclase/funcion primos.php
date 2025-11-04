    <?php


    function av_primos($lim_inferior, $lim_superior) {

    $lim_inferior=$lim_inferior;
    $lim_superior=$lim_superior;
    

    for ($num=$lim_inferior;$num<$lim_superior;$num+=1) {   //recorremos todos los números del bucle del límite inferior a superior

        $es_primo=true; //Cada vez que analicemos un número del rango, partimos de que es primo
        for ($i=2;$i<$num;$i+=1) { //lanzamos un bucle para dividirlo entre todos los números y ver si es primo o no es primo
            
            if ($num%$i==0) { //si se cumple, no es primo
                $es_primo=false;
                break;                      
           }
           
           
        }
        if ($es_primo==true) echo "El número $num es primo <br>";
    }

    }