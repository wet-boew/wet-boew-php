<?php
// Programmatically set the main config file so that the site will work regardless of where it is.
// Saves time when deploying a site to different servers for development.

if (file_exists(__DIR__ . '/../../../../wetconfig.php')) {
    require_once __DIR__ . '/../../../../wetconfig.php';
} else if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/wetconfig.php')) {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/wetconfig.php';
} else {
    die ('The wetconfig.php file is missing. See WET-BOEW-PHP documentation for help.');
}