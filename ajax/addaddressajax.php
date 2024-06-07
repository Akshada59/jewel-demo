<?php
include("../../config/connect.php");
if(
    !empty($_POST['type'])&& !empty($_POST['room'])&& !empty($_POST['building'])&& !empty($_POST['landmark'])&& !empty($_POST['street'])&& !empty($_POST['city'])&& !empty($_POST['pincode'])&& !empty($_POST['email'])
)
$type=$_POST['type'];
$room=$_POST['room'];
$building=$_POST['building'];
$landmark=$_POST['landmark'];
$street=$_POST['street'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$email=$_POST['email'];

$addressquerry="INSERT INTO `address` (`add_type`, `add_room`, `add_blg`, `add_landmark`, `add_street`, `add_city`, `add_pincode`, `add_cus_email`) VALUES ('$type', '$room', '$building', '$landmark', '$street', '$city', '$pincode', '$email');";
$executeaddquerry=mysqli_query($con,$addressquerry);
if($executeaddquerry)
{
    echo("1");
}
else{
    echo("2");
}
?>