<?php
namespace app\core;

use App\core\View;
class Controller {

    public $view;
    public function __construct() {
        
        $this->view = new View();
        session_start();

    }
    

}
