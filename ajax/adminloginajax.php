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

 if($email=="jeweladmin@gmail.com" && $password=="jeweladmin") {
    
   $_SESSION["email"]=$email;
   $_SESSION["type"] = "a";

   echo "1";
 }
 else{
    echo "2";
 }
}

ob_flush();

?>