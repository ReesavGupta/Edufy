<?php
    &name = $_POST['username'];
    &roll = $_POST['roll'];
    &email = $_POST['email'];
    &sem = $_POST['sem'];
    &password = $_POST['password'];
    &c_password = $_POST['c_password'];


    //database connection
    $conn = new mysqli('localhost', 'root', '','signup');
    if($conn -> connect_error)
    {
        die('Connection failed  : '. $conn -> connect_error);
    }
    else
    {
        $stmt = $conn->prepare("insert into signup(username, roll, email, sem, password, c_password) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiss", $username, $roll, $email, $sem, $password, $c_password);
        $stmt->execute();
        echo"Registration Sucessfull";
        $stmt->close();
        $conn->close();
    }

?>

