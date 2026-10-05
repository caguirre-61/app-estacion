<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la Estación</title>
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
        <div class="detail">
            <h1>Detalle de la <span class="accent">Estación</span></h1>

            <?php if ($estacion): ?>
                <div class="card">
                    <div class="icon">🌡️</div>
                    <h3><?= htmlspecialchars($estacion['apodo']) ?></h3>
                    <div class="row"><strong>Apodo:</strong> <?= htmlspecialchars($estacion['apodo']) ?></div>
                    <div class="row"><strong>Ubicación:</strong> <?= htmlspecialchars($estacion['ubicacion']) ?></div>
                </div>
            <?php else: ?>
                <div class="alert">Estación no encontrada.</div>
            <?php endif; ?>

            <a class="btn btn-outline" href="index.php?action=panel">← Volver al Panel</a>
        </div>
    </main>

    <footer>App Estación · Monitoreo meteorológico</footer>
</body>
</html>