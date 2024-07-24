<?php
    $b = 20;
    function add() {
        static $a = 10;
        $a += 10;
        $GLOBALS['b'] += 10;

        echo $a."<br>";
        echo $GLOBALS['b'];
    }
    add();

    function add1($numb1, $numb2) : string {
        echo "<br>";
        return $numb1 + $numb2;
    }
    echo add1(4, 7);
    
    function cobyreferences($numb1, $numb2) {
        echo $numb1, $numb2;
    }
    

    // cookies
    $name = "Name";
    $value = "Hello";
    setcookie($name, $value, time() + 10, "/");
    $_COOKIE[$name] = $value;
    if (!isset($_COOKIE[$name]) && !isset($_COOKIE[$value])) {
        echo "<br>";
        echo $name." "."is not set !";
    } else {
        echo "<br>";
        echo $name." "."is set";
    }

    // sessions
    session_start();
    // sdet session variables
    $_SESSION["myGF"] = "le ngoc anh";
    $_SESSION["favFruit"] = "le";
    if (!isset($_SESSION)) {
        echo "<br>";
        echo "khong ton tai session nao !";
    } else {
        echo "<br>";
        print_r("My girl friend is:"." ".$_SESSION["myGF"]);
        echo "<br>";
        print_r("Favorite fruit is"." ".$_SESSION["favFruit"]);
    }

?>