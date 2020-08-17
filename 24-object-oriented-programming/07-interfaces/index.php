<?php


// With an interface we define which methods are going to be
// inside every instance of a class.
//
// However, we don't define the exact logic inside every method
//
// We do that inside every instance of the class

interface Computer {
    public function run();
    public function shutDown();
    public function reset();
}

class iMac implements Computer {
    private $model;
    
    function getModel() {
        return $this->model;
    }

    function setModel($model) {
        $this->model = $model;
    }
    
    function run(){
        return "running...";
    }
    
    function shutDown() {
        return "shutting down...";
    }
    
    function reset() {
        return "performing a reset...";
    }


}

$maquintosh = new iMac();
$maquintosh->setModel('Macbook PRO 2019');

var_dump($maquintosh->getModel());