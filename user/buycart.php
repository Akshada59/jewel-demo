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
    <title>Jewelry Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    

</head>
<body onload="getcartdetails()">

<?php
    include("./layout/header/header.php");
    include("../../config/connect.php");
  ?>

<div class="font-[sans-serif] mt-14">
      <div class="grid lg:grid-cols-3">
        <div class="lg:col-span-2 p-10 bg-white overflow-x-auto">
          <div class="flex border-b pb-4">
            <h2 class="text-2xl font-extrabold text-[#333] flex-1">Shopping Cart</h2>
            <!-- <h3 class="text-xl font-extrabold text-[#333]">3 Items</h3> -->
          </div>
          <div>
            <table class="mt-6 w-full border-collapse divide-y">
              <thead class="whitespace-nowrap text-left">
                <tr>
                  <th class="text-base text-[#333] p-4">Description</th>
                  <th class="text-base text-[#333] p-4">Quantity</th>
                  <th class="text-base text-[#333] p-4">Price</th>
                </tr>
              </thead>
              <tbody class="whitespace-nowrap divide-y" id="cart_container">
                <tr>
                  <td class="py-6 px-4">
                    <div class="flex items-center gap-6 w-max">
                      <div class="h-36 shrink-0">
                        <img src='https://readymadeui.com/images/product6.webp' class="w-full h-full object-contain" />
                      </div>
                      <div>
                        <p class="text-md font-bold text-[#333]">Black T-Shirt</p>
                        <button type="button" class="mt-4 font-semibold text-red-400 text-sm">
                          Remove
                        </button>
                      </div>
                    </div>
                  </td>
                  <td class="py-6 px-4">
                         <!-- component -->
                      <div class="flex items-center justify-center">
                        <select id="quantity" name="quantity" class="border border-amber-500 rounded-md px-3 py-1 bg-amber-700 text-white">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                  </td>
                  <td class="py-6 px-4">
                    <h4 class="text-md font-bold text-[#333]">$18.5</h4>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div>
        <div class="bg-gray-50 p-10">
          <h3 class="text-xl font-extrabold text-[#333] border-b pb-4">Select Address</h3>
          <p id="floating_helper_text" class="mt-2 mb-2 text-xs text-gray-500 dark:text-gray-400">If you have not filled your address, please click below to fill it: 
            <a href="userprofile.php" class="text-blue-600 dark:text-blue-500 hover:underline">Fill Address</a>.</p>
          <select id="add_id" class="px-4 py-3.5 bg-white text-[#333] w-full text-sm border-b-2 focus:border-[#333] outline-none"  placeholder="">
            <option value="" disabled selected>Select Address</option>
          <?php
              $addressQuery = "SELECT * FROM `address` WHERE `add_cus_email` = '$email' ";
              $executequery = mysqli_query($con,$addressQuery);
              if(mysqli_num_rows($executequery)>0)
              {
                while($row_of_address=mysqli_fetch_assoc($executequery))
                {
                  ?>
                  <option value="<?php echo $row_of_address["add_id"];?>"><?php echo $row_of_address["add_type"] ?> <?php echo $row_of_address["add_room"] ?> <?php echo $row_of_address["add_blg"] ?> <?php echo $row_of_address["add_landmark"] ?> <?php echo $row_of_address["add_street"] ?> <?php echo $row_of_address["add_city"] ?> <?php echo $row_of_address["add_pincode"] ?> </option>
                  <?php
                }
              }
            ?>
                    
                </select>
        </div>
        <div class="bg-gray-50 p-10">
          <h3 class="text-xl font-extrabold text-[#333] border-b pb-4">Order Summary</h3>
          <ul class="text-[#333] divide-y mt-6">
            <li class="flex flex-wrap gap-4 text-md py-4 font-bold">Total <span class="ml-auto">Rs.<span id="cart_price"></span></span></li>
          </ul>
          <button type="button" id="rzp-button1" class="mt-6 text-md px-6 py-2.5 w-full bg-amber-800 hover:bg-amber-700 text-white rounded">
            Checkout</button>

        </div>
      </div>
      </div>
    </div>
    <input type="text" id="user_email" class="hidden" value="<?php echo($email); ?>">

    <?php
    include("./layout/footer/footer.php");
    ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

 

</body>
</html>