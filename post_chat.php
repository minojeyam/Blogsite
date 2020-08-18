<?php

// Including config.php file - MySQL Configuration File
include ("config.php");

//php code saving chat message in phpmyadmin
  $username = $_POST["username"];
  $message = $_POST["message"];

  // sql INSERT Query goes here
  $sql = "INSERT INTO chats(name,message,logs)VALUES('$username','$message',NOW())";

  // if else to check the Insertation Success or Err Meg Prining 
  if ($conn -> query($sql)) {
    # code...
    echo "Message Sent";
  } else {
    # code...
    echo "Error";
  };    
        
?>