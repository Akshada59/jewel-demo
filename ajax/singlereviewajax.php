<?php
include("../../config/connect.php");
if(
    !empty($_POST['review_text'])&& !empty($_POST['pro_id'])&& !empty($_POST['cus_id'])
)
$review_text=$_POST['review_text'];
$pro_id=$_POST['pro_id'];
$cus_id=$_POST['cus_id'];

$reviewquerry="INSERT INTO `review` (`review_text`, `review_cus_email`, `review_product_id`) VALUES ('$review_text', '$cus_id', '$pro_id')";
$executequerry=mysqli_query($con,$reviewquerry);
if($executequerry)
{
    echo("1");
}
else{
    echo("2");
}
?>
