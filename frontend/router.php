<?php
// Local development router for PHP built-in web server:
// Usage: php -S localhost:8000 router.php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$filePath = __DIR__ . $uri;

// 1. If static file or asset exists, serve it directly
if ($uri !== '/' && file_exists($filePath) && !is_dir($filePath)) {
    return false;
}

// 2. Homepage
$clean = trim($uri, '/');
if ($clean === '' || $clean === 'index' || $clean === 'index.php') {
    require __DIR__ . '/index.php';
    return true;
}

// 3. If file exists in pages/ folder (e.g. /find-doctor -> pages/find-doctor.php)
$pagePath = __DIR__ . '/pages/' . $clean . '.php';
if (file_exists($pagePath)) {
    require $pagePath;
    return true;
}

// 4. If file exists in root (e.g. /about -> about.php)
$rootPhp = __DIR__ . '/' . $clean . '.php';
if (file_exists($rootPhp)) {
    require $rootPhp;
    return true;
}

// 5. 404 fallback
http_response_code(404);
echo "<!doctype html><html lang='bn'><head><meta charset='utf-8'><title>পেজ পাওয়া যায়নি</title><link href='https://fonts.maateen.me/solaiman-lipi/font.css' rel='stylesheet'><style>body{font-family:'SolaimanLipi',sans-serif;text-align:center;padding:50px;color:#443962;}</style></head><body><h1>৪৪৪ — পেজটি পাওয়া যায়নি</h1><p><a href='/'>হোমপেজে ফিরে যান</a></p></body></html>";
return true;

