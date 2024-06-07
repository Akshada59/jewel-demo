<?php
include("../../config/connect.php"); // Include your database connection file


// Check if the product ID is set and is a valid integer
if (isset($_GET['productId']) && is_numeric($_GET['productId'])) {
    $product_id = $_GET['productId'];

    // Delete product image records
    $delete_image_query = "DELETE FROM `image` WHERE `image_product_id` = '$product_id'";
    mysqli_query($con, $delete_image_query);

    // Delete product material records
    $delete_material_query = "DELETE FROM `pmaterials` WHERE `pmaterial_product_id` = '$product_id'";
    mysqli_query($con, $delete_material_query);

    // Delete product color records
    $delete_color_query = "DELETE FROM `pcolors` WHERE `pcolor_product_id` = '$product_id'";
    mysqli_query($con, $delete_color_query);

    // Delete the product record
    $delete_product_query = "DELETE FROM `product` WHERE `pro_id` = '$product_id'";
    if (mysqli_query($con, $delete_product_query)) {
        // Redirect back to the product list page
        echo '<script>window.location.href = "../../main/admin/adminaddcus.php";</script>';
                                exit;
    } else {
        // Error message if deletion fails
        echo "Error deleting product";
    }
} else {
    // Redirect to an error page if the product ID is not valid
    header('Location: error.php');
    exit;
}



?>
