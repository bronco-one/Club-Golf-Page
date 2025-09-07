<?php
//This is default controller.

namespace app\controllers;
use App\core\Controller;
use App\core\DbConnect;
use App\core\Model;

//use App\core\View;

class Home extends Controller{
    
    
    public function __construct(){
       parent::__construct();
       
    }
    public function index(){
        
       
      
        $this->view->render('home/index');
    }
}
