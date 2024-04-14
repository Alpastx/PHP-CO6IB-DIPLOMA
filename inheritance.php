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
            echo "Area: " . $this->l * $this->b;
        }
    }
    $r1 = new Rectangle(2,3);
    $r1->area();

?>
