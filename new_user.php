<?php
# Including config.php file - MySQL Configuration File
include ("config.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      Sample HTML, CSS, php Website
    </title>

    <!-- jQuery -->
    <script src="links/jquery-3.5.1.js"></script>
   
    <!-- External JS -->
    <script src="links/script.js"></script>

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
        <li><a href="#">Abour Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="signin.php">Signin</a></li>
      </ul>
    </nav>

    <!-- Container -->
    <div id="container">
      <h2>New User Registration</h2>
      <fieldset id="newuser_login">
        <legend>
          New User Registration
        </legend>

              <span id="feedback" style="margin:10px"></span>
              <!-- php code goes here -->
              <?php
              // If a user typed his username, it will display in this span tag or err meg will displayed
              if (isset($_GET['err'])) {
                // err displaying code 
                //$_GET['err'] : get the err meg from check_user.php
                # code...
                echo "<p style='color:red;'>" .$_GET['err']. "</p>";
              } else {
                # code...
              }
              ?>

        <form name="new_user_reg" autocomplete="off" method="POST" action="new_user.php">
          <table id="login_table">
            <tr>
              <td>Name:</td>
              <td><input type="text" name="name" required/></td>
            </tr>
            <tr>
            <td>Username:</td>
              <td><input type="text" name="username" id="username_id" required /></td>
            </tr>
             <tr>
            <td>Email:</td>
              <td><input type="email" name="email" required /></td>
            </tr>
            <tr>
              <td>Password:</td>
              <td><input type="password" name="password1" id="pw1" required /></td>
              <td>
                <i id="password_err" class="error"></i>
                <i id="password_correct" class="match"></i>
            </td>
            </tr>
            <tr> 
             <td>Confirm Password:</td>
              <td><input type="password" name="password2" id="pw2" required /></td>
            </tr>
            <tr>
             <td>Security Question:</td>
              <td>
                <select name="secqu" required >
                  <option value="What is your pet name?">What is your pet name?</option>
                  <option value="Whats your car model?">Whats your car model?</option>
                  <option value="What is your fav color?">What is your fav color?</option>
                  <option value="Which game do you like best?">Which game do you like best?</option>
                  <option value="Where to you live?">Where to you live?</option>
                </select>
              </td>
            </tr>
            <tr>
             <td>Answer:</td>
              <td><input type="text" name="secanswer" required /></td>
            </tr>
            <tr>
              <td><input type="submit" name="submit" value="Save" id="subtn"/></td>
              <td><input type="reset" name="reset" value="Reset" id="rebtn" /></td>                
            </tr>
            <tr >
              <td colspan = "2">
                <center>
                <a href="signin.php">Already Have An Account</a>
                </center>
              </td>
            </tr>
          </table>
        </form>
      </fieldset>
    </div> 

    <!-- php code goes here -->
    <?php
      //php code for form fields checking
      if (isset($_POST["submit"])) {
        # code...
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password1 = $_POST["password1"];
        $password2 = $_POST["password2"];
        $secqu = $_POST["secqu"];
        $secanswer = $_POST["secanswer"];

        if($name != "" && $username != "" && $email != "" && $password1 != "" && $password2 != "" && $secqu != "" && $secanswer != "")
         {
          if ($password1 == $password2){

            // sql INSERT Query goes here
            //$sql = "INSERT INTO users('name','username','email','password','question','answer')VALUES('$name','$username','$email','$password1','$secqu','$secanswer')";
            $sql = "INSERT INTO users(name,username,email,password,question,answer)VALUES('$name','$username','$email','$password1','$secqu','$secanswer')";
           
            // if else to check the Insertation Success or Err Meg Prining 
            if ($conn->query($sql)) {
              # code...
              // Welcome Message 
              // echo ("<p class='match'> Data Stored Successfully. <br> Welcome to the family. </p>");

              // passing this to signin.php and ask them to sign in there - using header (Using GET function)
              header("location:signin.php?meg=<p class='match'> Data Stored Successfully. <br> Welcome to the family. Please Login Here!</p>");
            
            } else {
              # code...
              echo ("<p class='error'> Insertation Unsuccessful <br> Try Again</p>");
            }
            
          }else {
            # code...
            echo ("<p class='error'> Password Mismatched </p>");
          }
        } else{ 
          # code...
          echo ("<p class='error'> All The Fields Required </p>");
        }

      } else {
        # code...
        echo ("<p> Please Fill All The Fields </p>");
      }
    ?>

    <!-- Footer -->
    <footer id="footer">
      Copyrights &copy; 2020 | Designed By <b> Minerva J </b>
    </footer>

  </body>
</html>