<?php
include("../../config/connect.php");

// Check if all required fields are present
if (
    isset($_POST['product_name']) && 
    isset($_POST['product_price']) && 
    isset($_POST['product_category']) && 
    isset($_POST['product_material']) && 
    isset($_POST['product_color']) && 
    isset($_POST['product_description']) && 
    is_array($_FILES)
) {
    // Check if any required field is empty
    // if (
    //     empty($_POST['product_name']) || 
    //     empty($_POST['product_price']) || 
    //     empty($_POST['product_category']) || 
    //     empty($_POST['product_material']) || 
    //     empty($_POST['product_color']) || 
    //     empty($_POST['product_description']) || 
    //     empty($_FILES['images'])
    // ) {
    //     echo 0; // Incomplete data response
    //     exit;
    // }

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
    $product_material = json_decode($_POST['product_material']);
    $product_color = json_decode($_POST['product_color']);
    $product_description = $_POST['product_description'];

    // Insert product into product table
    $insert_product_query = "INSERT INTO `product` (`pro_name`, `pro_descrip`, `pro_price`, `pro_category_id`) 
                             VALUES ('$product_name', '$product_description', '$product_price', '$product_category')";
    $insert_product_result = mysqli_query($con, $insert_product_query);

    if ($insert_product_result) {
        // Get the ID of the inserted product
        $product_id = mysqli_insert_id($con);

        // Insert materials into pmaterials table
        foreach ($product_material as $material_id) {
            $insert_material_query = "INSERT INTO `pmaterials` (`pmaterial_product_id`, `pmaterial_material_id`) 
                                      VALUES ('$product_id', '$material_id')";
            mysqli_query($con, $insert_material_query);
        }

        // Insert colors into pcolors table
        foreach ($product_color as $color_id) {
            $insert_color_query = "INSERT INTO `pcolors` (`pcolor_product_id`, `pcolor_color_id`) 
                                   VALUES ('$product_id', '$color_id')";
            mysqli_query($con, $insert_color_query);
        }

        // Upload images
        $target_dir = "../uploads/";
        $upload_success = true;
        foreach ($_FILES['image']['name'] as $key => $image_name) {
            $image_tmp = $_FILES['image']['tmp_name'][$key];
            $image_name = $_FILES['image']['name'][$key];
            $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
            $unique_filename = uniqid() . '.' . $image_extension;
            $target_file = $target_dir . $unique_filename;
            
        
            // Insert image data into images table
            $insert_image_query = "INSERT INTO `image` (`image_name`, `image_product_id`) 
                                   VALUES ('$target_file', '$product_id')";
            $stmt = mysqli_query($con, $insert_image_query);
            
        
            // Move uploaded file to target directory (optional)
            if (!move_uploaded_file($image_tmp, $target_file)) {
                $upload_success = false;
                break;
            }
        }
        if ($upload_success) {
            echo(1);
        }
        
        
    } else {
        echo 2; // Error response
    }
} else {
    echo 0; // Incomplete data response
}
?>
