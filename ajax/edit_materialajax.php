<?php
// Include your database connection file here
include("../../config/connect.php");

// Check if material ID is provided
if (isset($_GET['id'])) {
    $materialId = $_GET['id'];

    // Fetch the material details from the database
    $materialQuery = "SELECT * FROM `materials` WHERE `material_id` = $materialId";
    $result = mysqli_query($con, $materialQuery);
    $material = mysqli_fetch_assoc($result);

    if (!$material) {
        echo "Material not found.";
        exit;
    }
} else {
    echo "Material ID not provided.";
    exit;
}

// Check if form is submitted
if (isset($_POST['update'])) {
    $newMaterialName = $_POST['material_name'];

    // Update the material name in the database
    $updateQuery = "UPDATE `materials` SET `material_name` = '$newMaterialName' WHERE `material_id` = $materialId";
    $updateResult = mysqli_query($con, $updateQuery);

    if ($updateResult) {
        // echo "Material updated successfully.";
        // Redirect to the admin part page
        header("Location:../admin/adminpart.php");
        exit;
    } else {
        echo "Error updating material.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Material</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
</head>
<body>

<div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 mx-auto mt-10">
    <form class="space-y-6" method="POST">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Update Material</h5>
        <div>
            <label for="material_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Material Name:</label>
            <input type="text" id="material_name" name="material_name" value="<?php echo $material['material_name']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Material Name" required />
        </div>
        <button type="submit" name="update" value="Update" class="w-full text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Update</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
