<?php

abstract class Language {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }

    public function intro () {
        echo "This is " . $this->name . " language.<br/>";
    }

    abstract protected function howToPrint();

}

class python extends Language {
    public function howToPrint()
    {
        echo 'print("This is how to print in Python")<br/>';
    }
}

class javascript extends Language {
    public function howToPrint()
    {
        echo 'document.getElementById("demo").innerHTML = "This is how to print in Javascript"<br/>';
    }
}

class php extends Language {
    public function howToPrint()
    {
        echo 'echo "This is how to print in Python"<br/>';
    }
}

$python_obj = new python('python');
$javascript_obj = new javascript('javascript');
$php_obj = new php('php');

$python_obj->intro();
$python_obj->howToPrint();
echo '<br />';

$javascript_obj->intro();
$javascript_obj->howToPrint();
echo '<br />';

$php_obj->intro();
$php_obj->howToPrint();
echo '<br />';

?>