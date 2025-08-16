<?php 

namespace app\core;

class View {
    public $data = [];

public  function render($content, $data = null) {
   
      if (is_array($data) && !empty($data)) {
    extract($data);
  }
    
    ob_start();
    include dirname(__DIR__).'/views/layouts/layouts.php' ;
   // return ob_get_clean();

    }
}
