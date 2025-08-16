<?php
namespace app\core;

use App\core\DbConnect;
class Model {

     protected $db;

    public function __construct($db = NULL) {
        if (is_object($db)) {
            $this->db = $db;
        } else {
            $this->db = new DbConnect();
            $this->db->setAttribute(\PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES UTF8');
        }
     }
     public function query($sql) {
          $result = $this->db->query($sql);
         return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}
  

