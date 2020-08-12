<?php
//starting session
#code...
session_start();
if(!isset($_SESSION["s_username"])){
   header("location:signin.php?meg=<p class='error'> Please Login Here!</p>");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      Sample HTML, CSS, php Website
    </title>

    <!-- External CSS -->
    <link rel="stylesheet" href="links/style.css">
    
  </head>
  <body>

    <!-- Header -->
    <header id="header">
      <div id="logotxt">
        <h2>Logo Text</h2>
        <h3>slogan Text</h3>
      </div>
      <div id="logo">
        <img src="images/logo.jpg" alt="logo image"/>
      </div>
    </header>

    <!-- Nav Bar -->
    <nav id="navbar">
      <ul id="nav_ul">
        <li><a href="index.php">Home</a></li>
        <li><a href="product.php">Product</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>

    <!-- Container -->
    <div id="container">
      <h2>Home</h2>
      <h3> Hi 
      <!-- php code goes here -->
      <?php
      // Printing the user's name, getting from the $_SESSION we stored already
      echo $_SESSION['s_username'];
      ?>
      <br>
      Welcome!
      </h3>
    <!-- Footer -->
    <footer id="footer">
      Copyrights &copy; 2020 | Designed By <b> Minerva J </b>
    </footer>

  </body>
</html>