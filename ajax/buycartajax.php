<?php
include("../../config/connect.php");
if(!empty($_POST["data"])){
    $data = $_POST["data"];
    // Example fixing the error
$decodedData = json_decode($data, true);

    // Check if decoding was successful
    if ($decodedData !== null) {
        // Access individual elements
        $cart = $decodedData['cart'];
        if (empty($cart)) {
            // If the cart is empty, display a message
            ?>

              <!--Graphic from https://www.opendoodles.com/-->
              <div class="grid  place-content-center bg-white">
                <div class="text-center">
                    <img src="https://elements-cover-images-0.imgix.net/81a21290-d463-45ed-b2fc-968f275dd90b?auto=compress%2Cformat&w=1370&fit=max&s=e797f85ee2731c4d967f4efd40a134d6" alt="Explore More Products" class="h-64">
                    <h1 class="mt-6 text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">Explore More Products</h1>
                    <p class="mt-4 text-gray-500">Your cart is empty!!</p>
                </div>
            </div>


            <?php
        } else {
        // Loop through the cart items
        foreach ($cart as $item) {

            $pro_id = $item['pro_id'];
            $addpiece = $item['pieces'];

            $get_product = "SELECT * FROM `product` WHERE pro_id = '$pro_id' ";
            $execute_get_product = mysqli_query($con,$get_product);
            if(mysqli_num_rows($execute_get_product)>0)
            {
                while($row=mysqli_fetch_assoc($execute_get_product))
                {
                    ?>

                <tr>
                  <td class="py-6 px-4">
                    <div class="flex items-center gap-6 w-max">
                      <div class="h-36 shrink-0">
                        <?php
                            $imageQuery = "SELECT image_name 
                            FROM image 
                            WHERE image_product_id = $pro_id 
                            LIMIT 1";
                            $execute_image = mysqli_query($con,$imageQuery);
                            if(mysqli_num_rows($execute_image))
                            {
                                while($row_of_image=mysqli_fetch_assoc($execute_image))
                                {
                                ?>
                                    <img src=" <?php echo($row_of_image["image_name"]); ?>" alt="Product 1" class="h-full w-full object-contain" />
                                <?php
                                
                                }
                            }

                                ?>
                     </div>
                      <div>
                        <p class="text-md font-bold text-[#333]"><?php echo($row["pro_name"]); ?></p>
                        <button type="button" class="mt-4 font-semibold text-red-400 text-sm"  onclick="deletefromcart(<?php echo $row['pro_id']; ?>,'c')">
                          Remove
                        </button>
                      </div>
                    </div>
                  </td>
                  <td class="py-6 px-4">
                    <div class="flex items-center justify-center">
                        
                    <select id="quantity" name="quantity" onchange="addpeice(<?php echo $row['pro_id']; ?>, event)" class="border border-amber-500 rounded-md px-3 py-1 bg-amber-700 text-white">
                        <?php for ($i = 1; $i <= 10; $i++) : ?>
                            <option value="<?php echo $i; ?>" <?php if ($pro_id == $row['pro_id'] && $addpiece == $i) echo 'selected'; ?>><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>

                    </div>
                  </td>
                  <td class="py-6 px-4">
                    <h4 class="text-md font-bold text-[#333]">Rs.<span class="item_price"><?php echo($addpiece*$row["pro_price"]); ?> </span></h4>
                  </td>
                </tr>

                
                      <?php
                    
                }
            }
          
            

            // Use the values as needed
            // echo "product ID: $pro_id, User Email: $user_email, Type: $type<br>";
        }
    }
    } else {
        // Handle JSON decoding error
        echo 'Error decoding JSON data.';
    }



}


?>