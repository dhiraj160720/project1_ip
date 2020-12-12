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



if(isset($_POST['submit']))
{  
  $question_title = $_POST['question_title'];
  $option1 = $_POST['option1'];
  $option2 = $_POST['option2'];
  $option3 = $_POST['option3'];
  $option4 = $_POST['option4'];
  $right_ans = $_POST['right_ans'];

  $sql = "insert into aptitude (question_title,option1,option2,option3,option4,right_ans)  values ('$question_title','$option1','$option2','$option3','$option4','$right_ans')";

  $run = mysqli_query($conn, $sql) or die(mysqli_error());

   if ($run) {
    echo "<script>alert('Question Added Successfully!')</script>";
    header("Location: admin_aptitude.php");
    // echo "Error: " . mysqli_error($conn);
   }
   else {
    echo "Error: " . $sql . "
  " . mysqli_error($conn);
   }

mysqli_close($conn);
}
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
    <link rel="stylesheet" href="add_question.css">

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
        <li><a class=" nav-link" href="admin_login.php">Home</a></li>
        <li><a class="nav-link" href="admin_user.php">User Details</a></li>
       <li><a class="nav-link" href="index.php">Logout</a></li>

      </ul>
    </nav>


    <section>
      <br>


    <div class="wrapper" style="margin-top: 10px;">
    <div class="title">
      Add New Question
    </div>
    <form method="POST">
      <div class="form">
        <div class="inputfield">
            <label>Question Title</label>
            <textarea rows="5" cols="60" name="question_title"></textarea> 
         </div> 
           <br>
         <br>
          <div class="inputfield">
            <label>Option 1</label>
            <input type="text" class="input" name="option1">
         </div>
         <br>
         <div class="inputfield">
            <label>Option 2</label>
            <input type="text" class="input" name="option2">
         </div>
         <br>
         <div class="inputfield">
            <label>Option 3</label>
            <input type="text" class="input" name="option3">
         </div>
         <br>
         <div class="inputfield">
            <label>Option 4</label>
            <input type="text" class="input" name="option4">
         </div>  
         <br>
         <div class="inputfield">
            <label>Answer</label>
            <input type="text" class="input" name="right_ans">
         </div>  
         <br>
         <br>
        <div class="inputfield">
          <input type="submit" value="Add Question"  name="submit" class="btn">

        </div>
      </div>
    </form>
  </div>
</section>