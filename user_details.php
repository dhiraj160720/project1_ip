<?php

// $servername='localhost';
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
session_start();


$name = $_SESSION['name'];
$username = $_SESSION['username'];
$gender = $_SESSION['gender'];
$email = $_SESSION['email'];
$contact = $_SESSION['contact'];

$result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");

$row= mysqli_fetch_array($result);

if(isset($_POST['submit'])){
	$name = $_SESSION['name'];
	$username = $_SESSION['username'];
	$gender = $_SESSION['gender'];
	$email = $_SESSION['email'];
	$contact = $_SESSION['contact'];

	$result1 = mysqli_query($conn, "UPDATE user SET name='$_POST[name]',username = '$_POST[username]',gender='$_POST[gender]',email='$_POST[email]',contact='$_POST[contact]' WHERE username='$_POST[username]'");

    echo "<script>alert('Your Details are Updated!')</script>";
    header("Location: select_sub.php");
    
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS Stylesheet link -->
    <link rel="stylesheet" href="user_details.css">

    <!-- Google Fonts links -->
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

     <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>

  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><a href="select_sub.php" style="color: white;">TYS</a></label>
      <ul>
        <li ><a class="nav-link active" href="user_details.php" class="navbar" style="font-size: 22px;"><i class='fas fa-user-circle'></i></a></li>
        <li><a class="nav-link" href="select_sub.php">Home</a></li>
        <li><a class="nav-link" href="select_sub.php">Select Subject</a></li>
        <li><a class="navbar" href="select_sub.php#footer">Contact</a></li>
        <li><a class="nav-link" href="index.php">Logout</a></li>
      </ul>
    </nav>
    <section>
    	<div class="form_wrapper">

    			<form method="POST" action="#">
    			<div id="form_right">
            <h1 class="member-login">MEMBER DETAILS</h1>
            <div class="input_container">
            	
                <i class="fa fa-user"></i>
                <input name="name" id="field_email" value="<?php echo $row['name']; ?>" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fa fa-user"></i>
                <input  name="username" id="field_email" value="<?php echo $row['username']; ?>" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-venus-mars"></i>
                <input   type="Gender" name="gender" value="<?php echo $row['gender']; ?>" id="field_input" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fa fa-envelope"></i>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" id="field_input" class='input_field'>
            </div>
            <div class="input_container">
                <i class="fas fa-phone"></i>
                <input   type="contact" name="contact" id="field_input" value="<?php echo $row['contact']; ?>" class='input_field'>
            </div>
            
            <input type="submit" value="Edit" id='input_submit' name="submit" class='input_field'>


    		
        </div>
   	</form>
    	
    </div>
    </section>

    

