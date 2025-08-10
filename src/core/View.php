<?php 

namespace app\core;

class View {

public  function render($content) {
   
         include dirname(__DIR__).'/views/layouts/layouts.php' ;
         

    }
}
