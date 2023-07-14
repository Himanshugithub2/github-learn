<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bd ="userdatabase";
    
   $con=mysqli_connect($servername,$username,$password,$bd);

   if($con)
   {
    echo "successful";
   }
   else{
     echo "Error";
   }
?>
