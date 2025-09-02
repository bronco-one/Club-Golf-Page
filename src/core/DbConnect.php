<?php 

namespace app\core;

use PDO;
use Dotenv\Dotenv;



  class DbConnect  extends PDO {

   
    private $db_connection;
    private $db_host;
    private $db_database;
    private $db_user;
    private $db_password;
	public function __construct(){

    $dotenv = Dotenv::createImmutable(dirname(dirname(__DIR__)));
    $dotenv->load();

    $this->db_connection = $_ENV['DB_CONNECTION'];
    $this->db_host = $_ENV['DB_HOST'];
    $this->db_database = $_ENV['DB_DATABASE'];
    $this->db_user = $_ENV['DB_USERNAME'];
    $this->db_password = $_ENV['DB_PASSWORD'];
    
    
         parent::__construct("$this->db_connection:host=$this->db_host;dbname=$this->db_database"
         ,$this->db_user,$this->db_password);
          
	
    }

}
