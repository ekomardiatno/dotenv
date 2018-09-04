<?php

require_once'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

print $_ENV['DB_HOST'];
print "<br>";
print $_ENV['DB_DATABASE'];
print "<br>";
print $_ENV['DB_USERNAME'];
print "<br>";
print $_ENV['DB_PASSWORD'];