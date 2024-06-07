<?php
include("../../config/connect.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST["product_id"]) && isset($_POST["product_name"]) && isset($_POST["product_price"]) && isset($_POST["product_category"]) && isset($_POST["product_material"]) && isset($_POST["product_color"]) && isset($_POST["product_description"]) && isset($_FILES["image"])) {

        // Escape special characters and sanitize the input data
        $id = mysqli_real_escape_string($con, $_POST["product_id"]);
        $product_name = mysqli_real_escape_string($con, $_POST["product_name"]);
        $product_price = mysqli_real_escape_string($con, $_POST["product_price"]);
        $product_category = mysqli_real_escape_string($con, $_POST["product_category"]);
        $product_material = json_decode($_POST["product_material"]); // Decode JSON string to array
        $product_color = json_decode($_POST["product_color"]); // Decode JSON string to array
        $product_description = mysqli_real_escape_string($con, $_POST["product_description"]);

        // Update product details in the database
        $update_product_query = "UPDATE `product` SET `pro_name`='$product_name', `pro_price`='$product_price', `pro_category_id`='$product_category', `pro_descrip`='$product_description' WHERE `pro_id`='$id'";

        if (mysqli_query($con, $update_product_query)) {
            // Update materials and colors
            // First, delete existing entries for the product
            $delete_materials_query = "DELETE FROM `pmaterials` WHERE `pmaterial_product_id`='$id'";
            mysqli_query($con, $delete_materials_query);

            $delete_colors_query = "DELETE FROM `pcolors` WHERE `pcolor_product_id`='$id'";
            mysqli_query($con, $delete_colors_query);

            // Then, insert new entries
            foreach ($product_material as $material) {
                $insert_material_query = "INSERT INTO `pmaterials` (`pmaterial_product_id`, `pmaterial_material_id`) VALUES ('$id', '$material')";
                mysqli_query($con, $insert_material_query);
            }

            foreach ($product_color as $color) {
                $insert_color_query = "INSERT INTO `pcolors` (`pcolor_product_id`, `pcolor_color_id`) VALUES ('$id', '$color')";
                mysqli_query($con, $insert_color_query);
            }

            // Upload images
            $upload_dir = "../../main/uploads";

            foreach ($_FILES["image"]["tmp_name"] as $key => $tmp_name) {
                $file_name = $_FILES["image"]["name"][$key];
                $file_tmp = $_FILES["image"]["tmp_name"][$key];

                $upload_path = $upload_dir . $file_name;

                // Move uploaded file to the specified directory
                move_uploaded_file($file_tmp, $upload_path);

                // Insert image details into the database
                $insert_image_query = "INSERT INTO `image` (`image_product_id`, `image_name`) VALUES ('$id', '$upload_path')";
                mysqli_query($con, $insert_image_query);
            }

            echo 1; // Success message
        } else {
            echo 0; // Failure message
        }
    } else {
        echo "Invalid data"; // Data is missing
    }
} else {
    echo "Invalid request"; // Request method is not POST
}


?>
