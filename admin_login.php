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

  $sql = "select * from subject";
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
    <link rel="stylesheet" href="admin_login.css">

    <!-- Font Awesome links -->
<!--     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 -->    <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>

 <style type="text/css">
       #footer{
  position: relative;
  text-align: center;
  background-color: #0082e6;
  padding: 4% 15%;
}

  .social-icon{
    color: white;
    margin: 5px 10px;
    cursor: pointer;
    
  }
  .copyright{
    color: white;
    font-size: 17px;
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
        <li><a class="active nav-link" href="admin_login.php">Home</a></li>
        <li><a class="nav-link" href="admin_user.php">User Details</a></li>
        <li><a class="nav-link" href="add_subject.php">Add New Quiz</a></li>
       <li><a class="nav-link" href="index.php">Logout</a></li>

      </ul>
    </nav>

    <section>
      <h1>Welcome Admin</h1>
    <table style="overflow-x: auto;">
<thead>
<tr id="header">
                    <th  style="text-align: center;">SUBJECT NAME</th>
                    <th  style="text-align: center;">DATE AND TIME</th>
                    <th  style="text-align: center;">TOTAL QUESTION</th>
                    <th  style="text-align: center;">RIGHT ANSWER MARK</th>                    
                    
</tr>
</thead>

            <!--fetch and display data from MySQL-->
            <?php
        while($rows=$result->fetch_assoc())
        {
      ?>
      <form method="post">
      <tr>
        <!--FETCHING DATA FROM EACH
          ROW OF EVERY COLUMN-->
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['sub_name'];?></td>
        <input type="hidden" name="name" value="<?php echo $rows['sub_name'] ; ?>">
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['date_time'];?></td>
        <input type="hidden" name="email" value="<?php echo $rows['date_time'] ; ?>">
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['total_questions'];?></td>
        <input type="hidden" name="credit" value="<?php echo $rows['total_questions'] ; ?>" >
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['right_answer_mark'];?></td>
        <input type="hidden" name="credit" value="<?php echo $rows['right_answer_mark'] ; ?>" >

        

      </tr>

      </form>
      <?php
        }
      ?>  
     </table>
        </br>
    </form>
    <td>
          <button type="submit" class="btn" name="view"  style="margin-left: 1430px; margin-top: 125px; background-color: white;"><a href="admin_java.php">View</a></button><br>

          <button type="submit" class="btn" name="view"  style="margin-left: 1430px; margin-top: 10px;background-color: white; "><a href="admin_python.php">View</a></button><br>

          <button type="submit" class="btn" name="view"  style="margin-left: 1430px; margin-top: 10px;background-color: white; "><a href="admin_dbms.php">View</a></button><br>

          <button type="submit" class="btn" name="view"  style="margin-left: 1430px; margin-top: 10px;background-color: white; "><a href="admin_aptitude.php">View</a></button><br>

          <button type="submit" class="btn" name="view"  style="margin-left: 1430px; margin-top: 10px;background-color: white; "><a href="admin_ds.php">View</a></button><br>

        </td>
    
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




  