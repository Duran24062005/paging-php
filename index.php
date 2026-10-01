<?php

try {
    //code...
    $DB = new PDO('mysql:host=localhost;dbname=prueba_d', 'alexidg', '12345');

} catch (PDOException $e) {
    //throw $th;
    echo "Error de conexión: " . $e->getMessage();
    die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1; 
$por_pagina = 5;

$inicio = ($pagina > 1) ? ($pagina *  $por_pagina) - $por_pagina : 0;

$articulos = $DB->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM informacion
LIMIT $inicio, $por_pagina
");
$articulos->execute();
$articulos = $articulos->fetchAll();

// echo '<pre>';
// print_r($articulos);
// echo '</pre>';

if (!$articulos) {
    # code...
    header('Location: http://localhost/Udemy_Php/practica/paginacion/index.php');
}

$totalArticulos = $DB->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];
// echo $totalArticulos;

$numeroPaginas = ceil($totalArticulos / $por_pagina);
// echo $numeroPaginas;


require 'index.view.php';
?>