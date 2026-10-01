<?php
declare(strict_types=1);
$url=(string)(getenv('DATABASE_URL')?:getenv('POSTGRES_URL')?:'');
try {
    $parsedUrl = parse_url($url);

    if (!$parsedUrl || empty($parsedUrl['host'])) {
        throw new RuntimeException('Configura DATABASE_URL.');
    }

    $query = [];
    parse_str($parsedUrl['query'] ?? '', $query);
    $database = new PDO(
        'pgsql:host=' . $parsedUrl['host'] . ';port=' . ($parsedUrl['port'] ?? 5432) . ';dbname=' . ltrim($parsedUrl['path'] ?? '', '/') . ';sslmode=' . ($query['sslmode'] ?? 'require'),
        urldecode($parsedUrl['user'] ?? ''),
        urldecode($parsedUrl['pass'] ?? ''),
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (Throwable $exception) {
    error_log($exception->getMessage());
    http_response_code(503);
    exit('Error de conexión con PostgreSQL. Revisa DATABASE_URL y que la tabla informacion exista.');
}

$pagina = max(1, (int) ($_GET['pagina'] ?? 1));
$porPagina = 5;
$totalArticulos = (int) $database->query('SELECT COUNT(*) FROM informacion')->fetchColumn();
$numeroPaginas = max(1, (int) ceil($totalArticulos / $porPagina));
$pagina = min($pagina, $numeroPaginas);
$statement = $database->prepare('SELECT id, info FROM informacion ORDER BY id LIMIT :lim OFFSET :off');
$statement->bindValue(':lim', $porPagina, PDO::PARAM_INT);
$statement->bindValue(':off', ($pagina - 1) * $porPagina, PDO::PARAM_INT);
$statement->execute();
$articulos = $statement->fetchAll();

require __DIR__ . '/index.view.php';
