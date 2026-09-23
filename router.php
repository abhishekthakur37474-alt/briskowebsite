<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/');
$path = __DIR__ . $uri;

if ($uri !== '/' && is_file($path)) {
    return false;
}

$map = [
    '/' => '/index.php',
    '/index' => '/index.php',
    '/order' => '/order.php',
    '/franchise' => '/franchise.php',
    '/enquiry' => '/enquiry.php',
    '/contact' => '/contact.php',
    '/privacy' => '/privacy.php',
    '/terms' => '/terms.php',
];

if (isset($map[$uri])) {
    require __DIR__ . $map[$uri];
    return true;
}

if (preg_match('/\.php$/', $uri) && is_file($path)) {
    require $path;
    return true;
}

http_response_code(404);
header('Content-Type: text/plain; charset=utf-8');
echo 'Not found';
return true;
