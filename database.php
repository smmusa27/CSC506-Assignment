<?php
   $conn = mysqli_connect('localhost', 'root', '', 'image-upload');

   if(!$conn){
      die('Could not Connect My to Sql:' .mysql_error());
   }
?>

