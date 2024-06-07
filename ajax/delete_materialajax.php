<?php
// Include your database connection file here
include("../../config/connect.php");

if (isset($_GET['id'])) {
    $materialId = $_GET['id'];
    
    // Delete the material from the database
    $deleteQuery = "DELETE FROM `materials` WHERE `material_id` = $materialId";
    $result = mysqli_query($con, $deleteQuery);

    if ($result) {
        // Redirect to the same page after successful deletion
        echo '<script>window.location.href = "../../main/admin/adminpart.php";</script>';
        exit;
    } else {
        echo "Error deleting material.";
    }
} else {
    echo "Material ID not provided.";
}
?>
