<?php 
$message=$_POST['message'];

function chrome_display_message($message='') {
   header('X-DHTML-CONSOLE-MSG: '.$message);
}

chrome_display_message($message);
  
echo $message;
?>