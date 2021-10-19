<?php

class language {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function intro () {
        echo "This is " . $this->name . " language.<br/>";
    }
}
class python extends language {

}

class javascript extends language {

}

class php extends language {

}

$python_obj = new python('python');
$javascript_obj = new javascript('javascript');
$php_obj = new php('php');

$python_obj->intro();
$javascript_obj->intro();
$php_obj->intro();

?>