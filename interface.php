<?php
    
    interface Animal{
        public function sound();
    }
    class Dog implements Animal{
        public function sound(){
            echo "Woof! Woof! <br>";
        }
    }
    class Cat implements Animal{
        public function sound(){
            echo "Meow! Meow! <br>";
        }
    }

    $d1 = new Dog();
    $c1 = new Cat();

    echo "Dog: ";
    $d1->sound();
    echo "Cat: ";
    $c1->sound();

?>
