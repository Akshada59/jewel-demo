<?php
include("../../config/connect.php");
if(
    !empty($_POST['newCategory'])
)
$newCategory=$_POST['newCategory'];


$categoryquery="INSERT INTO `category` (`category_name`) VALUES ('$newCategory')";
$executequerry=mysqli_query($con,$categoryquery);
if($executequerry)
{
    echo("1");
}
else{
    echo("2");
}
?>
