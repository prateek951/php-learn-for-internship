<?php 
    //Check for the posted data
    // if(filter_has_var(INPUT_POST,'data')){
    //     echo 'Data Found';
    // }else{
    //     echo 'No data';
    // }

    //For validation which prevents us from using regex
    if(filter_has_var(INPUT_POST,'data')){
        $email = $_POST['data'];
        //Remove illegal characters
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';
        if(filter_var($email,'data',FILTER_VALIDATE_EMAIL)){
            echo 'The email is valid';
        }else{
            echo 'The email is not valid';
        }
    }

    // Different validations that we can do
    // FILTER_VALIDATE_BOOLEAN
    // FILTER_VALIDATE_EMAIL
    // FILTER_VALIDATE_FLOAT
    // FILTER_VALIDATE_INT
    // FILTER_VALIDATE_IP
    // FILTER_VALIDATE_REGEXP
    // FILTER_VALIDATE_URL
    // FILTER_SANITIZE_EMAIL
    // FILTER_SANITIZE_ENCODED
    // FILTER_SANITIZE_NUMBER_FLOAT
    // FILTER_SANITIZE_SPECIAL_CHARS
    // FILTER_SANITIZE_STRING
    // FILTER_SANITIZE_URL
    $var = 22;
    if(filter_var($var,FILTER_VALIDATE_INT)){
        echo $var. 'is a number';
    }else{
        echo $var.'is not a number';
    }
    //Sanitize into a number by stripping the characters
    $var = '33k2jj32k23213232kewdwfndsv';
    var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));

    // Using the filter array
    $filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array("filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        ))
        );
        print_r(filter_input_array(INPUT_POST,$filters));

        // Using the filter var array
    $arr = array(
        "name" => "Prateek Madaan",
        "age" => 21,
        "email" => "prince.cenation@gmail.com"
    );

    $filters = array(
        "name" => array("filter" => FILTER_CALLBACK,
            "options" => "ucwords"
    ),
    "age" => array("filter" => FILTER_VALIDATE_INT,
    "options" => array("min_range" => 1,"max_range" => 120)),
    "email" => FILTER_VALIDATE_EMAIL
);
print_r(filter_var_array($arr,$filters));
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" placeholder="Enter the data" name="data">
    <input type="text" placeholder="Enter the data 2" name="data2">
    <button type="submit">Submit</button>
</form>