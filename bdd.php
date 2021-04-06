<?php
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_DATABASE', 'tchat');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('SALT', '#^|aJTo13!ù%');

// On vérifie les données
try {
    $bdd = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec("SET NAMES 'utf8'");
}
catch(Exception $e)
{
    echo 'Erreur de connexion PDO !';
    echo $_SERVER['PHP_SELF'];
    echo $_SERVER['SCRIPT_FILENAME'];
    die();

    // throw new Exception('dzauhdiauzhgdiaz');
}