<?php
include("../../config/connect.php");
if(
    !empty($_POST['firstName'])&& !empty($_POST['lastName'])&& !empty($_POST['email'])&& !empty($_POST['phoneNumber'])&& !empty($_POST['password'])
)
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$phoneNumber=$_POST['phoneNumber'];
$password=$_POST['password'];

$registerquerry="INSERT INTO `customer` (`cus_email`, `cus_password`, `cus_fname`, `cus_lname`, `cus_phone`) VALUES ('$email', '$password', '$firstName', '$lastName', '$phoneNumber')";
$executequerry=mysqli_query($con,$registerquerry);
if($executequerry)
{
    echo("1");
}
else{
    echo("2");
}
?>
