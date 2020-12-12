
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Your Skills</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS Stylesheet link -->
    <link rel="stylesheet" href="registration_form.css">

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
        <li><a class="active nav-link" href="admin_login.php">Home</a></li>
        <li><a class="nav-link" href="index.php">Logout</a></li>
      </ul>
    </nav>
    <section>
      <br>
      <br>

    <div class="wrapper">
    <div class="title">
      Add New Subject
    </div>
    <form action="connect_subject.php" method="POST">
      <div class="form">
        <br>
        <div class="inputfield">
            <label>Subject Name</label>
            <input type="text" class="input" name="sub_name">
         </div> 
         <!-- <br>
         <div class="inputfield">
            <label>Date and Time</label>
            <input type="text" class="input">
         </div> -->  <br>
          <div class="inputfield">
            <label>Total Questions</label>
            <input type="text" class="input" name="total_questions">
         </div>  
         <br>
         <div class="inputfield">
            <label>Marks for Right Answer</label>
            <input type="text" class="input" name="right_answer_mark">
         </div>  
         <br>
         <br>
        <div class="inputfield">
          <input type="submit" value="Add Subject"  name="submit" class="btn">

        </div>
      </div>
    </form>
  </div>
</section>
    
</body>
</html>
