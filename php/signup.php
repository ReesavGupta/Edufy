<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styleSignup.css">
    <title>Sign-Up</title>
    
</head>
<body>
 
<?php
//mysqli_connect(host, username, password, dbname)
$link = @mysqli_connect("localhost", "root", "", "signup") or die("ERROR: Unable to connect: " . mysqli_connect_error());

echo "<p>Connected successfully to the database.</p>";
?>
            <h3>Send data to database:</h3>
<?php

//get user inputs
$username = $_POST["username"];
$roll = $_POST["roll"];
$email = $_POST["email"];
$sem = $_POST["sem"];
$password = $_POST["password"];
$c_password = $_POST["c_password"];
$id = $_POST["id"];


//error messages
$missingUsername= "<p><strong>Please enter your Username!</strong></p>";
$missingRoll= "<p><strong>Please enter your roll no.</strong></p>";
$missingemail = "<p><strong>Please enter your email!</strong></p>";
$invalidemail = "<p><strong>Please enter a valid email address!</strong></p>";
$missingPassword = "<p><strong>Please enter a password!</strong></p>";
$missingC_Password = "<p><strong>Please confirm your password!</strong></p>";
$missingsem = "<p><strong>Please enter your semester!</strong></p>";

if($_POST["submit"]){
 //check for errors

    if(!$username){
        $errors .= $missingUsername;   
    }else{
         $username = filter_var($username, FILTER_SANITIZE_STRING);  
    }
    if(!$roll){
        $errors .= $missingRoll;   
    }else{
         $roll = filter_var($roll, FILTER_SANITIZE_STRING);  
    }
    if(!$email){
        $errors .= $missingemail;   
    }else{
         $email = filter_var($email, FILTER_SANITIZE_EMAIL); 
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors .= $invalidemail;   
        }
    }
    if(!$password){
        $errors .= $missingPassword;   
    }
    if(!$c_password){
    	$errors .= $$missingC_Password;
    }
    if(!$sem){
    	$errors .= $missingsem;
    } 
    if($errors){
        $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
        echo $resultMessage;
    }else{
        //no errors, prepare variables for the query
        $tblname = "users";
        $username = mysqli_real_escape_string($link, $username);
        $roll = mysqli_real_escape_string($link, $roll);
        $email = mysqli_real_escape_string($link, $email);
        $sem = mysqli_real_escape_string($link, $email);
        $password = mysqli_real_escape_string($link, $password);
       // $password = md5($password);
        $missingC_Password = md5($c_password);
        //execute insert query
        if(!$id){
            $sql = "INSERT INTO signup (username, roll, email, sem, password, c_password ) VALUES ('$username', '$roll', '$email','$sem', '$password', '$c_password')";   
        }else{
            $sql = "INSERT INTO signup (username, roll, email, sem, password, c_password,id) VALUES ('$username', '$roll', '$email','$sem', '$password', '$c_password','$id')";   
        }
        if(mysqli_query($link, $sql)){
            $resultMessage = '<div class="alert alert-success">Data added successfully to the database table</div>';
            echo $resultMessage;
        }else{
            $resultMessage = '<div class="alert alert-warning">ERROR: Unable to excecute: ' .$sql. '. ' . mysqli_error($link). '</div>';
            echo $resultMessage;
        }
    }
    
}

?>



    <div class="login-container">
        <div class="avtar"></div>
        <div class="title">Sign-Up Form</div>
        <div class="sub-title">
            Edufy</div>
        <div class="fields">
            <form action="signup.php" method="post"> 
                <div class="username">
                    <i class="fas fa-user"></i>
                    <input type = "text" class = "user-input" placeholder="id" id="id" name="id">
                    <input type="username" class="user-input" placeholder="username" id="username" name="username">
                    <input type="text" class="user-input" placeholder="roll no." id="roll" name="roll">
                    <input type="email" class="user-input" placeholder="e-mail" id="email" name="email">
                    <input type="number" class="user-input" placeholder="semester" id="sem" name="sem">
                </div>
                <div class="password">
                    <i class="fas fa-lock"></i>
                    <input type="password" class="pass-input" placeholder=" enter a password" id="password" name="password">
                    <input type="password" class="pass-input" placeholder="confirm your password" id="c_password" name="c_password">
                    <input type="submit" id="submit" name="submit" class="btn btn-success btn-lg" value="Send data">
            </form>
                
            </div>
        </div>
        <div class="link">
            <a href="/login.html">Already have an account? login</a>
        </div>
    </div>
</body>

</html>