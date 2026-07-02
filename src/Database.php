<?php

require 'Configure.php';
class Database {
    protected $connection;
    protected $statement;
    public function __construct(){
        $configure = new Configure();

        $dsn = "mysql:". http_build_query($configure->getConnection(),'',';');

        $this->connection = new PDO($dsn,$configure->getSecret()['username'],$configure->getSecret()['password'],[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query,$param = []){



        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($param);

        return $this;
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findAll(){
        return $this->statement->fetchAll();
    }

    public function findOrFail(){
        $result = $this->find();
        if(!$result){
            absort(Response::NOT_FOUND);
        }
        return $result;
    }
}