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
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];

  $sql = "insert into user (name,username, password, gender, email, contact)  values ('$name','$username','$password','$gender','$email','$contact')";
  $sql_u = "SELECT * FROM user WHERE username='$username'";
  $sql_e = "SELECT * FROM user WHERE email='$email'";
  $res_u = mysqli_query($conn, $sql_u);
  $res_e = mysqli_query($conn, $sql_e);


  // $run = mysqli_query($conn, $sql) or die(mysqli_error());

if ($_POST['submit']) 
{ 
  if(empty($name) || empty($username) || empty($password) || empty($gender) || empty($email) || empty($contact)){
      echo "<script>alert('Please Fill all the details!')</script>";

    }

    elseif(!preg_match("/^[a-zA-Z ]*$/",$name)) { 
                echo "<script>alert('Only alphabets and white space are allowed')</script>"; 
            }

    elseif($password != $confirmpassword){
      echo "<script>alert('Password should match')</script>";
    }

    elseif(strlen($password) < 8){
      echo "<script>alert('Password should contain more than 8 characters!')</script>";
    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                echo "<script>alert('Invalid email format')</script>";
    }

    elseif(!preg_match ("/^[0-9]*$/", $contact) ) {  
            echo "<script>alert('Only numeric value is allowed.')</script>";  
            }  
    elseif (strlen ($contact) != 10) {  
            echo "<script>alert('Mobile no must contain 10 digits.')</script>";  
            }  

    elseif(mysqli_num_rows($res_u) > 0){
       echo "<script>alert('Sorry... username already taken')</script>";
    }

    else if(mysqli_num_rows($res_e) > 0){
      echo "<script>alert('Sorry... email already taken')</script>"; 
    }

    elseif (!mysqli_query($conn,$sql)){

            die('Error: ' . mysqli_error($conn));
    }


    else{
          header("Location: login.php");
            }   
 }
 else{
  echo"error!";
 } 

mysqli_close($conn);
?>


