<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Elementos del array $_SERVER</h1>

    <table>
<?php //mostrar array $_SERVER

    
foreach($_SERVER as $key => $value) {

    echo "<tr><th> $key </th> <th> $value </th></tr>";

    
} ?>

</table>

</body>
</html>
