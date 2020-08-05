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
    <link rel="stylesheet" href="style.css">
    
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
        <li><a href="#">Blog</a></li>
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
        <form autocomplete="off">
          <table id="login_table">
            <tr>
              <td>Name:</td>
              <td><input type="text" name="name" required/></td>
            </tr>
            <tr>
            <td>Username:</td>
              <td><input type="text" name="username" required /></td>
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
                  <option>What is your pet name?</option>
                  <option>Whats your car model?</option>
                  <option>What is your fav color?</option>
                  <option>Which game do you like best?</option>
                  <option>Where to you live?</option>
                </select>
              </td>
            </tr>
            <tr>
             <td>Answer:</td>
              <td><input type="text" required /></td>
            </tr>
            <tr>
              <td><input type="submit" value="Save" id="subtn"/></td>
              <td><input type="reset" value="Reset" id="rebtn" /></td>                
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

    <!-- Footer -->
    <footer id="footer">
      Copyrights &copy; 2020 | Designed By <b> Minerva J </b>
    </footer>

  </body>
</html>