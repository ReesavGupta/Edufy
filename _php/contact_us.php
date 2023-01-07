<!-- <section id="Contact" class="contact">
    <h2 class="text-center">Contact US</h2>
    <div class="form">
        <form action="/_php/contact_us.php" method="post">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your Name">
            <input class="form-input" type="text" name="phone" id="phone" placeholder="Enter Your Phone">
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your E-mail">
            <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Elaborate Your Concern"></textarea>
            <button class="btn-dark btn btn-sm"> Submit</button>
        </form>
    </div>
</section> -->
<?php
  $name = _POST['name'];  
  $phone = _POST['phone'];  
  $email = _POST['email'];  
  $text = _POST['text'];  
 
 //database connection
 $conn = new mysqli('localhost', 'root', '','contact_us');
 if($conn -> connect_error)
 {
     die('Connection failed  : '. $conn -> connect_error);
 }
 else
 {
     $stmt = $conn->prepare("insert into contact_us(name, phone, email, text) values(?, ?, ?, ?)");
     $stmt->bind_param("sssiss", $name, $phone, $email, $text);
     $stmt->execute();
     echo"Registration Sucessfull";
     $stmt->close();
     $conn->close();
 }

?>
