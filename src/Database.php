<?php
class Database {
    protected $connection;
    public function __construct(){
        $dsn = "mysql:host=mysql;port=3306;dbname=note;charset=utf8mb4";
        $this->connection = new PDO($dsn,'root','rootpassword',[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query){

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}