<?php
    class Person {
        static $name = "T2401E";
        public $age = 20;
        const message = "<br>const message";
        public $address;
        public $numbPhone;

        protected $className = "T2401E";
        private $vaLPrivate = "Private exits";

        public function __construct()
        {
            $args = func_get_args();
            $numArgs = func_num_args();
            if (method_exists($this, $function = "__construct".$numArgs)) {
                call_user_func_array([$this, $function], $args);
            }
        }

        function __construct1($age)
        {
            $this->age = $age;
        }

        function __construct2($age, $address)
        {
            $this->age = $age;
            $this->address = $address;
        }

        function __construct3($age, $address, $numbPhone)
        {
            $this->age = $age;
            $this->address = $address;
            $this->numbPhone = $numbPhone;
        }

        // create instance in function
        static function newInstance($age, $numbPhone) {
            $p = new self();
            $p->age = $age;
            $p->numbPhone = $numbPhone;
            return $p;
        }

        function getProtectedAndPrivateVariable() {
            echo "- protected: ".$this->className."<br>"."- private: ".$this->vaLPrivate;
        }

        function justDoIt() {
            echo "Hi";
        }
    }

    // clas Students duoc ke thua tu Person 
    class Students extends Person  {
        function justDoIt() {
            echo "Hi Le Ngoc Anh :))<br>";
        }    

        function overLoad($className) {
            echo $this->className = $className;
        }
    }

    echo Person::$name;
    echo Person::message;
    $p = new Person(30, "sai Gon", "01234");
    $p->age;
    echo "<br>";
    echo $p->age."<br>";
    echo $p->address."<br>";
    echo $p->numbPhone."<br>";
    // $p->getProtectedAndPrivateVariable();
    echo "<br>";
    $pp = Person::newInstance("50", "Pham The Hai");
    print_r($pp);
    echo "<br>";
    echo "<br>";

    
    $std = new Students("T2401E");
    $std->justDoIt(); 
    $std->overLoad("OverLoad<br>");
    $std->getProtectedAndPrivateVariable();


    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";



?>