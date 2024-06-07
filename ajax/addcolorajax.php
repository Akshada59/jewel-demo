<?php
include("../../config/connect.php");
if(
    !empty($_POST['newColor'])
)
$newColor=$_POST['newColor'];


$colorquery="INSERT INTO `colors` (`color_name`) VALUES ('$newColor')";
$executequerry=mysqli_query($con,$colorquery);
if($executequerry)
{
    echo("1");
}
else{
    echo("2");
}
?>
