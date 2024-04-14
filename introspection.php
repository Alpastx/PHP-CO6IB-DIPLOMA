<?php
    
    class Shape{
        public function area(){}
    }
    class Rectangle extends Shape{
        function __construct($length, $breadth){
            $this->l = $length;
            $this->b = $breadth;
        }
        public function area(){
            echo "Parent Class is: " . get_parent_class($this) . "<br>";
            echo "Current Class is: " . get_class($this) . "<br>";
            echo "Methods of the class are: <br>";
            foreach (get_class_methods($this) as $method){
                echo $method . ",";
            }
            echo "<br>";
            echo "Area: " . $this->l * $this->b;
        }
    }
    $r1 = new Rectangle(2,3);
    $r1->area();

?>
