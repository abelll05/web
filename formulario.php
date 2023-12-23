<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario de Fan de Federer</title>
</head>
<body>
    <header>
        <h1>Roger Federer</h1>
        <!-- ... (menú de navegación) -->
    </header>

    <section id="contenido">
        <h2>¿Qué tan fan eres de Roger Federer?</h2>

        <?php
        $exito = false;

        if (isset($_POST['submit'])) {
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            $nivel = $_POST['nivel'];
            $comentarios = $_POST['comentarios'];

            // Aquí puedes agregar lógica para guardar los datos en la base de datos o hacer lo que necesites.

            $exito = true;
        }
        ?>

        <!-- Formulario -->
        <form method="post" action="">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required>

            <label for="nivel">Nivel de fanatismo:</label>
            <select id="nivel" name="nivel" required>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
            </select>

            <label for="comentarios">Comentarios:</label>
            <textarea id="comentarios" name="comentarios" rows="4" required></textarea>

            <button type="submit" name="submit">Enviar</button>
        </form>

        <!-- Mostrar mensaje de éxito -->
        <?php
        if ($exito) {
            echo "<p class='exito'>¡Los datos se han enviado con éxito!</p>";
        }
        ?>

        <!-- Mostrar datos después de enviar el formulario -->
        <?php
        if (isset($_POST['submit']) && $exito) {
            echo "<p>Tus datos:</p>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Edad: $edad</p>";
            echo "<p>Nivel de fanatismo: $nivel</p>";
            echo "<p>Comentarios: $comentarios</p>";
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2023 Fan de Federer</p>
    </footer>
</body>
</html>