<?php

class Configure{
    protected $config = [
        'host' => 'mysql',
        'port' => 3306,
        'dbname' => 'note',
        'charset' => 'utf8mb4'
    ];
    public function __construct(){
        
    }
}