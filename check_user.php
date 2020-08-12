<?php
# Including config.php file - MySQL Configuration File
include ("config.php");

// If a user checked check_user.php page, it will redirect to new_user.php and err meg will displayed
 #code...
if (isset($_POST["name"])) {
  # code...
  $name = $_POST["name"];

  if (strlen($name) >= 3) {
    // username validation
    // if there is the same username in db then it will throw err
    # code...
    $sql = " SELECT username FROM users WHERE username='$name' ";
    $result = $conn -> query($sql);
    if ($result -> num_rows>0) {
      // if num_rows>0 - true, so there is user record already
      # code...
      echo "<i style='color:red;'>Username Already Taken</i>";
    } else {
      # code...
      echo "<i style='color:green;'>Username Available</i>";

    }
    
  } else {
    # code...
        echo "Please Enter Username with more than 3 Characters";
  }
  
} else {
  # code...
  header("location:new_user.php?err=<p>Please Register Here</p>");
}

?>