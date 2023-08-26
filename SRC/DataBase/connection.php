<?php

class DB_Connection extends PDO
{
    public function __construct($dsn, $username, $password, $options = [])
    {
        parent::__construct($dsn, $username, $password, $options);
    }
}

try {
    $dsn = 'mysql:host=localhost;dbname=production_inc;charset=utf8';
    $username = 'root';
    $password = 'root';
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    $connection = new DB_Connection($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die('Erreur PDO : ' . $e->getMessage());
}
