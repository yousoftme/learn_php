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
    abstract protected function howToPrint();

    public function __construct($name) {
        $this->name = $name;
    }

    public function intro () {
        echo "This is " . $this->name . " language.<br/>";
    }
    public static function showVersion ($version) {
        echo "Version => ". $version ."<br />";
    }

    public function __call($name, $arguments)
    {
        if ($name == 'howToUseIterators') {
            if (in_array('for', $arguments)) {
                echo '<pre><code>
                        for ($x = 0; $x <= 10; $x++) {
                            echo "The number is: $x <br>";
                        } 
                    </code></pre>';
            }
            if (in_array('foreach', $arguments)) {
                echo '<pre><code>
                        $colors = array("red", "green", "blue", "yellow");

                        foreach ($colors as $value) {
                            echo "$value <br>";
                        }
                    </code></pre>';
            }
            if (in_array('while', $arguments)) {
                echo '<pre><code>
                        $x = 0;

                        while($x <= 100) {
                            echo "The number is: $x <br>";
                            $x+=10;
                        } 
                    </code></pre>';
            }
            if (in_array('dowhile', $arguments)) {
                echo '<pre><code>
                        $x = 1;

                        do {
                            echo "The number is: $x <br>";
                            $x++;
                        } while ($x <= 5);
                    </code></pre>';
            }
        } elseif ($name == 'howToUseConditions') {
            if ($arguments[0] == 'python') {
                if (in_array('ifelseif', $arguments)) {
                    echo '<pre><code>
                    a = 200
                    b = 33
                    if b > a:
                      print("b is greater than a")
                    elif a == b:
                      print("a and b are equal")
                    else:
                      print("a is greater than b")
                        </code></pre>';
                }
            } else {
                if (in_array('ifelseif', $arguments)) {
                    echo '<pre><code>
                            $t = date("H");
    
                            if ($t < "10") {
                                echo "Have a good morning!";
                            } elseif ($t < "20") {
                                echo "Have a good day!";
                            } else {
                                echo "Have a good night!";
                            }
                        </code></pre>';
                }
                if (in_array('switch', $arguments)) {
                    echo '<pre><code>
                            $favcolor = "red";
    
                            switch ($favcolor) {
                            case "red":
                                echo "Your favorite color is red!";
                                break;
                            case "blue":
                                echo "Your favorite color is blue!";
                                break;
                            case "green":
                                echo "Your favorite color is green!";
                                break;
                            default:
                                echo "Your favorite color is neither red, blue, nor green!";
                            }
                        </code></pre>';
                }
            }
        }
    }
}

class Python extends Language implements Variable {
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

class Javascript extends Language implements Variable  {
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

class Php extends Language implements Variable  {
    use Comment;
    public function howToPrint()
    {
        echo 'echo "This is how to print in Python"<br/>';
    }
    public function checkType() {
        echo 'This is how to check type in php => gettype($a)<br/>';
    }
}

$python_obj = new Python('python');
$javascript_obj = new Javascript('javascript');
$php_obj = new Php('php');

$python_obj->intro();
Python::showVersion('3.10');
$python_obj->howToPrint();
$python_obj->howToComment();
$python_obj->checkType();
$python_obj->howToUseConditions('python', 'ifelseif');
echo '<br />';

$javascript_obj->intro();
Javascript::showVersion('ES2015');
$javascript_obj->howToPrint();
$javascript_obj->howToComment();
$javascript_obj->checkType();
echo '<br />';

$php_obj->intro();
Php::showVersion('8.1');
$php_obj->howToPrint();
$php_obj->howToComment();
$php_obj->checkType();
$php_obj->howToUseIterators('for', 'while');
echo '<br />';

?>