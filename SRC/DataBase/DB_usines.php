<?php

class UsineManager
{
    private $connection;

    public function __construct(DB_Connection $connection)
    {
        $this->connection = $connection;
    }

    public function getAllUsines()
    {
        $usines_Statement = $this->connection->prepare('SELECT * FROM usines');
        $usines_Statement->execute();
        $usines = $usines_Statement->fetchAll();
        return $usines;
    }
}

$usineManager = new UsineManager($connection);

$usines = $usineManager->getAllUsines();


// $usines_Statement = $connection->prepare('SELECT * FROM usines');
// $usines_Statement->execute();
// $usines = $usines_Statement->fetchAll();