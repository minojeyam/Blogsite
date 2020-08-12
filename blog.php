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

        <!-- php code goes here -->
        <?php
        // If a session going on then display Logout option else Signin
        if (isset($_SESSION['s_username'])) {
          # code...
          echo "<li><a href='logout.php'>Logout</a></li>";
        } else {
          # code...
          echo "<li><a href='signin.php'>Signin</a></li>";
        }        
        ?>
      </ul>
    </nav>

    <!-- Container -->
    <div id="comments">
      <br><br>
        <center><img src="images/blog.jpg" alt="Laptop" id="blog_img"></center>
      <br>  
        <p>
          Lorem ipsum dolor sit amet, sapien sollicitudin ad vehicula quisque cras. Est felis per neque. Lorem interdum aenean wisi, quam a odio ante at pellentesque cras, morbi eu at sed, erat sem sem condimentum nisl ac consectetuer. Vitae felis tincidunt aliquet placerat interdum quis, nisl eu ante adipisci imperdiet praesent integer, torquent rhoncus tempus eu et tristique sapien, in ac ac cubilia massa urna ut, perferendis vel. Ultrices quidem curabitur praesent natoque fusce. Wisi quam dui et, libero lobortis, convallis amet tortor fringilla eu, vel lectus imperdiet a amet at interdum. Placerat mattis dolor vulputate donec quam sollicitudin, habitant commodo aliquet. Nonummy inceptos ut lacus, in nec mollis. Cursus massa ac libero, pellentesque justo odio vestibulum facilisis, nam magna, eros pretium purus.
        </p>
        <br>
    <!-- Blog Comment Form -->
    <div>
     <fieldset id="user_login">
        <legend>
          Your Comments
        </legend>
        <form method="post" action="blog.php" autocomplete="off">
          <table id="login_table">
            <tr>
              <td>Name:</td> 
              <!-- php code goes here -->
              <?php 
              // Getting name from $_SESSION
              #code...
              if(isset($_SESSION['s_username'])) {
              echo '<td><input type="text" name="s_username" value="'.$_SESSION['s_username'].'" readonly required /></td>';
              } else {
              echo "<td><a href='signin.php'>Please Login To Access</a></td>";
              // If there is no value in $_SESSION
              //$_POST[''];
              } 
              ?>
            </tr>
            <tr>
              <td>Comment:</td>
              <td><textarea name="comment" required></textarea></td>
            </tr>
            <tr>
              <center>
              <td colspan="2"><input type="submit" name="b_submit" value="Post Your Comments Here" id="b_subtn"/></td>
            </center>
            </tr>
          </table>
        </form>
      </fieldset>

  <!-- php code goes here -->
  <?php
  // Inserting new comments to db
  if (isset($_POST["b_submit"])){
    // Getting the value from comment form
    $s_username = $_POST["s_username"];
    $comment = $_POST["comment"];
    // If name and comment box is filled only, insert that to db
    if ($s_username != "" && $comment != "") {
      # code...
      //Inserting into comment db
      $sql = "INSERT INTO comments(name,comment,logs)VALUES('$s_username','$comment',NOW())";
      // Connecting Query to DB
      $conn -> query($sql);
    } else {
      # code...
      echo "<p>Login and Drop Your Comments Here!</p>";
    }
  }

  // Getting the inserted comments from db
  $sql = "SELECT * FROM comments ORDER BY id DESC";
  $result = $conn->query($sql);
  if ($result -> num_rows>0) {
    //fetch_assoc() - will fetch data from db and save it in the $row
    # code...
    while($row=$result->fetch_assoc()){
      
      echo "<br><br>
      <hr><p style='margin-left:30px; height:5px; padding:2px;'><b>{$row['name']}</b> &nbsp;&nbsp; 
      <i>{$row['logs']}</i></p><br>
      <p style='margin-left:30px;'>{$row['comment']}</p><hr>";

    }
  } else {
    # code...
    echo "<p>there are no comments</p>";
  }
  ?>
    </div>
  </div>

    <!-- Footer -->
    <footer id="footer">
      Copyrights &copy; 2020 | Designed By <b> Minerva J </b>
    </footer>

  </body>
</html>