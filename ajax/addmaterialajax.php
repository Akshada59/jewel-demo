<?php
include("../../config/connect.php");
if(
    !empty($_POST['newMaterial'])
)
$newMaterial=$_POST['newMaterial'];


$materialquery="INSERT INTO `materials` (`material_name`) VALUES ('$newMaterial')";
$executequerry=mysqli_query($con,$materialquery);
if($executequerry)
{
    echo("1");
}
else{
    echo("2");
}
?>
