<?php

class python {
    private $name = 'python';
    
    public function intro () {
        echo "This is " . $this->name . " language.<br/>";
    }
}

class javascript {
    private $name = 'javascript';
    
    public function intro () {
        echo "This is " . $this->name . " language.<br/>";
    }
}

class php {

    private $name = 'php';
    
    public function intro () {
        echo "This is " . $this->name . " language.<br/>";
    }

}

$python_obj = new python();
$javascript_obj = new javascript();
$php_obj = new php();

$python_obj->intro();
$javascript_obj->intro();
$php_obj->intro();

?>