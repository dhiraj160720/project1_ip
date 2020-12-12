
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
        <li><a class="active nav-link" href="index.php">Home</a></li>
        <li><a class="nav-link" href="#">About</a></li>
        <li><a class="nav-link" href="index.php#footer">Contact</a></li>
      </ul>
    </nav>
    <section>
      <br>
      <br>

      <div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <form action="connect1.php" method="POST">
      <div class="form">
       <div class="inputfield">
          <label>Name</label>
          <input type="text" class="input" name="name">
       </div>  
        <div class="inputfield">
          <label>Username</label>
          <input type="text" class="input" name="username">
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password">
       </div> 
        <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input" name="confirmpassword">
       </div>  
        <div class="inputfield">
          <label name="gender">Gender</label>
          <input type="text" class="input" name="gender">
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="contact">
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn" name="submit">
      </div>
    </div>
    </form>

</div>
    </section>
  
    
</body>
</html>
