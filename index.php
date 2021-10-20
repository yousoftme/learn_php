<?php

trait Comment {
    public function howToComment() 
    {
        echo '<pre><code>
        # this is a single line comment

        // this is also a single line comment

        /*
        this is multiline comment
        */
        </code></pre>';
    }
}
interface Variable {
    public function checkType();
}

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

class python extends Language implements Variable {
    use Comment;
    public function howToPrint()
    {
        echo 'print("This is how to print in Python")<br/>';
    }
    public function checkType() {
        echo 'This is how to check type in python => type(a)<br/>';
    }
    public function howToComment() 
    {
        echo '<pre><code>
        # this is a single line comment

        """
        This is a comment
        written in
        more than just one line
        """
        </code></pre>';
    }
}

class javascript extends Language implements Variable  {
    use Comment;
    public function howToPrint()
    {
        echo 'document.getElementById("demo").innerHTML = "This is how to print in Javascript"<br/>';
    }
    public function checkType() {
        echo 'This is how to check type in javascript => typeof(a)<br/>';
    }
    public function howToComment() 
    {
        echo '<pre><code>
        // this is also a single line comment

        /*
        this is multiline comment
        */
        </code></pre>';
    }
}

class php extends Language implements Variable  {
    use Comment;
    public function howToPrint()
    {
        echo 'echo "This is how to print in Python"<br/>';
    }
    public function checkType() {
        echo 'This is how to check type in php => gettype($a)<br/>';
    }
}

$python_obj = new python('python');
$javascript_obj = new javascript('javascript');
$php_obj = new php('php');

$python_obj->intro();
$python_obj->howToPrint();
$python_obj->howToComment();
$python_obj->checkType();
echo '<br />';

$javascript_obj->intro();
$javascript_obj->howToPrint();
$javascript_obj->howToComment();
$javascript_obj->checkType();
echo '<br />';

$php_obj->intro();
$php_obj->howToPrint();
$php_obj->howToComment();
$php_obj->checkType();
echo '<br />';

?>