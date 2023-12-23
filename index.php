<!-- index.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilo adicional para el botón */
        #boton-formulario {
            position: fixed;
            top: 10px;
            left: 10px;
            background-color: #45a049;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            z-index: 1;
        }
    </style>
    <title>Biografía de Roger Federer</title>
</head>
<body>
    <header>
        <h1>Roger Federer</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="carrera.php">Carrera</a></li>
                <li><a href="logros.php">Logros</a></li>
                <li><a href="videos.php">Videos</a></li>
            </ul>
        </nav>
    </header>

    <section id="contenido">
        <h2>Bienvenido a la biografía de Roger Federer</h2>
        <p>Roger Federer nació el 8 de agosto de 1981 en Binningen, Suiza, una pequeña población cercana a la ciudad de Basilea; pero se crio en Riehen y, sobre todo, en Münchenstein. Es hijo de Lynette y Robert Federer y tiene una hermana mayor llamada Diana. Roger, además de hablar el dialecto alemán suizo, habla alemán, francés e inglés con fluidez, aunque considera el alemán como su idioma nativo. Mientras jugaba en el Masters Series de Roma 2006, se reunió con el papa Benedicto XVI.

Al igual que todos los ciudadanos suizos masculinos, Federer tendría que haber cumplido el servicio obligatorio en las Fuerzas Armadas de Suiza. Sin embargo, en 2003, fue considerado no apto para el servicio debido a un problema en la espalda que tenía desde hace mucho tiempo, de modo que no tuvo que cumplir el servicio militar. En su adolescencia fue seleccionado para tocar la trompa alpina durante eventos de lanzamiento de bandera suiza. De niño, practicaba una amplia gama de deportes. Además de tenis, jugaba al baloncesto, bádminton, tenis de mesa. También jugaba al fútbol, en las categorías inferiores del FC Basel, aunque finalmente terminó optando por el tenis.</p>
        <img src="imagen/federer.png" alt="Roger Federer">

        <!-- Agregamos el botón para ir al formulario -->
        <a href="formulario.php" id="boton-formulario">Participar en la Encuesta</a>
    </section>

    <footer>
        <p>&copy; 2023 Biografía de Roger Federer</p>
    </footer>
</body>
</html>