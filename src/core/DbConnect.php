<?php 

namespace app\core;

use PDO;



  class DbConnect  extends PDO {

    private $dsn="mysql:host=localhost;dbname=club";
    private $db_user='root';
    private $db_password='pingwin67A';
	public function __construct(){

         parent::__construct($this->dsn,$this->db_user,$this->db_password);
          
	
    }

}
