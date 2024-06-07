<?php
$hostname="localhost";
$username="root";
$password="";
$database="onlineweb";
$con=mysqli_connect($hostname,$username,$password,$database);
if(mysqli_connect_errno()){
    echo("not connected");
}

// $hostname="localhost";
// $username="id21743933_vanduu";
// $password="Vandana@02";
// $database="id21743933_jewellery";
// $con=mysqli_connect($hostname,$username,$password,$database);
// if(mysqli_connect_errno()){
//     echo("not connected");
// }
?>