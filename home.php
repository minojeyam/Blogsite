<?php
# Including config.php file - MySQL Configuration File
include ("config.php");

//starting session
#code...
session_start();
if(!isset($_SESSION["username"])){
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
      <span id="welcome_meg">
        <h2>Home</h2>
        <h3> Hi 
        <!-- php code goes here -->
        <?php
        // Printing the user's name, getting from the $_SESSION we stored already
        echo $_SESSION['username'];
        ?>
        <br>
        Welcome!
        </h3>
      </span>

    <!-- creating chat layout -->
      <form autocomplete="off">
        <input type="text" name="message" id="message" placeholder="Type Here" />
        <br>
        <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['username']; ?>" />
        <br>
        <button type="button" name="submit" id="megbutton"> Send </button>
        <span id="status"></span>
      </form>

    <!-- php code goes here -->
    <?php
    //php code saving chat message in phpmyadmin
      
    ?>

    <br><br><br><br>
    <!-- creating chat layout -->
      <div id="chatbox">
        fgg
      </div>

    </div>

    <!-- Footer -->
    <footer id="footer">
      Copyrights &copy; 2020 | Designed By <b> Minerva J </b>
    </footer>

    <!-- jQuery -->
    <script src="links/jquery-3.5.1.js"></script>

    <!-- jQuery code goes here -->
    <script>
      $(document).ready(function (){

        // Message Typing Status
        $("#message").keypress(function()
          {
            $("#status").html("Typing...");
          }
        );

        // Storing user data when button clicks
        $("#megbutton").click(function(){
          var x = $("#user").val();
          var y = $("#message").val();

          $.post("post_chat.php",{username:x,message:y},function(data)
          {
            $("#status").html(data);
            $("#message").val("");
          });
        });

        //js function to load logs.php using AJEX
        // auto refreshing function after every 100milisecs
        setInterval(() => { loadChats()
          }, 100);
        });

      //js function to load logs.php using AJEX
      function loadChats(){
        $.ajax({url: "logs.php", success: function(result){
            $("#chatbox").html(result);
          }
        });
      }
    </script>

  </body>
</html>