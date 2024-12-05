
<?php
   error_reporting(0);
   session_start();
   $host="localhost";
   $user="root";
   $password="";
   $db="schoolproject";
   $data=mysqli_connect($host,$user,$password,$db);
   $sql="SELECT * FROM user WHERE usertype='student'";
   $result=mysqli_query($data,$sql);
  
  ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Admin dashboard</title>
  <?php 
  include 'admin_css.php';
  ?>
  
</head>
<body>
  <?php 
  include 'admin_sidebar.php';
  
  ?>
<div class="content">
  <h1>List of student</h1>
  <?php 
  if (  $_SESSION['message']){
    echo $_SESSION['message'];
  }
  unset($_SESSION['message']);
  ?>
  <table border="1px">
    <tr>
      <th style="padding: 20px; font-size:15px">Name</th>
      <th style="padding: 20px; font-size:15px">Email</th>
      <th style="padding: 20px; font-size:15px">Phone</th>
      <th style="padding: 20px; font-size:15px">password</th>
      <th style="padding: 20px; font-size:15px">Delete</th>

    </tr>
    <?php 
    while($info=$result -> fetch_assoc())
    {
    
    ?>
    <tr>
      <td style="padding: 20px;"><?php 
      echo"{$info['username']}";
      ?></td>
      <td style="padding: 20px;"><?php 
      echo"{$info['email']}";
      ?></td>
      <td style="padding: 20px;"><?php 
      echo"{$info['phone']}";
      ?></td>
      <td style="padding: 20px;">
      <?php 
      echo"{$info['password']}";
      ?>
      </td>
      <td style="padding: 20px;">
      <?php 
      echo "<a href='delete.php?student_id={$info['id']}'>Delete</a>";
      ?>
      </td>
    </tr>
    <?php 
    }
    ?>
  </table>
  
</div>
  
</body>
</html>