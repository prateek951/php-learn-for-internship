<?php
for ($i=0; $i < 10; $i++) { 
    echo "Programming Knowledge".$i."<br>";
}

$a = 0;
while ($a <= 10) {
    echo $a;
    $a++;
}

// foreach loop in PHP
$names = array('Mark','John','Tom','Patrick');

foreach($names as $name){
    # code...
    echo $name."<br>";
}

//Iterating over multidimensional array

$students = array(array('Name' => 'Mark',
                        'Age' =>15,
                        'Marks' => 15),
                  array('Name' => 'John',
                        'Age' => 20,
                        'Marks' => 23),
                  array('Name' => 'Tom',
                        'Age' => 21,
                        'Marks' => 12));

foreach ($students as $student => $innerelements) {
    # code...
    foreach ($innerelements as $item) {
        # code...
        echo $item."<br>";
    }
}

?>