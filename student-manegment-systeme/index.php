<?php
 error_reporting(0);
 session_start();
 session_destroy();
 if ($_SESSION['message']){
  $message=$_SESSION['message'];
  echo"<script type='text/javascript'>
  alert('$message');
  </script>";
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Managment System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <nav style="background-color:#5469d4 ;">
    <label class="logo">Tec-School</label>
    <ul  >
      <li><a href="">Home</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#admission">Admission</a></li>
      <li><a href="login.php" class="btn btn-primary">Login</a></li>

    </ul>
  </nav>
  <div class="section1">
    <label class="img_text"> We Teach Student With Care</label>
    <img class="main_img" src="Design sans titre (3).png">

  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img class="welcome_img"  src="school.jpeg">
      </div>
      <div class="col-md-8">
        <h1>Welcome to Tec-School</h1>
        <p>At Tec-School, we are passionate about empowering the next generation of innovators and tech enthusiasts. Our mission is to provide high-quality education in the latest technologies, from programming and web development to AI and data science. Whether you're a beginner or looking to advance your skills, Tec-School offers a dynamic learning environment with hands-on projects, expert guidance, and a supportive community. Join us on a journey to master the tools that are shaping the future!</p>

      </div>
    </div>
  </div>
  <div class="espace"></div>
  <center>
    <h1>Our Teachers</h1>
  </center>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img class="teacher" src="img1.jpeg">
      </div>
      <div class="col-md-4">
        <img class="teacher" src="img2.jpeg" alt="">
      </div>
      <div class="col-md-4">
        <img class="teacher" src="img4.jpeg">
      </div>
      
    </div>
  </div>
<div class="espace"></div>
  
  <center><h1>Our Courses</h1></center>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img class="teacher" src="web.jpeg">
        <h2>Web Development</h2>
        <p>Learn the basics of web development, including HTML, CSS, and JavaScript. Build
      </div>
      <div class="col-md-4">
        <img class="teacher" src="ia.jpeg">
        <h2>Artificial Intelligence</h2>
        <p>Discover the world of AI and machine learning, and learn how to build intelligent systems
      </div>
      <div class="col-md-4">
        <img class="teacher" src="data.jpeg">
        <h2>Data Science</h2>
        <p>Explore the field of data science, including data analysis, visualization, and machine learning
      </div>
    </div>
  </div>
  <div class="espace">

  </div>
  
  <center><h1>Admission Form</h1></center>
  <div align="center"  class="admission_form" id="admission">
    <form action="data_check.php" method="POST">
      <div class="adm">
        <label class="label_text">Name</label>
        <input class="input" type="text" name="name" placeholder="Enter your name">
      </div>
      <div class="adm">
        <label class="label_text">Email</label>
        <input class="input" type="text" name="email" placeholder="Enter your Email">
      </div>
      <div class="adm">
        <label class="label_text">Phone</label>
        <input class="input" type="text" name="phone" placeholder="Enter your Phone number">
      </div>
      <div class="adm">
        <label class="label_text">Message</label>
        <textarea class="txt" name="message"></textarea>
      </div>
      <div>
        
        <input id="submit" type="submit" class="btn btn-primary" value="apply" name="apply" >
      </div>
    </form>
  </div>
  <div class="espace"></div>
  <footer>
    <p class="t"> &copy; 2024 All rights reserved | This web site is made by Iheb Ghrairi</p>
  </footer>

</body>
</html>