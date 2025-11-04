<?php

# 1. Definición de la función calcular (Debe estar definida antes de su uso)
function calcular($calculo) {
    
    // Declaramos explícitamente que usaremos las variables globales
    global $num1; 
    global $num2; 

    // Convertimos a números una sola vez
    $num1 = (float)$num1;
    $num2 = (float)$num2;

    $resultado = 0;

    echo "<h2>Resultado</h2>";

    if("sumar" == $calculo) {
        $resultado = $num1 + $num2;
        echo "El resultado de la suma es $resultado";
    }
    
    else if("restar" == $calculo){
        $resultado = $num1 - $num2;
        echo "El resultado de la resta es $resultado";
    }

    else if("multiplicar" == $calculo){
        $resultado = $num1 * $num2;
        echo "El resultado de la multiplicación es $resultado";
    }

    else if("dividir" == $calculo){
        // Validación de división por cero
        if ($num2 == 0) {
            echo "Error: No se puede dividir por cero.";
            return;
        }
        $resultado = $num1 / $num2;
        echo "El resultado de la división es $resultado";
    }
    // Añadí 'else if' para asegurar que solo se ejecuta una operación y evitar redundancias.
}


/* 2. Lógica principal (Comprueba si se envió el formulario) */
if (isset($_POST["calcular"])) {

    // 2.1. Verificar si los campos num1 o num2 están vacíos
    if (empty($_POST["num1"]) || empty($_POST["num2"])) {
        
        echo "<h2>Error</h2>";
        echo "Por favor, introduce valores en ambos números para calcular.";
    }

    else{
        /* Asignamos a variables los números del POST en el ÁMBITO GLOBAL */ 
        $num1 = $_POST["num1"]; 
        $num2 = $_POST["num2"]; 
        $operacion = $_POST["operacion_elegida"]; # Esta variable la pasamos como parámetro

        calcular($operacion); # Llamamos a la funcion calcular
    }
}
// Si accedes directamente a este archivo sin enviar el formulario, no mostrará nada.

?>