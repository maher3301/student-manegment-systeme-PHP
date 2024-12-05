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
<?php include 'admin_sidebar.php'; ?>
<div class="content">
  <h1> Teacher list</h1>
  <div>
    <form action="" method="POST">
      <div>
        <label>User Name</label>
        <input type="text" name="name">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email">
      </div>
      
      <div>
        <label>Phone</label>
        <input type="number" name="phone">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <div>
        
        <input type="submit" name="add_teacher" value="Add teacher" >
      </div>

    </form>
  </div>
  </div>
  
</body>
</html>