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

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  $sql = "insert into feedback_form (name,subject , email, feedback)  values ('$name','$subject','$email','$feedback')";



  $run = mysqli_query($conn, $sql) or die(mysqli_error());
  echo "<script>alert('Thanks For your Valuable Feedback!')</script>";
}
  


mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Your Skills</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS Stylesheet link -->

    <!-- Google Fonts links -->
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

    <!-- Font Awesome links -->
<!--     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 -->    <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');


:root {
  --form_bg: #ffffff;
  --input_bg: #E5E5E5;
  --input_hover:#eaeaea;
  --submit_bg: #0082e6;
  --submit_hover: #1b9bff;
  --icon_color:#6b6b6b;
}
*{
  padding: 0;
   margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{
  font-family: 'Roboto', sans-serif;
}
nav{
  background: #0082e6;
  height: 80px;
  width: 100%;
  font-weight: bold;
}
label.logo{
  color: white;
  font-size: 2.5rem;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
  font-family: "Ubuntu";
  cursor: pointer;
}
nav ul{
  float: right;
  margin-right: 20px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}
nav ul li a{
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}
.nav-link.active,.nav-link:hover{
  background: #1b9bff;
  transition: .5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}
@media (max-width: 952px){
  label.logo{
    font-size: 30px;
    padding-left: 50px;
  }
  nav ul li a{
    font-size: 16px;
  }
}
@media (max-width: 858px){ 
  .checkbtn{
    display: block;
  }
  ul{
      position: fixed;
      width: 100%;
      height: 100vh;
      background: #2c3e50;
      top: 80px;
      left: -100%;
      text-align: center;
      transition: all .5s;
    }
    nav ul li{
      display: block;
      margin: 50px 0;
      line-height: 30px;
    }
    nav ul li a{
      font-size: 20px;
    }
    .nav-link:hover,a.active{
      background: none;
      color: #0082e6;
    }
    #check:checked ~ ul{
      left: 0;
    }
}

section{
  background: url(quiz52.jpg) no-repeat;
  background-size: cover;
  height: calc(100vh - 50px);
  /* opacity: 0.8; */
}
.wrapper{
  max-width: 650px;
  width: 90%;
  background: #fff;
  margin: 50px auto;
  box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
  padding: 30px;
  border-radius: 20px;
}

.wrapper .title{
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 25px;
  color: #39b7dd;
  text-transform: uppercase;
  text-align: center;
}


/*THIS IS ACTUAL PAGE CSS*/
.wrapper .form{
  width: 100%;
}

.wrapper .form .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label{
   width: 200px;
   color: #757575;
   margin-right: 10px;
  font-size: 14px;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #d5dbd9;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select{
  position: relative;
  width: 100%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #d5dbd9 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #d5dbd9;
  border-radius: 3px;
}


.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus{
  border: 1px solid #39b7dd;
}

.wrapper .form .inputfield p{
   font-size: 14px;
   color: #757575;
}
.wrapper .form .inputfield .check{
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}
.wrapper .form .inputfield .check input[type="checkbox"]{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.wrapper .form .inputfield .check .checkmark{
  width: 15px;
  height: 15px;
  border: 1px solid #fec107;
  display: block;
  position: relative;
}
.wrapper .form .inputfield .check .checkmark:before{
  content: "";
  position: absolute;
  top: 1px;
  left: 2px;
  width: 5px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}
.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark{
  background: #fec107;
}

.wrapper .form .inputfield .check input[type="checkbox"]:checked ~ .checkmark:before{
  display: block;
}

.wrapper .form .inputfield .btn{
  width: 100%;
   padding: 8px 10px;
  font-size: 15px; 
  border: 0px;
  background: linear-gradient(270deg,#0162c8,#55e7fc);
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover{
  background: linear-gradient(90deg,#0162c8,#55e7fc);
}

.wrapper .form .inputfield:last-child{
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield{
    flex-direction: column;
    align-items: flex-start;
  }
  .wrapper .form .inputfield label{
    margin-bottom: 5px;
  }
  .wrapper .form .inputfield.terms{
    flex-direction: row;
  }
}
  </style>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">TYS</label>
      <ul>
        <li ><a href="user_details.php" class="navbar" style="font-size: 22px;"><i class='fas fa-user-circle'></i></a></li>

        <li><a class=" nav-link" href="select_sub.php">Home</a></li>
        <li><a class="navbar" href="select_sub.php#footer">Contact</a></li>
        <li><a class="nav-link" href="index.php">Logout</a></li>
      </ul>
    </nav>
    <section>
      <br>

    <div class="wrapper">
    <div class="title">
      Feedback
    </div>
      <h3 style="text-align: center;color: #39b7dd;">Please help us to improve with your valuable feedback!</h3><br>
      <form method="POST">
        <div  class="form">
        <div class="inputfield">
          <label>Name</label>
          <input type="text" class="input" name="name">
       </div>  
        <div class="inputfield">
          <label>Subject</label>
          <input type="text" class="input" name="subject">
       </div>  
       <div class="inputfield">
          <label>Email</label>
          <input type="email" class="input" name="email">
       </div> 
        <div class="inputfield">
          <label>Feedback</label>
          <textarea class="input" name="feedback"></textarea>
       </div>
       <div class="inputfield">
        <input type="submit" value="Submit" class="btn" name="submit">
      </div>
      </div>

      </form>
      
  </div>
</section>
    
</body>
</html>
