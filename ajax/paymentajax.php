<?php
include("../../config/connect.php");
if (
    !empty($_POST["pay_amount"]) && !empty($_POST["pay_id"]) && !empty($_POST["cust_id"]) && !empty($_POST["data"])
) {
    date_default_timezone_set('Asia/Kolkata');

    $data = $_POST["data"];
    // Example fixing the error
    $decodedData = json_decode($data, true);



    // Check if decoding was successful
    $address = $_POST["address"];
    $pay_amount = $_POST["pay_amount"];
    $pay_id = $_POST["pay_id"];
    $cus_id = $_POST["cust_id"];
    $currentDate = date("Y-m-d");
    // Output: Current date in the format YYYY-MM-DD
    $currentDateTime = date("H:i:s");
    // Output: Current time in the format HH:MM:SS
    //datetime
    $datetime = new DateTime();
    $formattedDateTime = $datetime->format('Y-m-d H:i:s');


    $setorder = "INSERT INTO `orders` (`order_datee`, `order_statuss`, `order_add_idd`, `order_cus_emaill`) VALUES ('$formattedDateTime', 'pending', '$address', '$cus_id')";
    $executeorderquerry = mysqli_query($con, $setorder);
    if ($executeorderquerry) {
        $pay_order_id = mysqli_insert_id($con);
        $setpayment = "INSERT INTO `payment` (`pay_id`, `pay_date`, `pay_amount`, `pay_status`, `pay_order_id`, `pay_cus_email`) VALUES ('$pay_id', '$formattedDateTime', '$pay_amount', 'confirm', '$pay_order_id', '$cus_id')";

        $exutequery = mysqli_query($con, $setpayment);
        if ($exutequery) {
            $includes = "INSERT INTO `includes` (`includes_product_id`, `includes_order_id`, `num_pc`) VALUES ('1', '1', '2')";

            if ($decodedData !== null) {
                // Access individual elements
                $cart = $decodedData['cart'];
                if (empty($cart)) {
                    // If the cart is empty, display a message
                    echo "Your cart is empty!!";
                } else {
                    // Loop through the cart items
                    $count = 0;
                    $insertId = mysqli_insert_id($con);
                    foreach ($cart as $item) {
                        $pro_id = $item['pro_id'];
                        $pieces = $item['pieces'];


                        $dynamicVariableName = "put_products_" . $count;
                        $$dynamicVariableName = "INSERT INTO `includes` (`includes_product_id`, `includes_order_id`, `num_pc`) VALUES ('$pro_id', '$pay_order_id', '$pieces')";
                        if (mysqli_query($con, $$dynamicVariableName)) {
                            $count = $count + 1;
                        }
                    }
                    if ($count == count($cart)) {
                        echo (1);
                    }
                }
            }
        }
    } else {
        echo ("2");
    }
}
?>
