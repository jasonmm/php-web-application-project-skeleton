#!/bin/sh
#
# Runs the built-in PHP web server with ./public/ as the document root and ./php-server-router.php
# as the script all requests are passed through initially.
#

php -S localhost:3000 -t ./public/ php-server-router.php
