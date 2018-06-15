<?php

$names = array('Mark','Prateek','John','Bob');

//You can add a new key
$names[4] = 'Johnny';

echo $names[0];


// Print all the names in the names array
print_r($names);


// Associative arrays in PHP(Here we define our own key)
$names = array('Mark'=>56,'John'=>23);
echo 'Weight of Mark is'.$names['Mark'].'<br>';
print_r($names);


// Multidimensional arrays
//Combining multidimensional arrays with assoc arrays
$students = array(array('Name' => 'Mark',
                        'Age' =>15,
                        'Marks' => 15),
                  array('Name' => 'John',
                        'Age' => 20,
                        'Marks' => 23),
                  array('Name' => 'Tom',
                        'Age' => 21,
                        'Marks' => 12));

echo $students[0]['Name'];
echo $students[0]['Age'];




?>