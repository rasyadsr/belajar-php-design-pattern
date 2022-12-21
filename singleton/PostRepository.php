<?php 

require_once __DIR__ .'/Database.php';

class PostRepository {

    private PDO $connection;

    public function __construct()
    {
        $this->connection = Database::connect();   
    }

    public function fetchAll(): array
    {
        $statement = $this->connection->query("SELECT * FROM table");

        $array = [];
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
           $array[] = $row;
        }

        return $array;
    }

}