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
        <li><a href="#">Blog</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="signin.php">Signin</a></li>
      </ul>
    </nav>

    <!-- Container -->
     <!-- Container -->
    <div id="container">
      <h2>Sign In</h2>
      <fieldset id="user_login">
        <legend>
          User Login
        </legend>
        <form>
          <table id="login_table">
            <tr>
              <td>Username:</td>
              <td><input type="text" /></td>
            </tr>
            <tr>
              <td>Password:</td>
              <td><input type="password" /></td>
            </tr>
            <tr>
              <td><input type="submit" value="Login" id="subtn"/></td>
              <td><input type="reset" value="Reset" id="rebtn" /></td>
            </tr>
            <tr>
              <td><a href="#">Forgot Password?</a></td>
              <td><a href="new_user.php">New User</a></td>
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