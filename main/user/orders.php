<?php 
session_start(); 
if(isset($_SESSION["email"]) && isset($_SESSION["firstname"]) && isset($_SESSION["lastname"]) && isset($_SESSION["type"])  )
{
    $email = $_SESSION["email"];
    $firstname=$_SESSION["firstname"];
    $lastname=$_SESSION["lastname"];
    $_SESSION["type"] = "c";
}else{
    echo ("<script>location.href='login.php'</script>");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Jewelry Shop</title>
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />


</head>

<body>
    <?php
    include("./layout/header/header.php");
    include("../../config/connect.php");
    ?>


    <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto mt-10">
        <div class="flex justify-start item-start space-y-2 flex-col mb-3">


            <?php

            $ordercusquery = "SELECT * FROM `orders` WHERE `orders`.`order_cus_emaill`='$email'";
            $execute_ordercusquery = mysqli_query($con, $ordercusquery);
            if (mysqli_num_rows($execute_ordercusquery)) {
                while ($row_of_order = mysqli_fetch_assoc($execute_ordercusquery)) {

                    ?>

                    <h1 class="text-3xl dark:text-white lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">Order Id: #<?php echo $row_of_order["order_pk"]; ?></h1>
                    <p class="text-base dark:text-gray-300 font-medium leading-6 ml-3 text-gray-600"><?php echo $row_of_order["order_datee"]; ?></p>
        </div>
        <span class="ml-2 items-center w-full gap-x-1.5 py-1 px-2  text-s font-medium border-b-2 border-red-800 text-red-800 dark:border-red-200 dark:text-white"><?php echo $row_of_order["order_statuss"]; ?></span>
        <div class="mt-4 flex flex-col xl:flex-row jusitfy-center items-stretch w-full xl:space-x-8 space-y-4 md:space-y-6 xl:space-y-0">
            <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">




                <?php
                $orderid = $row_of_order["order_pk"];
                $subtotal = 0; // Initialize subtotal
                $getproducts = "SELECT * FROM `includes`,`product` WHERE `includes`.`includes_product_id`=`product`.`pro_id` AND `includes`.`includes_order_id`='$orderid'";
                $execute_getproducts = mysqli_query($con, $getproducts);
                if (mysqli_num_rows($execute_getproducts)) {
                    while ($row_of_getproducts = mysqli_fetch_assoc($execute_getproducts)) {
                        // Calculate total price for each product
                        $totalPrice = $row_of_getproducts["num_pc"] * $row_of_getproducts["pro_price"];
                        $subtotal += $totalPrice; // Add total price to subtotal

                        ?>

                        <!-- product order -->
                        <div class="flex flex-col justify-start items-start dark:bg-gray-800 bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                            <div class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                                <div class="pb-4 md:pb-8 w-full md:w-40">
                                    <?php
                                    $product_id = $row_of_getproducts["pro_id"];
                                    $imageQuery = "SELECT image_name 
                                                FROM image 
                                                WHERE image_product_id = $product_id 
                                                LIMIT 1";
                                    $execute_image = mysqli_query($con, $imageQuery);
                                    if (mysqli_num_rows($execute_image)) {
                                        while ($row_of_image = mysqli_fetch_assoc($execute_image)) {
                                            ?>
                                            <img class="w-full hidden md:block" src="<?php echo ($row_of_image["image_name"]); ?>" alt="dress" />
                                            <img class="w-full md:hidden" src="<?php echo ($row_of_image["image_name"]); ?>" alt="dress" />
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                                    <div class="w-full flex flex-col justify-start items-start space-y-8">
                                        <h3 class="text-xl dark:text-white xl:text-2xl font-semibold leading-6 text-gray-800"><?php echo $row_of_getproducts["pro_name"]; ?></h3>
                                        <div class="flex justify-start items-start flex-col space-y-2">
                                            <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-300">Price: </span> Rs.<?php echo $row_of_getproducts["pro_price"]; ?></p>
                                            <p class="text-sm dark:text-white leading-none text-gray-800"><span class="dark:text-gray-400 text-gray-300">Quantity: </span><?php echo $row_of_getproducts["num_pc"]; ?></p>
                                        </div>
                                    </div>
                                    <div class="flex justify-end space-x-8 items-start w-full">
                                        <p class="text-base dark:text-white xl:text-lg font-semibold leading-6 text-gray-800">Rs.<?php echo $totalPrice; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php

                    }
                }
                ?>

            </div>
            <div class="bg-gray-50 dark:bg-gray-800 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
                <h3 class="text-xl dark:text-white font-semibold leading-5 text-gray-800">Summary</h3>
                <div class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
                    <div class="flex justify-center flex-col md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                        <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 dark:bg-gray-800 space-y-6">

                            <?php
                            $execute_getproducts = mysqli_query($con, $getproducts);
                            if (mysqli_num_rows($execute_getproducts)) {
                                while ($row_of_getproducts = mysqli_fetch_assoc($execute_getproducts)) {
                                    // Calculate total price for each product
                                    $totalPrice = $row_of_getproducts["num_pc"] * $row_of_getproducts["pro_price"];
                                    ?>

                                    <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                                        <div class="flex justify-end w-full">
                                            <p class="text-base dark:text-gray-300 leading-4 text-gray-600">Rs.<?php echo $totalPrice; ?></p>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="flex justify-between items-center w-full">
                            <p class="text-base dark:text-white font-semibold leading-4 text-gray-800">Total</p>
                            <p class="text-base dark:text-gray-300 font-semibold leading-4 text-gray-600">Rs.<?php echo $subtotal; ?></p>
                        </div>
                    </div>

                    <div class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
                        <p class="text-base dark:text-white font-semibold leading-4 text-center md:text-left text-gray-800">Address</p>
                        <?php
                        $address_id = $row_of_order["order_add_idd"];
                        $addressQuery = "SELECT * FROM `address` WHERE `address`.`add_id`= '$address_id'";
                        $executequery = mysqli_query($con, $addressQuery);
                        if (mysqli_num_rows($executequery) > 0) {
                            while ($row_of_address = mysqli_fetch_assoc($executequery)) {
                                ?>
                                <p class="w-48 lg:w-full dark:text-gray-300 xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600"><?php echo $row_of_address["add_type"] ?> <?php echo $row_of_address["add_room"] ?> <?php echo $row_of_address["add_blg"] ?> <?php echo $row_of_address["add_landmark"] ?> <?php echo $row_of_address["add_street"] ?> <?php echo $row_of_address["add_city"] ?> <?php echo $row_of_address["add_pincode"] ?></p>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        </div>

            <?php
        }
        } else {
            ?>

            <div class="grid h-screen place-content-center bg-white">
                <div class="text-center">
                    <img src="https://elements-cover-images-0.imgix.net/81a21290-d463-45ed-b2fc-968f275dd90b?auto=compress%2Cformat&w=1370&fit=max&s=e797f85ee2731c4d967f4efd40a134d6" alt="Explore More Products" class="h-64">
                    <h1 class="mt-6 text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Explore More Products</h1>
                    <p class="mt-4 text-gray-500">Your Order is empty!!</p>
                </div>
            </div>

<?php
}

?>


<?php
include("./layout/footer/footer.php");
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
