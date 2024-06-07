<?php
// Include your database connection file here
include("../../config/connect.php");

if (isset($_GET['id'])) {
    $colorId = $_GET['id'];

    // Delete the color from the database
    $deleteQuery = "DELETE FROM `colors` WHERE `color_id` = $colorId";
    $result = mysqli_query($con, $deleteQuery);

    if ($result) {
         // Redirect to the same page after successful deletion
        echo '<script>window.location.href = "../../main/admin/adminpart.php";</script>';
        exit;
    } else {
        echo "Error deleting color.";
    }
} else {
    echo "Color ID not provided.";
}
?>
