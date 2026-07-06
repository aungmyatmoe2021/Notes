<?php

namespace Core;
class Configure{
    protected $config = [
        'DatabaseConnection' => [
            'host' => 'mysql',
            'port' => 3306,
            'dbname' => 'note',
            'charset' => 'utf8mb4'
        ],
        'DatabaseSecret' => [ 
            'username' => 'root',
            'password' => 'rootpassword'
        ]
    ];

    protected $configSecret = [
    ];

    public function getConnection(){
        return $this->config['DatabaseConnection'];
    }

    public function getSecret(){
        return $this->config['DatabaseSecret'];
    }
}