<?php
session_start(); //Con la funcion "session_start()" preparamos nuestra página para poder llamar a la variable superglobal $_SESSION y mantener la persistencia de datos durante la sesion (en un archivo temporal que se pierde al cerrar el navegador)

    /**VARIABLES: 
     * Inicializamos las variables a emplear. Aunque no es necesario creo que es una buena
     * práctica y da mejor legibilidad al código.*/

    //La agenda persistente en $_SESSION. Utilizamos la etiqueta "agenda" para acceder a los elementos de agenda en el array $_SESSION
    //Usamos un if para verificar si la agenda existe. Si no existe, se crea, si existe, no se vuelve a crear (Si no, borra toda la agenda y comienza desde el principio)
    if (!isset($_SESSION["agenda"])) {

        $_SESSION["agenda"] = [];}

    /**Array agenda. Es la agenda "temporal" que posteriormente guardaremos en la persistente*/
    $agenda=[];
    
    //Variables nombre y variable teléfono, para guardar los datos.
    $nombre="";
    $telefono=0;



    /**
    * Comprobamos si la clave 'enviar' existe en el array superglobal $_POST.
    * $_POST contiene todos los datos enviados por un formulario con method="POST".*/
    if(isset($_POST["enviar"])) {
        
        //El valor introducido en la casilla "nombre y apellidos" se almacena en la variable $idusuario
        $nombre=$_POST["nombre"];
        //El valor introducido en la casilla "nombre y apellidos" se almacena en la variable $idusuario 
        $telefono=$_POST["telefono"];  
    }

   

    /**En el video proporcionado en los apuntes (video 8.2 de aulaclic), se muestra que una forma de validar es con un condicional
     * que comprueba "if ($_REQUEST["nombre"]="")". No obstante tal y como se explica en los apuntes del curso, creo que es mejor utilizar
     * empty() para verificar la existencia de valores nulos*/
    if (empty($_REQUEST["nombre"])) {
        echo "El campo nombre está vacío";
    }


    /**Comprobación de si el nombre ya está en la agenda y si el teléfono ya estaba grabado.
     * Si el nombre ya está en la agenda, sobreescribe el teléfono.
     * Si el nombre no está en la agenda, graba la clave nombre y el valor teléfono en array agenda */ 

    //Si el nombre no está (!) en la agenda (tenemos que ir a la agenda guardada en la sesión, ya que no estamos conectando ninguna bbdd) 
        else { 
    
            if (!isset($_SESSION["agenda"][$nombre])) {

                $agenda[$nombre]=$telefono;
    
    
    } 
    //En caso de que el nombre exista, pasamos a ejecutar este bloque
    else {

            //Si existe el nombre y existe el teléfono
            if (in_array("telefono",[$_SESSION["agenda"]])){

                $agenda[$nombre]=$telefono;

             } 
             
             
             //Existe el nombre pero no el teléfono. Eliminamos el registro.
             else {

                unset($_SESSION["agenda"][$nom]);

             }       



            
    

    
}}

?>