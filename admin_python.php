<?php 
//   $servername = 'localhost';
//   $username='root';
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

  $sql = "select * from python";
  $result = mysqli_query($conn,$sql);


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
    <style type="text/css">
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



body{

  background: url(quiz52.jpg) ;
  /* background-color: #d2d8d6;
  background-image: linear-gradient(315deg, #d2d8d6 0%, #dce8e0 74%);*/
/*  height: calc(100vh - 50px);*/
  /* opacity: 0.8; */
}


table {
        position: absolute;
        left: 50%;
        top: 100%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 1300px;
        height: 200px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
        background-color: #cfcfcf;
    }
    
    th,
    td {
        font-size: 19px;
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        text-transform: uppercase;
    }
    
    #header {
        background-color: #3498db;
        color: #fff;
        font-family: cursive;
    }
    
    h1 {
        padding-top: 20px;
        font-weight: 600;
        text-align: center;
        color: white;
        text-transform: uppercase;
        font-family: cursive;
    }
    
    tr:hover {
        background-color: white;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    button{
      padding: 5px;
      margin-left: 20px;
      font-family: cursive; 
      font-size: 20px;
      background-color: #3498db;
      color: white;
      border-radius: 10px;

    }
    @media (max-width: 768px) {
        table {
            width: 80%;
        }
    }
    </style>

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
      <label class="logo"><a href="admin_login.php" style="color: white;">TYS</a></label>
      <ul>
        <li><a class="nav-link" href="admin_user.php">User Details</a></li>
        <li><a class="nav-link" href="add_question.php">Add New Question</a></li>
       <li><a class="nav-link" href="index.php">Logout</a></li>

      </ul>
    </nav>

    <section>
      <table >
<thead>
<tr id="header">
                    <th  style="text-align: center;">QUESTION TITLE</th>
                    <th  style="text-align: center;">OPTION 1</th>
                    <th  style="text-align: center;">OPTION 2</th>
                    <th  style="text-align: center;">OPTION 3</th>
                    <th  style="text-align: center;">OPTION 4</th>
                    <th  style="text-align: center;">RIGHT OPTION</th>
</tr>
</thead>


<?php
        while($rows=$result->fetch_assoc())
        {
      ?>
      <form method="post">
      <tr>
        <!--FETCHING DATA FROM EACH
          ROW OF EVERY COLUMN-->
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['question_title'];?></td>
        <input type="hidden" name="question_title" value="<?php echo $rows['question_title'] ; ?>">
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['option1'];?></td>
        <input type="hidden" name="option1" value="<?php echo $rows['option1'] ; ?>">
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['option2'];?></td>
        <input type="hidden" name="option2" value="<?php echo $rows['option2'] ; ?>">
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['option3'];?></td>
        <input type="hidden" name="option3" value="<?php echo $rows['option3'] ; ?>">
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['option4'];?></td>
        <input type="hidden" name="option4" value="<?php echo $rows['option4'] ; ?>">
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['right_ans'];?></td>
        <input type="hidden" name="right_ans" value="<?php echo $rows['right_ans'] ; ?>">
        
        <!-- <td>
          <button type="submit" class="btn">Edit</button>
        </td>
        <td>
          <button type="submit" class="btn"> Delete</button>
          
        </td> -->

      </tr>
      </form>
      <?php
        }
      ?>  
     </table>
        </br>
    </form>
    </section>
</body>
</html>