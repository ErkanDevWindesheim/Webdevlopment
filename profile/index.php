<?php

// pak de url
$url = trim($_SERVER['REQUEST_URI'], '/');

// Switch statement met de Url om de pagina selecteren.
switch ($url) {
    case str_contains($url, '/' || __DIR__):
        require __DIR__ . '/views/routes/index.view.php';
        break; 
    case str_contains($url, 'contact'):
        require __DIR__ . '/views/routes/contact.view.php';
        break; 
    case str_contains($url, 'about'):
        require __DIR__ . '/views/routes/about.view.php';
        break;
    default:
        // error pagina
        require __DIR__ . '/views/routes/404.view.php'; // Ensure you have a 404 page
        break;
}
