<?php
   session_start();

   if(session_destroy()) {
        header("Location: 1front.php");
        echo '<script language="javascript">';
        echo 'alert("Logout successful")';
        echo '</script>';

   }
?>
