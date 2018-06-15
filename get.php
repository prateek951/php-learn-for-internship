<?php
# Superglobal variable can be used anywhere in PHP SCRIPTS

if(isset($_GET["name"]) && isset($_GET["age"]) && isset($_GET["marks"])){
    $name = $_GET["name"];
    $age = $_GET["age"];
    $marks = $_GET["marks"];
    if(!empty($name) && !empty($age) && !empty("marks")){    
        echo $_GET["name"].'<br>';
        echo $_GET["age"].'<br>';
        echo $_GET["marks"].'<br>';
    }else{
    echo "Please enter all the fields";
}
   
}



?>