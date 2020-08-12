<?php
//starting session
#code...
session_start();
# Including config.php file - MySQL Configuration File
include ("config.php")
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
        <li><a href="signin.php">Signin</a></li>
      </ul>
    </nav>

    <!-- Container -->
     <!-- Container -->
    <div id="container">
      <h2>Sign In</h2>

    <!-- php header function goes here -->
    <?php
    if(isset($_GET['meg'])){
        echo $_GET['meg'];
    }
    ?>

      <fieldset id="user_login">
        <legend>
          User Login
        </legend>
        <form method="post" action="signin.php" autocomplete="off">
          <table id="login_table">
            <tr>
              <td>Username:</td>
              <td><input type="text" name="s_username" required /></td>
            </tr>
            <tr>
              <td>Password:</td>
              <td><input type="password" name="s_password" required /></td>
            </tr>
            <tr>
              <td><input type="submit" name="s_submit" value="Login" id="subtn"/></td>
              <td><input type="reset" name="s_reset" value="Reset" id="rebtn" /></td>
            </tr>
            <tr>
              <td><a href="#">Forgot Password?</a></td>
              <td><a href="new_user.php">New User</a></td>
            </tr>
          </table>
        </form>
      </fieldset>
    </div> 

  <!-- php code goes here -->
  <?php
    // when submitting the form, it takes the data and check
    if (isset($_POST["s_submit"])) {
      # code...
      $s_username = $_POST["s_username"];
      $s_password = $_POST["s_password"];
      if ($s_username!="" && $s_password!="") {
        // validating the username="$s_username" and password="$s_password"
        // SQL query goes here
        #code...
        $sql= "SELECT username,password FROM users WHERE username='$s_username' AND password='$s_password'";
        // connecting the SQL query to db and storing the result in a variable
        # code... 
        $result = $conn -> query($sql);
        // printing the result to check whether the function is working or not
        # code... 
        # print_r($result);
        
        // if else to check the valid username and passowrd with the db or Err Meg Prining
        // num_rows==1 means, at a time only one user data has to be validated
        if ($result ->num_rows==1) {
          // maintaining session
          $_SESSION["s_username"] = "$s_username";
          # code...
          header("location:home.php");
          // id username&&password valid, redirect to home.php
        } else {
          # code...
          echo "<p class='error'>Invalid Username or Password</p>";
        }
        

      } else {
        # code...
        echo "<p class='error'>Please Provide The Correct Details To Login</p>";
      }
      
    } else {
      # code...
      echo "<p>Please Fill The Details To Login</p>";
    }

  ?>


    <!-- Footer -->
    <footer id="footer">
      Copyrights &copy; 2020 | Designed By <b> Minerva J </b>
    </footer>

  </body>
</html>