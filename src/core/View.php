<?php 

namespace app\core;
use App\core\Model;
class View {
    public $data = [];

public  function render($content, $data = null) {
    $menu = $this->menu();
    if (is_array($data) && !empty($data)) {
    extract($data);
  }
    
    ob_start();
    include dirname(__DIR__).'/views/layouts/layouts.php' ;
   // return ob_get_clean();

    }
    public function menu(){
       $db = new Model();
       return $db->query("SELECT * FROM menu");
    }
}
