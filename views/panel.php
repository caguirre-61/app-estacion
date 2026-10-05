<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Estaciones</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="navbar">
        <a class="brand" href="index.php">App <span>Estación</span></a>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="index.php?action=panel">Estaciones</a>
        </nav>
    </header>

    <main>
        <h1>Panel de Estaciones <span class="accent">Meteorológicas</span></h1>
        <p class="lead">Seleccioná una estación para ver su información.</p>

        <div class="grid">
            <?php foreach ($estaciones as $e): ?>
                <a class="card" href="index.php?action=detalle&id=<?= $e['id'] ?>">
                    <div class="icon">🌤️</div>
                    <h3><?= htmlspecialchars($e['apodo']) ?></h3>
                    <div class="row"><strong>Ubicación:</strong> <?= htmlspecialchars($e['ubicacion']) ?></div>
                    <span class="badge">👁 <?= $e['visitas'] ?> visitas</span>
                </a>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>App Estación · Monitoreo meteorológico</footer>
</body>
</html>