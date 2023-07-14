<?php
    include 'conn.php';
    if(isset($_POST['name']))
    {

        $name =$_POST['name'];
        $MobileNumber =$_POST['MobileNumber'];
        $gender =$_POST['gender'];
        $city =$_POST['city'];
        $email =$_POST['email'];
        $password =$_POST['password'];


        $insertquery = "insert into registation(name,MobileNumber,gender,city,email,password) value('".$name."','".$MobileNumber."','".$gender."','".$city."','".$email."','".$password."')";
         $rev=mysqli_query($con,$insertquery);
         if($rev)
         {
            echo "successful";
         }
         else{
            echo "error";
         }


    }
?>
