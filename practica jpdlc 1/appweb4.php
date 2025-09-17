<!DOCTYPE html>
<html> 
<head>
    <title>Amigos</title>
</head>
    <body>
        <h1>Mis Amigos:</h1>
        <?php
            $amigos = array("ramon", "alma", "matilde", "Alison", "osmar");
            echo "<ul>";
            foreach ($amigos as $amigo) 
            {
            echo "<li>" . $amigo . "</li>";
            }
            echo "</ul>";
        ?>
        <h2>Agregar un amigo:</h2>
        <form method="post">
            Nombre del amigo: <input type="text" name="nuevo_amigo"><br>
            <input type="submit" value="Agregar">
        </form>
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
                 $nuevo_amigo = $_POST["nuevo_amigo"];
            if (!empty($nuevo_amigo)) {
                echo "<p>Nuevo amigo agregado: " . htmlspecialchars($nuevo_amigo) . "</p>";
            }
            }
        ?>
    </body>
</html>
