<?php   
    //Message vars
    $msg = '';
    $msgClass = '';
    //Check for submit 
    if(filter_has_var(INPUT_POST,'submit')){
        // echo 'Submitted';
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        //Check for the required fields
        if (!empty($email) && !empty($name) && !empty($message)) {
            //Passed
            // echo "Passesd";
            if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
                //Failed
                $msg = 'Please enter a valid email';
                $msgClass = 'alert-danger';
            }else{
                //Passed
                //Recipient mail
                $toEmail = 'support@prateek.com';
                //Subject
                $subject = 'Contact Request From'.$name;
                //Body of the email
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
                ';
                //Email headers
                $headers = "MIME-Version: 1.0"."\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
                $headers .= "From: ".$name."<".$email.">"."\r\n";
                if(mail($toEmail,$subject,$body,$headers)){
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                }else{
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
            }
        }else{
            //Failed
            $msg = 'Please fill in all the fields';
            $msgClass = 'alert-danger';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
    
    <div class="navbar">
        <a class="navbar-brand" href="#">Title</a>
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Link</a>
            </li>
        </ul>
    </div>
    <div class="container">
    <?php if($msg != ''):?>
        <div class="alert <?php $msgClass;?>">
            <?php  echo $msg;?>
        </div>
    <?php endif?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" 
            placeholder="Enter the name" 
            name="name" 
            class="form-control" 
            value="<?php echo isset($_POST['name'])? $name : '';?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" 
            placeholder="Enter the email" 
            name="email" 
            class="form-control" 
            value="<?php echo isset($_POST['email'])? $email : '';?>">
        </div>
        <div class="form-group">
            <label for="">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control">
              <?php echo isset($_POST['message'])? $message : '';?>
            </textarea>
        </div>
        <br><br>
        <input type="submit" name="submit" class="btn btn-primary">
    </form>
    </div>
</body>
</html>