<?php
ob_start();
session_start();

include("../../config/connect.php");
if(
    !empty($_POST["email"]) && !empty($_POST["password"])
)
{
    $email=$_POST["email"];
    $password=$_POST["password"];

    $loginquery="SELECT * FROM customer WHERE `cus_email` = '$email' AND cus_password = '$password'";
   
    $exutequery=mysqli_query($con,$loginquery);
   if(mysqli_num_rows($exutequery)==1)
   {
    while($row=mysqli_fetch_assoc($exutequery))
    {
        $_SESSION["email"]=$row["cus_email"];
        $_SESSION["firstname"] = $row["cus_fname"];
        $_SESSION["lastname"] = $row["cus_lname"];
        $_SESSION["type"] = "c";
        echo("1");
    }
   }
   else{
    echo("2");
   }
}

ob_flush();
?>