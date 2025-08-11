<?php 

namespace app\core;

class DbConnect{

    public $dbConnect;
    public function __construct($dsn, $user, $password, $options ){
        $this->dbConnect = new \PDO($dsn,$user,$password,$options) ;
    }
}