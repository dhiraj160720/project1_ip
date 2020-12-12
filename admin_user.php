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

  $sql = "select * from history";
  $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Your Skills</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts links -->
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">


    <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
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
  background-image: url(quiz52.jpg);
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

.title-container{
  width: 600px;
  height: 70px;
  margin-left: 20px;
  padding: 5px;
}

.big-heading{
  font-family: "Montserrat";
  font-size: 3.5vw;
  line-height: 1.5;
  text-align: left;
  color: white;
}

.form_wrapper {
  width: 444px;
  height: 450px;
  /* this will help us center it*/
  margin: 5px 40px 100px 700px;
  right: 100px;
  float: right;
  background-color: var(--form_bg);
  border-radius: 50px;
  /* make it a grid container*/
  display: grid;
  /* with two columns of same width*/
  grid-template-columns: 1fr 1fr;
  /* with a small gap in between them*/
  grid-gap: 5vw;
  /* add some padding around */
  padding: 5vh 10px;
}

/* On the left side we simply want to display an image centered. */
#form_left {
  /* center the image */
  display: flex;
  justify-content: center;
  align-items: center;
}

/* #form_left img {
  width: 100px;
  height: 100px;
} */

/* Now let's move to styling the form_right container */
#form_right {
  display: grid;
  /* single column layout */
  grid-template-columns: 1fr;
  /* have some gap in between elements*/
  grid-gap: 15px;
  padding: 10px 5px;
  width: 238px;
}

/* And this is the style for the input tags: */

.input_container {
  background-color: var(--input_bg);
  /* vertically align icon and text inside the div*/
  display: flex;
  align-items: center;
  padding-left: 20px;
}

.input_container:hover {
  background-color: var(--input_hover);
}

.input_container,
#input_submit {
  height: 50px;
  /* make the borders more round */
  border-radius: 30px;
  width: 100%;
}

.input_field {
  /* customize the input tag with lighter font and some padding*/
  color: var(--icon_color);
  background-color: inherit;
  width: 85%;
  border: none;
  outline:none;
  font-size: 1.3rem;
  font-weight: 400;
  padding-left: 30px;
}

.input_field:hover,
.input_field:focus {
  /* remove the outline */
  outline: none;
}

#input_submit {
  /* submit button has a different color and different padding */
  background-color: var(--submit_bg);
  padding-left: 0;
  font-weight: bold;
  color: white;
  text-transform: uppercase;
}

#input_submit:hover {
  background-color: var(--submit_hover);
  /* simple color transition on hover */
  transition: background-color,
      1s;
  cursor: pointer;
}

/* Now let's finish by styling our h1 and our span and a tags */

h1,
span {
    text-align: center;
}

/* shift it a bit lower */
#create_account {
    display: block;
    position: relative;
}

.forgot-pass, .create-account {
    /* remove default underline */
    text-decoration: none;
    color: var(--submit_bg);
    font-weight: bold;
}

.create-account:hover, .forgot-pass:hover {
    color: rgb(38, 120, 175);
}

i {
    color: var(--icon_color);
}

table {
        position: absolute;
        left: 50%;
        top: 50%;
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

    @media (max-width: 1300px){
      table{
        overflow-x: auto;
        width: 800px;
        margin-top: 30px;
      }
    }

    @media (max-width: 630px){
      table{
        overflow-x: auto;
        margin-left: 150px;
        margin-top: 50px;
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
      <label class="logo"><a href="admin_login.php" style="color: white;">TYS</a></label>
      <ul>
        <li><a class=" nav-link" href="admin_login.php">Home</a></li>
        <li><a class="active nav-link" href="admin_user.php">User Details</a></li>
        <li><a class="nav-link" href="admin_login.php#footer">Contact Us</a></li>
        <li><a class="nav-link" href="index.php">Logout</a></li>
      </ul>
    </nav>

    <section>
          <table >
<thead>
<tr id="header">
                    <th  style="text-align: center;">USERNAME</th>
                    <th  style="text-align: center;">SUBJECT NAME</th>
                    <th  style="text-align: center;">DATE AND TIME</th>
                    <th  style="text-align: center;">TOTAL MARKS</th>
                    <th  style="text-align: center;">PERCENTAGE</th>                    
                    
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
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['username'];?></td>
        <input type="hidden" name="name" value="<?php echo $rows['username'] ; ?>">
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['sub_name'];?></td>
        <input type="hidden" name="name" value="<?php echo $rows['sub_name'] ; ?>">
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['date_time'];?></td>
        <input type="hidden" name="email" value="<?php echo $rows['date_time'] ; ?>">
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['marks'];?></td>
        <input type="hidden" name="credit" value="<?php echo $rows['marks'] ; ?>" >
        <td style="text-align: center;color: black;font-family: 'Sansita Swashed', cursive;"><?php echo $rows['percentage'];?></td>
        <input type="hidden" name="credit" value="<?php echo $rows['percentage'] ; ?>" >

        

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