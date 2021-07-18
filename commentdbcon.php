<?php
   $connn = mysqli_connect('localhost', 'root', '', 'comment');

   if(!$connn){
      die('Could not Connect My Sql:' .mysql_error());
   }
?>
