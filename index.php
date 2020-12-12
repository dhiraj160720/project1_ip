<?php

// $servername='127.0.0.1';
// $username='root';
// $password='';
// $dbname = 'project';
$servername='remotemysql.com';
$username='2N45z09Up2';
$password='NExyZK3ukb';
$dbname = '2N45z09Up2';
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}


if(isset($_POST['submit']))
{
  $user_id = $_POST['user_id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];

  $query = mysqli_query($conn,"select * from user where username='$username' && password='$password'");
  $rowcount = mysqli_num_rows($query);
  if($rowcount == True){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['name'] = $name ;
    $_SESSION['username'] = $username; 
    $_SESSION['gender'] = $gender;
    $_SESSION['email'] = $email;
    $_SESSION['contact'] = $contact;

    header("Location: select_sub.php");
}
elseif (isset($_POST['submit'])){
  if($username == 'admin' && $password == 'admin123' || $username == 'anish' && $password == 'anish123' || $username == 'jayesh' && $password == 'jayesh123' || $username == 'dhiraj' && $password == 'dhiraj123' ){
    header("Location: admin_login.php");
  }
  else{
    echo "<script>window.alert('Incorrect Credentials!')</script>";
}
  
}
else{
    echo "<script>window.alert('Incorrect Credentials!')</script>";
}
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Your Skills</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS Stylesheet link -->
    <link rel="stylesheet" href="style.css">

    <!-- Google Fonts links -->
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

    <!-- Font Awesome links -->
<!--     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 -->    <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>

  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">TYS</label>
      <ul>
        <li><a class="active nav-link" href="#">Home</a></li>
        <li><a class="nav-link" href="#footer">Contact</a></li>
      </ul>
    </nav>
    <section>
      <div class="title-container">
        <p class="big-heading">Test Your Technical And Aptitude Skills Here</p>
      </div>
      <div class="form_wrapper">
        <div id="form_left">
            <img src="icon.png" alt="computer icon" height="120" style="margin-left: 5px; padding: 5px 0px;">
        </div>
        <form action="index.php" method="POST">
        <div id="form_right">
            <h1 class="member-login">MEMBER LOGIN</h1>
            <div class="input_container">
                <i class="fas fa-envelope"></i>
                <input placeholder="Username" name="username" id="field_email" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-lock"></i>
                <input  placeholder="Password" type="password" name="password" id="field_password" class='input_field'>
            </div>
            <input type="submit" value="Login" id='input_submit' name="submit" class='input_field'>
           <!--  <span>Forgot <a href="#" class="forgot-pass"> Username / Password ?</a></span> -->
            <span >
                <a href="registration_form.php" class="create-account">Create your account ➡ </a>
            </span>
        </div>
        </form>
    </div>

    <div class="row">
      <div class="column">
        <a href="https://www.w3schools.com/java/" target="_blank"><img src="java.png" alt="JAVA" style="width:100%; border-radius: 50%"></a>
      </div>
      <div class="column">
        <a href="https://www.w3schools.com/python/" target="_blank"><img src="python.png" alt="PYTHON" style="width:100%; border-radius: 50%"></a>
      </div>
      <div class="column">
        <a href="https://www.w3schools.com/sql/default.asp" target="_blank"><img src="sql.jpg" alt="SQL" style="width:100%; border-radius: 50%"></a>
      </div>
      <div class="column">
        <a href="https://www.w3schools.in/data-structures-tutorial/intro/" target="_blank"><img src="dsa.jpg" alt="DSA" style="width:100%; border-radius: 50%"></a>
      </div>
    </div>

    </section>
    
    <footer id="footer">
      <a href="https://www.linkedin.com/in/anish-verliani-0426861b7/"><i class="social-icon fab fa-linkedin fa-lg"></i></a>
      <a href="https://www.facebook.com/profile.php?id=100011682423431"><i class="social-icon fab fa-facebook-f fa-lg"></i></a>
      <a href="https://www.instagram.com/jayesh_.21/?hl=fr"><i class="social-icon fab fa-instagram fa-lg"></i></a>
      <a href="mailto:anishverliani@gmail.com"><i class="social-icon fa fa-envelope fa-lg"></i></a>
      <p style="color: white;">Contact No: 9075526235</p>
      <p class="copyright">© Copyright 2020 TYS</p>
  
    </footer>
  </body>
</html>
