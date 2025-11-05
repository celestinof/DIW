<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tarea.css">  
    <title>Tareaud2</title>
</head>
<body>
    <header>
    <h1>Agenda</h1>
    </header>
   
   <main>
    <div class="formulario-contacto">
        <h2>Nuevo Contacto</h2>
        
        <form action="agenda.php" method="POST"> 
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Introducir nombre">
            </div>
            
            <div>
                <label for="telefono">Teléfono:</label>
                <input type="tel" name="telefono" id="telefono" maxlength="9" placeholder="Introducir teléfono">
            </div>

            <br>

            <div>
                <input type="submit" name="enviar" value="Añadir Contacto">
                <input type="reset" value="Borrar">
            </div>
        </form>
    </div>

</main>