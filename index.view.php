<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginación</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    

<div class="contenedor">
    <h1>Articulos</h1>
    <section class="articulos">
        <ul>
            <?php foreach ($articulos as $lista): ?>
                <li><?php echo $lista['id'] . '.- ' . $lista['info'] ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="paginacion">
        <ul>
            <!-- Botón Anterior -->
            <?php if ($pagina == 1): ?>
                <li class="disabled"><a href="#">&laquo;</a></li>
            <?php else: ?>
                <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
            <?php endif; ?>

            <!-- Páginas -->
            <?php 
            
            for ($i=1; $i <= $numeroPaginas ; $i++) { 
                if ($pagina == $i) {
                    echo "<li class='active'><a href='?pagina=$i'>$i </a></li>";                
                } else {
                    echo "<li><a href='?pagina=$i'>$i </a></li>";
                }
                
            }

            ?>

            <!-- Botón Siguiente -->
            <?php if ($pagina == $numeroPaginas): ?>
                <li class="disabled"><a href="">&raquo;</a></li>
            <?php else: ?>
                <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
            <?php endif; ?>
        </ul>
    </section>
</div>


</body>
</html>