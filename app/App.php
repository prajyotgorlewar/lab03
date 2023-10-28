<?php 
 namespace Company\Utility;
 use Company\Utility\Controller\mainController;

 class App 
 {
    public static function init()
    {
        echo " App is working";
        $controller = new mainController();
        $controller->show();
    }
 }