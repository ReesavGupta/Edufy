<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Notes-Edufy.in</title>
    <script src="https://kit.fontawesome.com/3660777ee9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/menubar.css">
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <img src="letter-e.png" alt="logo">
            <h2>Edufy</h2>
            <ul>
                <li> <a href="#"><i class="fa-solid fa-house"></i>Home</a> </li>
                <li> <a href="#"><i class="fa-solid fa-user"></i>Profile</a> </li>
                <li class="no_bg">
                    <div class="sidenav">
                        <button class="dropdown-btn">
                            Semester <i class="fa fa-caret-down"></i>
                        </button>
                        <div  class="dropdown-container ">
                            <a href="semester12.php">I & II</a>
                            <a href="#">III & IV</a>
                            <a href="#">V & VI</a>
                            <a href="#">VII & VIII</a>
                        </div>
                    </div>
                </li>
                <li> <a href="#"><i class="fa-solid fa-address-card"></i>About</a> </li>
                <li> <a href="#"><i class="fa-solid fa-diagram-project"></i>Portfolio</a> </li>
                <li> <a href="#"><i class="fa-solid fa-envelope"></i>Contact Us</a> </li>
            </ul>

            <div class="social_media">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="main_content">
            <div class="header"><h1>Team</h1></div>
            <div class="info">
               These are the best notes you'll ever find in the entire college. Written by some of the best students and teachers in the college.
               Team Members:-
               <div class="members">
                <div class="card">
                  <img src="Images/reesav.jpeg" alt="Avatar" style="width:25%">
                  <div class="container">
                    <h4><b>Reesav Gupta</b></h4>
                    <p>CEO/Head-Developer</p>
                  </div>
                </div>
                <div class="card">
                  <img src="Images/rahul.JPG" alt="Avatar" style="width:25%">
                  <div class="container">
                    <h4><b>Rahul Pradhan</b></h4>
                    <p>Cheif Manager</p>
                  </div>
                </div>
                <div class="card">
                  <img src="Images/prasant.JPG" alt="Avatar" style="width:25%">
                  <div class="container">
                    <h4><b>Prashant Rai</b></h4>
                    <p>U-X Designer</p>
                  </div>
                </div>
                <div class="card">
                  <img src="Images/aseesh.jpg" alt="Avatar" style="width:25%">
                  <div class="container">
                    <h4><b>Aseesh Chettri</b></h4>
                    <p>Chief Editor</p>
                  </div>
                </div>
                <div class="card">
                  <img src="Images/kunga.jpeg" alt="Avatar" style="width:25%">
                  <div class="container">
                    <h4><b>Kunga Choden Bhutia</b></h4>
                    <p>Web Analyst</p>
                  </div>
                </div>
                <div class="card">
                  <img src="Images/aditi.jpeg" alt="Avatar" style="width:25%">
                  <div class="container">
                    <h4><b>Aditii Tamang</b></h4>
                    <p>Technical Consultant</p>
                  </div>
                </div>
               </div>
              
            </div>
        </div>
    </div>
    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
            });
        }
    </script>
</body>
</html>