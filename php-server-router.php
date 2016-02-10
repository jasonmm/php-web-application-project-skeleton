<?php
/**
 * Router for the built-in PHP server.
 *
 * https://stackoverflow.com/a/27384348
 */

try {
    if( file_exists(__DIR__ . '/public/' . $_SERVER['REQUEST_URI']) ) {
        return false;
    } else {
        include __DIR__ . '/public/index.php';
    }
} catch( Exception $e ) {
    echo 'exception caught by php-server-router: ' . $e->getMessage();
}
