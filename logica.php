<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <div class="results">
        <h1>Tus datos</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $edad = $_POST["edad"];
            $cuenta = $_POST["cuenta"];
            $carrera = $_POST["carrera"];

            echo "<p>Tu número de cuenta es: $nombre</p>";
            echo "<p>Tu número de cuenta es: $cuenta</p>";
            echo "<p>Tu edad es: $edad</p>";
            echo "<p>Perteneces a la carrera de: $carrera</p>";
        }
        ?>
        <a href="formulario.html">Volver al formulario</a>
    </div>
</body>
</html>
