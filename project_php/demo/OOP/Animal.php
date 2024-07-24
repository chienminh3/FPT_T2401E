<?php
    abstract class Animal{
        public $color = 'blue';
        abstract public function add();
        public function test() {
            echo "TEST";
        }
    }

    interface interface1{
        public function interf1();
    }

    

    class Dog extends Animal implements interface1 {
        public function add() {
            echo "1000<br>";
        }

        public function interf1()
        {
            echo "interface 1";
        }
    }


    $dog = new Dog();
    $dog->add();
    $dog->test();




?>