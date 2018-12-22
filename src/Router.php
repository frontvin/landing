<?php

// add namespace
namespace src;

// created Router class
class Router {

    private $fileManager;
    // added Router private variable $routes that stores associative array
    private $routes = [
        '/'=>'getIndexPage',
        '/getorders' => 'getOrders',
        '/saveorder' => 'saveOrder',
        '/adminpage' => 'adminPage'
    ];

    // constructor for filemanager
    function __construct($fileManager)
    {
        $this->fileManager = $fileManager;
    }

    // method for getting uri and return it
    public function run(){
        $methodName = $this->routes[$_SERVER['REQUEST_URI']] ?? 'getIndexPage';
        if(!method_exists($this, $methodName)) {
            return;
        }
        $this->$methodName();
    }

    // method for showing index page
    private function getIndexPage()
    {   
        echo file_get_contents('./assets/index.html');

    }
    
    private function saveOrder()
    {
        $this->fileManager->saveOrder();
    }

    private function getOrders()
    {
        echo "some test";
    }

    private function adminPage()
    {

    }
}

?>