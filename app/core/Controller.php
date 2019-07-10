<?php
namespace app\core;

class Controller{
     public function load($viewName, $viewData=array()){
       extract($viewData); 
       include "app/views/" . $viewName .".php";
   }
}
