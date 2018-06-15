<?php

# Functions
    function simpleFunction(){
        echo 'Hello World';
    }
    simpleFunction();

    function sayHello($name = 'World'){
        echo "Hello $name".'<br>';
    }
    sayHello('Bob');
    sayHello();
    

    function addNumbers($num1,$num2){
        return $num1+$num2;
    }
    echo addNumbers(2,3);

    //By reference

    function addFive(&$num){
        $num += 10;
    }
    $my_number = 2;
    addFive($my_number);
    echo "Value: $my_number";




?>