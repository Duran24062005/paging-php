<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginación</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <div class="contenedor">
        <h1>Artículos</h1>
        <section class="articulos">
            <ul>
                <?php foreach ($articulos as $articulo): ?>
                    <li><?= $articulo['id'] . '.- ' . $articulo['info'] ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="paginacion">
            <ul>
                <!-- Botón Anterior -->
                <?php if ($pagina === 1): ?>
                    <li class="disabled"><a href="#" aria-disabled="true">&laquo;</a></li>
                <?php else: ?>
                    <li><a href="?pagina=<?= $pagina - 1 ?>">&laquo;</a></li>
                <?php endif; ?>

                <!-- Páginas -->
                <?php for ($i = 1; $i <= $numeroPaginas; $i++): ?>
                    <li class="<?= $pagina === $i ? 'active' : '' ?>">
                        <a href="?pagina=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>

                <!-- Botón Siguiente -->
                <?php if ($pagina === $numeroPaginas): ?>
                    <li class="disabled"><a href="#" aria-disabled="true">&raquo;</a></li>
                <?php else: ?>
                    <li><a href="?pagina=<?= $pagina + 1 ?>">&raquo;</a></li>
                <?php endif; ?>
            </ul>
        </section>
    </div>
</body>
</html>
