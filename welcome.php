<?php
   session_start();
?>

<?php
   include_once 'config.php';
?>

<!DOCTYPE html>
<html>
   <head>
      <title>My Shopping Cart</title>
      <link rel="stylesheet" type="text/css" href="styles/styles.css">
   </head>
   <body>
      <img src="images/logo.png" alt="Shopping Cart Logo" class="center" width="200" height="200">
      <center>
         <h1>Shopping Cart</h1>
         <h3 id="subheader">The Online Shopping Store</h3>
      </center>
      <hr>
      <ul class="menu">
         <li class="menu"><a href="index.html">Home</a></li>
         <li class="menu"><a href="news.html">News</a></li>
         <li class="menu"><a href="register.html">Contact</a></li>
         <li class="menu"><a href="about.php">About Us</a></li>
      </ul>
      <br><br>
      <center>
        <h2><?php echo $_SESSION['logged_user'] ?></h2>
      </center>
      <hr>
      <footer>
         <h3 id="footer">Created By: Kavindu Dilshan</h3>
         <h4 id="footer"><a href="http://courseweb.sliit.lk/">Visit to Our Course</a></h4>
      </footer>
   </body>
</html>