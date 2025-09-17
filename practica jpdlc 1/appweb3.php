<!DOCTYPE html>
<html>
<head> 
    <title>Habilidades</title>
    </head>
    <body>
        <h1>Mis Habilidades:</h1>
        <?php
            $habilidades = array("PHP", "HTML", "CSS", "JavaScript", "MySQL", "SEO", "Diseño Web");
            echo "<ul>";
            foreach ($habilidades as $habilidad) {
            echo "<li>" . $habilidad . "</li>";
            }
            echo "</ul>";
            ?>
            <h2>Agregar una habilidad:</h2>
            <form method="post">
            Nueva habilidad: 
            <input type="text" name="nueva_habilidad"><br>  
            <input type="submit" value="Agregar">
            </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nueva_habilidad = $_POST["nueva_habilidad"];
            if (!empty($nueva_habilidad)) {
                echo "<p>Nueva habilidad agregada: " .
                htmlspecialchars($nueva_habilidad) . "</p>";
            }
        }
        ?>
    </body>
</html>
