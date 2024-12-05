<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['add_student'])) {
    $username = $_POST['name'];
    $user_password = $_POST['password'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $usertype = "student";

    // Correct query to check if the username exists
    $check = "SELECT * FROM user WHERE username='$username'";
    $check_user = mysqli_query($data, $check); // Execute the query

    // Check if the username exists in the result
    if (mysqli_num_rows($check_user) > 0) {
        echo "<script type='text/javascript'>
                    alert('Username already exists')
                  </script>";
    } else {
        // Proceed with inserting new user data
        $sql = "INSERT INTO user(username, email, phone, usertype, password) 
                VALUES ('$username', '$user_email', '$user_phone', '$usertype', '$user_password')";
        $result = mysqli_query($data, $sql);

        if ($result) {
            echo "<script type='text/javascript'>
                    alert('Data Uploaded')
                  </script>";
        } else {
            echo "Data Upload Failed";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css"> 
    label{
      display: inline-block;
      width: 100px;
      text-align: right;
      padding-top: 10px;
      padding-bottom: 10px;
    }
  </style>
  <?php
  include 'admin_css.php';
  ?>
</head>
<body>
  
  <?php 
  include 'admin_sidebar.php';
  ?>
  <div class="content">
  <h1> Student list</h1>
  <div>
    <form action="" method="POST">
      <div>
        <label>user name</label>
        <input type="text" name="name">
      </div>
      <div>
        <label>email</label>
        <input type="email" name="email">
      </div>
      
      <div>
        <label>phone</label>
        <input type="number" name="phone">
      </div>
      <div>
        <label>password</label>
        <input type="password" name="password">
      </div>
      <div>
        
        <input type="submit" name="add_student" value="Add Student" class="btn btn-primary" >
      </div>

    </form>
  </div>
  </div>
</body>
</html>