<?php
$jsonData = file_get_contents("datos.json");
$data = json_decode($jsonData, true);
$matriculas = $data['matriculas'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrícula - Centro Educativo "ABIGAIL"</title>
    <link rel="stylesheet" href="css/matricula.css">
</head>
<body>
    <header>
        <h1>Centro Educativo "ABIGAIL"</h1>
        <nav>
            <ul>
                <li><a href="inicio.html">Inicio</a></li>
                <li><a href="matricula.php">Matrícula</a></li>
                <li><a href="horario.html">Horario</a></li>
                <li><a href="login.php">Ingresar</a></li>
                <li><a href="registro.html">Registrarse</a></li>
                <li><a href="estudiantes.php">Estudiantes</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section class="matriculas-contenedor">
            <?php foreach ($matriculas as $matricula): ?>
                <div class="matricula-tarjeta">
                    <img src="<?= htmlspecialchars($matricula['imagen']) ?>" alt="Imagen de <?= htmlspecialchars($matricula['nivel']) ?>" class="matricula-imagen">
                    <h2 class="matricula-nivel"><?= htmlspecialchars($matricula['nivel']) ?></h2>
                    <p class="matricula-costo">Costo: S/.<?= htmlspecialchars($matricula['costo']) ?></p>
                    <p class="matricula-descripcion"><?= htmlspecialchars($matricula['descripcion']) ?></p>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>
