<!DOCTYPE html>
<html lang="en">
    <head 
     <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Aplicacion web 2</title>
    </head>
    <body>
        <form method="post">
        Escribe tu nombre: <input type="text" name="nombre"><br>
        Escribe tu apellido paterno: <input type="text" name="pat"><br>
        Escribe tu apellido materno: <input type="text" name="mat"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $mat = $_POST["mat"];
    $pat = $_POST["pat"];
    echo "Hola tu nombre es: " . htmlspecialchars($nombre) . "<br>";
    echo "Tu apellido paterno es: " . htmlspecialchars($pat) . "<br>";
    echo "Tu apellido materno es: " . htmlspecialchars($mat) . "<br>";
    }
    ?>
    </body>
    </html>
