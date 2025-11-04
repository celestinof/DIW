<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recomendaciones de motor</h1>

    <?php 
    
    $motor=1;
    tipodeMotorconif() ?>

    <?php

    

    function tipodeMotorconif() {

        global $motor;
        $motor=(float)$motor;


        if ($motor==1) {

            echo "El motor es de gasolina";

        }

          else if ($motor==2) {

            echo "El motor es de dieselo";

        }

          else if ($motor==3) {

            echo "El motor es de una motocicleta";

        }

          else if ($motor==4) {

            echo "El motor es eléctrico";
        }

        else {
            echo "El tipo de motor no es valido";
        }

        echo "<br>";
    }



    function tiposdemotorconswitch() {

        global $motor;
        $motor=(float)$motor;

        switch($motor) {

            case 1:
                echo "El motor es de gasolina";
                break;

            case 2: 
                echo "El motor es de diesel";
                break;
            case 3:
                echo "El motor es de motocicleta";
                break;
            case 4:
                echo "El motor es eléctrico";
                break;

                    default:
                        echo "Ninguna opcion seleccionada";
                }
            }

    ?>
</body>
</html>