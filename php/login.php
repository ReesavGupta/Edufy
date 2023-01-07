<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Populate table using form</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            h1{
                color:purple;   
            }
            h3{
                color:#42d5ce;   
            }
            .containingDiv{
                border:1px solid #7c73f6;
                margin-top: 100px;
                border-radius: 15px;
            }
        </style> 

    </head>
        <body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-1 col-sm-10 containingDiv">
            <h1>Populate table using form:</h1>
            <h3>Connect to database:</h3>
<?php
//mysqli_connect(host, username, password, dbname)
$link = @mysqli_connect("localhost", "root", "", "PROJECT1") or die("ERROR: Unable to connect: " . mysqli_connect_error());

echo "<p>Connected successfully to the database.</p>";
?>
            <h3>Send data to database:</h3>
<?php

//get user inputs

$email = $_POST["email"];
$password = $_POST["password"];

//error messages

$missingemail = "<p><strong>Please enter your email!</strong></p>";
$invalidemail = "<p><strong>Please enter a valid email address!</strong></p>";
$missingPassword = "<p><strong>Please enter a password!</strong></p>";


if($_POST["submit"]){
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
        $sql = "SELECT * FROM users";
//$sql = "SELECT * FROM users WHERE firstname = 'george'";
//$sql = "SELECT * FROM users ORDER BY lastname";
//$sql = "SELECT * FROM users ORDER BY lastname DESC";
if($result = mysqli_query($link, $sql)){
    print_r($result); 
    if(mysqli_num_rows($result)>0){
        
//        $count = 0;
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
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
                
            
        }
        //close the result set
       // mysqli_free_result($result);
        if($a==$email && $b==$password){
                    echo "success";
                }
                else{
                    echo "wrong credentials";
                }
    
}
}
}
}


?>
            <form action="login.php" method="post">
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email"  maxlength="30">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" placeholder="Password" class="form-control" name="password"  maxlength="40">
                </div>
                <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send data">


            
            
            </form>
                      
        </div>
    </div>
</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
</html>