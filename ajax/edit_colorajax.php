<?php
// Include your database connection file here
include("../../config/connect.php");

// Check if color ID is provided
if (isset($_GET['id'])) {
    $colorId = $_GET['id'];

    // Fetch the color details from the database
    $colorQuery = "SELECT * FROM `colors` WHERE `color_id` = $colorId";
    $result = mysqli_query($con, $colorQuery);
    $color = mysqli_fetch_assoc($result);

    if (!$color) {
        echo "Color not found.";
        exit;
    }
} else {
    echo "Color ID not provided.";
    exit;
}

// Check if form is submitted
if (isset($_POST['update'])) {
    $newColorName = $_POST['color_name'];

    // Update the color name in the database
    $updateQuery = "UPDATE `colors` SET `color_name` = '$newColorName' WHERE `color_id` = $colorId";
    $updateResult = mysqli_query($con, $updateQuery);

    if ($updateResult) {
         // echo "Material updated successfully.";
        // Redirect to the admin part page
        header("Location:../admin/adminpart.php");
        exit;
    } else {
        echo "Error updating color.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Color</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>

    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 mx-auto mt-10">
        <form class="space-y-6" method="POST">
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">Update Color</h5>
            <div>
                <label for="color_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color Name:</label>
                <input type="text" id="color_name" name="color_name" value="<?php echo $color['color_name']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Color Name" required />
            </div>

            <button type="submit" name="update" value="Update" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Update</button>

        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
