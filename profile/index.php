<?php

// pak de url
$url = trim(string: $_SERVER['REQUEST_URI'], characters: '/');

// Switch statement met de Url om de pagina selecteren.
switch (true) {
    case $url === '' || $url === '/':
        require __DIR__ . '/views/routes/index.view.php';
        break;
    case str_contains(haystack: $url, needle: 'contact'):
        require __DIR__ . '/controllers/ContactController.php';
        $controller = new ContactController();
        if ($url === 'submit-contact') {
            $controller->submitContact(); // handel de form.
        } else {
            require __DIR__ . '/views/routes/contact.view.php';
        }
        break;
    case str_contains(haystack: $url, needle: 'about'):
        require __DIR__ . '/views/routes/about.view.php';
        break;
    case str_contains(haystack: $url, needle: 'gallery'):
        require __DIR__ . '/views/routes/gallery.view.php';
        break;
    case str_contains($url, 'appointment'):
        require __DIR__ . '/controllers/AppointmentController.php';
        $controller = new AppointmentController();
        if ($url === 'submit-appointment') {
            $controller->submitForm(); // Handle appointment form submission
        } else {
            require __DIR__ . '/views/routes/appointment.view.php';
        }
        break;
    default:
        // error pagina
        require __DIR__ . '/views/routes/404.view.php'; // verkeerde url
        break;
}
