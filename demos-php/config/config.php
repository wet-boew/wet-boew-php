<?php
// Programmatically set the main config file so that the site will work regardless of where it is.
// Saves time when deploying a site to different servers for development.

if (file_exists(__DIR__ . '/../../../wetconfig.php')) {
    // One level up from wet-boew-php.
    require_once __DIR__ . '/../../../wetconfig.php';
} else if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/wetconfig.php')) {
    // In the webroot of the server.
    require_once $_SERVER['DOCUMENT_ROOT'] . '/wetconfig.php';
} else if (file_exists(__DIR__ . '/../../../wetconfig-'.$_SERVER['SERVER_NAME'].'.php')) {
    // Support for shared sites on different domains - One level up from wet-boew-php.
    require_once __DIR__ . '/../../../wetconfig-'.$_SERVER['SERVER_NAME'].'.php';
} else if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/wetconfig-'.$_SERVER['SERVER_NAME'].'.php')) {
    // Support for shared sites on different domains - In the webroot of the server.
    require_once $_SERVER['DOCUMENT_ROOT'] . '/-'.$_SERVER['SERVER_NAME'].'wetconfig.php';
} else {
    die('The wetconfig.php file is missing. See WET-BOEW-PHP documentation for help.');
}
