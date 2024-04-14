<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$path = isset($_GET['q']) ? $_GET['q'] : '.';

$path = basename($path);

if (file_exists($path) && is_dir($path)) {

    if (strpos($path, '.') !== false) {
        echo "Invalid directory path.";
    } else {
        print "<pre>";
        print_r(scandir($path));
        print "</pre>";
    }
} else {
    echo "Invalid directory path.";
}
?>
