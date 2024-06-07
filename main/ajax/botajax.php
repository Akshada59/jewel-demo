<?php
include("../../config/connect.php");
if(!empty($_POST['value'])){
    $value=strtolower($_POST['value']);
    $querry="SELECT * FROM chatbot WHERE chatbot_input LIKE '%$value%'";
    $result=mysqli_query($con,$querry);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo($row['chatbot_response']);
        }
    }else{
        echo("Not able to answer!!");
    }
}

?>