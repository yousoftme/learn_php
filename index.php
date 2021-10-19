<?php

class php {

    private $name = 'php';
    
    public function intro () {
        echo "This is " . $this->name . " language";
    }
}
$php_obj = new php();
$php_obj->intro();
?>