<?php
// Include your database connection file here
include("../../config/connect.php");

// Check if category ID is provided
if (isset($_GET['id'])) {
    $categoryId = $_GET['id'];

    // Fetch the category details from the database
    $categoryQuery = "SELECT * FROM `category` WHERE `category_id` = $categoryId";
    $result = mysqli_query($con, $categoryQuery);
    $category = mysqli_fetch_assoc($result);

    if (!$category) {
        echo "Category not found.";
        exit;
    }
} else {
    echo "Category ID not provided.";
    exit;
}

// Check if form is submitted
if (isset($_POST['update'])) {
    $newCategoryName = $_POST['category_name'];

    // Update the category name in the database
    $updateQuery = "UPDATE `category` SET `category_name` = '$newCategoryName' WHERE `category_id` = $categoryId";
    $updateResult = mysqli_query($con, $updateQuery);

    if ($updateResult) {
        // echo "Material updated successfully.";
        // Redirect to the admin part page
        header("Location:../admin/adminpart.php");
        exit;
    } else {
        echo "Error updating category.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
</head>

<body>





<div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 mx-auto mt-10">
    <form class="space-y-6" method="POST">
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Update Categories</h5>
        <div>
            <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name:</label>
            <input type="text" id="category_name" name="category_name" value="<?php echo $category['category_name']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Category Name" required />
        </div>
        
        <button type="submit" name="update" value="Update" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        
    </form>
</div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
