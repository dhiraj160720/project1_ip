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
?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Select Subject</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap');

*{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
}
body{
  font-family: montserrat;
}
nav{
  background: #0082e6;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 35px;
  line-height: 80px;
  padding: 0 100px;
  font-weight: bold;
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
a.active,a:hover{
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
  a:hover,a.active{
    background: none;
    color: #0082e6;
  }
  #check:checked ~ ul{
    left: 0;
  }

}
section{
  background: url(quiz52.jpg) ;
  z-index: -1;
}

.que{
  font-size: 24px;
  color: white;
  padding: 20px;
  font-family: cursive;
}

.ans{
  font-size: 24px;
  color: white;
  margin-left: 20px;
  font-family: cursive;
}

.btn:hover{
  background-color: #DEB887;
}

.display{
  font-size: 25px;
  text-align: center;
}
    </style>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><a href="select_sub.php" style="color: white;">TYS</a></label>
      <ul>
        <li ><a href="user_details.php" class="navbar" style="font-size: 22px;"><i class='fas fa-user-circle'></i></a></li>
        <li><a href="select_sub.php">Home</a></li>
        <li><a href="user_history.php">History</a></li>
        <li><a class="navbar" href="select_sub.php#footer">Contact</a></li>
        <li><a href="index.php">Logout</a></a></li>
      </ul>
    </nav>

    <section>

      <form class="ans" method="POST">
         <?php 
$j=1; 
$marks=0;
if(isset($_POST['submit'])){
  $Question= $conn->query("SELECT * FROM p_question order by question_id asc");
  while($rowques=mysqli_fetch_assoc($Question))
  {
    $question_id=$rowques['Question_id'];
    $b=$conn->query("SELECT * FROM p_answer where question_id=$question_id and correct=1 order by answer_id asc ");
    while ($ans=mysqli_fetch_assoc($b)) 
    {
      if($_POST[$j]==$ans['answer']) {
        $marks++;
      }
    }
    $j++;
  }
  session_start();
  $n1 = $_SESSION['username'];
  $percentage = ($marks / 10.0) * 100;
  $sql1 = "INSERT into history (username,sub_name,marks,percentage) values ('$n1','Python','$marks','$percentage')";
  mysqli_query($conn,$sql1);
  echo '<script type="text/javascript">alert("Your marks is '.$marks.'");</script>';
  
}
?>
<body>
<form id='q' action="" method='post'>
<?php
 
  $marks=0;
  $ques_query="SELECT * FROM p_question order by question_id asc ";
  $Question = mysqli_query($conn,$ques_query);
  //$lengthq = mysqli_fetch_lengths($Question);
  //$num=$lengthq[1];
  $j=1;
  $count=0;
  while($rowques=mysqli_fetch_assoc($Question))
  
 {
  $question_id=$rowques['Question_id'];
  $question=$rowques['Question'];
  echo $question."<br><br>";
  
  $ques_query1="SELECT * FROM p_answer where question_id=$question_id";
  $Answer= mysqli_query($conn,$ques_query1);

   # code...
  while($rowques1=mysqli_fetch_assoc($Answer))
    {
      $option=$rowques1['answer'];
      
      //$array = new SplFixedArray($lengthq[1]);
      //echo count($rowques1);

      echo '
      <input type="radio" name="'.$j.'"  value="'.$option.'" required="">'.$option.'<br $><br />';
      
    
    }
     if(isset($_POST['option']))
      {
        $arr = array('$question' => $option );

        foreach ($arr as $key => $option) {
            
            echo $key;

        }
      }

    

    $sql="select `answer` from p_answer where `question_id`=$question_id and `correct`=1";//
    $v= mysqli_query($conn,$ques_query1);//
    if(isset($_GET['option']))//

    {
      $marks=+1;
      echo $marks;

    }
    $j++;
  }
?>


<input type="submit" name="submit" value="SUBMIT" class="ans btn" style="width: 10%; color: black; margin-left: 800px; margin-bottom: 20px;">
</form>
    

        


    </section>




  </body>
  </html>
