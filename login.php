<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin1.css">
    <title>Document</title>
</head>
<body>
<?php
//mysqli_connect(host, username, password, dbname)
$link = @mysqli_connect("localhost", "root", "", "signup") or die("ERROR: Unable to connect: " . mysqli_connect_error());

echo "<p>Connected successfully to the database.</p>";
?>
           
<?php

//get user inputs
if(isset($_POST['email'])){
$email = $_POST['email'];
}
if(isset($_POST['password'])){
$password = $_POST['password'];    
}






//error messages

$missingemail = "<p><strong>Please enter your email!</strong></p>";
$invalidemail = "<p><strong>Please enter a valid email address!</strong></p>";
$missingPassword = "<p><strong>Please enter a password!</strong></p>";
$errors = "";

if(isset($_POST['submit'])){
 //check for errors
    
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
    
    if($errors){
        $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
        echo $resultMessage;
    }else{
        // ************** */ $sql = "SELECT * FROM users";
            $sql = "SELECT * FROM signup ";


//$sql = "SELECT * FROM users WHERE firstname = 'george'";
//$sql = "SELECT * FROM users ORDER BY lastname";
//$sql = "SELECT * FROM users ORDER BY lastname DESC";
if($result = mysqli_query($link, $sql)){
    print_r($result); 
    if(mysqli_num_rows($result)>0){
    //echo mysqli_num_rows($result);
    // if($i>0){
        
       $count = 0;

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        // while($i >= 0){
        //     $i--;
        //     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

//            $count++;   
//            echo "<p>Row number: $count</p>";
//            print_r($row);
            //echo "<tr>";
                /*echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["firstname"] . "</td>";
                echo "<td>" . $row["lastname"] . "</td>";*/
                $a=$row["email"];
                $b=$row["password"];
            //echo "</tr>";
        if($a==$email && $b==$password){
                 $count = 1;
                    echo "success \n";
                   header("Location: ./index.html");
                    break;
                }
                // else{
                //     echo "wrong credentials \n";
                // }

     // echo "$email $password";
        // echo "\n";
        // echo "$a $b";
        
} 
if($count == 0){
    echo "\n wrong credentials";
}       
            
        }
        //close the result set
       // mysqli_free_result($result);
       
}
}
}


?>

















    <div class="login-container">
        <div class="avtar"></div>
        <div class="title">Login Form</div>
        <div class="sub-title">
            Edufy</div>
        <div class="fields">
          <form action="" method="POST">
            <div class="username">
                <i class="fas fa-user"></i>
                <input type="email" class="user-input" placeholder="email" id="email" name="email">
            </div>
            <div class="password">
                <i class="fas fa-lock"></i>
                <input type="password" class="pass-input" placeholder="password" id="password" name="password">
            </div>
            <input type="submit" name="submit" placeholder="submit">
          </form>
        </div>
        <!-- <button class="login">login</button> -->

        <div class="link">
            <a href="#">Forgot password?</a> &nbsp; or &nbsp; <a href="/signup.php">Sign-Up</a>
        </div>
    </div>
</body>

</html>