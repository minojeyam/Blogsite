<?php
# Including config.php file - MySQL Configuration File
include ("config.php");

// displaying messages
$sql = "SELECT * FROM chats ORDER BY id DESC";
$result = $conn -> query($sql);

if ($result -> num_rows>0) {
  # code...
  while($row=$result->fetch_assoc()){
  echo "
    <div id='chats'>
      <div>
        <p>
          <span id='chatuname'>{$row['name']}</span> &nbsp; 
          <span id='chattime'>{$row['logs']}</span>&nbsp;&nbsp;
          <span id='chatmeg'>{$row['message']}</span>
        </p>
      </div>
    </div>";
  }
    
} else {
  # code...
  echo "No Chats Yet...";
}




?>