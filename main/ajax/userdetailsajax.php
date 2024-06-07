<?php
include("../../config/connect.php");
if(
    !empty($_POST['firstName'])&& !empty($_POST['lastName'])&& !empty($_POST['phone'])&& !empty($_POST['email'])
)
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$cusdetailquery="UPDATE `customer` SET `cus_fname` = '$firstName', `cus_lname` = '$lastName', `cus_phone` = '$phone' WHERE `customer`.`cus_email` = '$email'";
$executecusquerry=mysqli_query($con,$cusdetailquery);
if($executecusquerry)
{
    echo("1");
}
else{
    echo("2");
}
?>