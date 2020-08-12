<?php
//starting session
#code...
session_start();

//starting session
#code...
session_destroy();

//If Session ended, Redirecting to Signin
header("location:signin.php?meg=<p class='error'> Please Login Here!</p>");

?>