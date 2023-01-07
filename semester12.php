<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>semester</title>
    <script src="https://kit.fontawesome.com/3660777ee9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/menubar.css">
</head>
<style>
 /* Style The Dropdown Button */
.dropbtn {
  background-color: #bdb8d7;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  margin-left: 260px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
  
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: 260px;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #bdb8d7;
}
h1{
    text-align: center;
}
ul .navlist .v-class{
    width: 200px;
    display: flex;
    justify-content: center;
}
</style>
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
                            <a href="#">I & II</a>
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
            <div class="header">
                <h1>Semester 1 and Semester 2</h1>
            </div>
            <nav  class="navbar background h-nav">
                <ul class="nav-list v-class">
                    <div class="dropdown">
                        <button class="dropbtn">Semester I
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="#">Engineering Mathematics-1</a>
                          <a href="#">Programming in C</a>
                          <a href="#">Engineering Chemistry</a>
                          <a href="#">U.H.V</a>
                          <a href="#">Mechanics Of Solids</a>

                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <button class="dropbtn">Semester II
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="#">Login</a>
                          <a href="#">Sign-Up</a>
                        </div>
                    </div>
                </ul>
           </nav>
        
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