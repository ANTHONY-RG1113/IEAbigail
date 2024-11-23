<?php
include('conexion.php'); 

try {
    $stmt = $pdo->prepare("CALL listar_estudiante()");
    $stmt->execute();

    $estudiantes = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error al ejecutar el procedimiento: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estudiantes.css">
    <title>Lista de Estudiantes</title>
</head>
<body>
    <header class="header">
        <h1>Lista de Estudiantes</h1>
    </header>
    <main class="main">
        <section class="tabla-contenedor">
            <table class="tabla">
                <thead>
                    <tr>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>DNI</th>
                        <th>Grado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($estudiantes)): ?>
                        <?php foreach ($estudiantes as $estudiante): ?>
                            <tr>
                                <td><?= htmlspecialchars($estudiante['apellidos']) ?></td>
                                <td><?= htmlspecialchars($estudiante['nombres']) ?></td>
                                <td><?= htmlspecialchars($estudiante['dni']) ?></td>
                                <td><?= htmlspecialchars($estudiante['grado']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">No hay datos disponibles</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>