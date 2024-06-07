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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />

</head>
<body>

<?php
    include("./layout/header/header.php");
    include("../../config/connect.php");
    ?>

<?php 

  if(!isset($_GET["category"])&&!isset($_GET["id"]))
  {
    echo ("<script>location.href='home.php'</script>");
  }
  if(!empty($_GET["category"])&&!empty($_GET["id"]))
  {
    $category=$_GET["category"];
    $id=$_GET["id"];

  }
  	else{
      echo ("<script>location.href='home.php'</script>");
    }

    $productQuery = "SELECT * FROM `product`,`category` WHERE `category`.`category_name` = '$category' AND `product`.`pro_category_id` = `category`.`category_id` AND `product`.`pro_id`='$id' ";
    $executequery = mysqli_query($con,$productQuery);
    if(mysqli_num_rows($executequery))
    {
      while($row_of_product=mysqli_fetch_assoc($executequery))
      {
        
        ?>
        
<div class="font-[sans-serif] mt-16">
      <div class="p-6 lg:max-w-6xl max-w-2xl mx-auto">
        <div class="grid items-start grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="w-full lg:sticky top-0 sm:flex gap-2">
            <div class="sm:space-y-3 w-16 max-sm:flex max-sm:mb-4 max-sm:gap-4" id="image-thumbnails">
                <?php
                $ImageQuery = "SELECT * FROM `image` WHERE `image`.`image_product_id`='$id'";
                $executeImgquery = mysqli_query($con, $ImageQuery);
                if (mysqli_num_rows($executeImgquery)) {
                    while ($row_of_product_img = mysqli_fetch_assoc($executeImgquery)) 
                    {
                            $imageBlob = $row_of_product_img["image_name"];
                ?>
                        <img src="<?php echo($imageBlob); ?>" alt="Product4" class="w-full cursor-pointer product-img" />
                <?php
                    }
                }
                ?>
            </div>

            <img src="" alt="Product" class="w-4/5 rounded object-cover" id="main-image" />
        </div>
        <div>
            <h2 class="text-2xl font-extrabold text-gray-800"><?php echo $row_of_product["pro_name"] ?></h2>
            <div class="flex flex-wrap gap-4 mt-4">
              <p class="text-gray-800 text-xl font-bold">Rs.<?php echo $row_of_product["pro_price"] ?></p>
            </div>
            <div class="flex space-x-2 mt-4">
              <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-gray-800" viewBox="0 0 14 13" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
              <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
              </svg>
            </div>
            <div class="mt-8">
              <h3 class="text-lg font-bold text-gray-800">About the item</h3>
              <?php echo $row_of_product["pro_descrip"] ?>
            </div>

            <div class="flex">
            <!-- <a href="custom.php" class="inline-block">
                <button type="button"
                        class="px-6 py-2.5 text-white text-sm tracking-wider font-semibold border-none outline-none bg-gray-600 hover:bg-gray-700 active:bg-gray-600 m-4">
                        <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" fill="#fff" class="mr-2 inline animate-spin"
                        viewBox="0 0 26.349 26.35">
                        <circle cx="13.792" cy="3.082" r="3.082" data-original="#000000" />
                        <circle cx="13.792" cy="24.501" r="1.849" data-original="#000000" />
                        <circle cx="6.219" cy="6.218" r="2.774" data-original="#000000" />
                        <circle cx="21.365" cy="21.363" r="1.541" data-original="#000000" />
                        <circle cx="3.082" cy="13.792" r="2.465" data-original="#000000" />
                        <circle cx="24.501" cy="13.791" r="1.232" data-original="#000000" />
                        <path
                            d="M4.694 19.84a2.155 2.155 0 0 0 0 3.05 2.155 2.155 0 0 0 3.05 0 2.155 2.155 0 0 0 0-3.05 2.146 2.146 0 0 0-3.05 0z"
                            data-original="#000000" />
                        <circle cx="21.364" cy="6.218" r=".924" data-original="#000000" />
                        </svg>
                        Personalization
                        </div>
                </button>
            </a> -->

                <button type="button" onclick="addtocart(<?php echo $row_of_product['pro_id']; ?>)"
                        class="px-6 py-2.5 text-white text-sm tracking-wider font-semibold border-none outline-none bg-gray-600 hover:bg-gray-700 active:bg-gray-600 m-4">
                        <div class="flex h-5">
                          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"  class="h-7 w-9 mr-2">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier"> 
                              <path d="M7.2998 5H22L20 12H8.37675M21 16H9L7 3H4M4 8H2M5 11H2M6 14H2M10 20C10 20.5523 9.55228 21 9 21C8.44772 21 8 20.5523 8 20C8 19.4477 8.44772 19 9 19C9.55228 19 10 19.4477 10 20ZM21 20C21 20.5523 20.5523 21 20 21C19.4477 21 19 20.5523 19 20C19 19.4477 19.4477 19 20 19C20.5523 19 21 19.4477 21 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> 
                            </g>
                          </svg>
                          Add to Cart
                        </div> 
                </button>
           </div>


            <div class="max-w-md">
              <h3 class="text-lg font-bold text-gray-800">Reviews</h3>
              <?php
                $review="SELECT * FROM `review`,`customer` WHERE `review`.`review_cus_email`=`customer`.`cus_email` AND `review`.`review_product_id`=$id";
                $executereviewquery = mysqli_query($con, $review);
                if (mysqli_num_rows($executereviewquery)) 
                {
                    while ($row_of_review = mysqli_fetch_assoc($executereviewquery)) 
                    {
                  ?>
              <div class="flex items-start mt-8">
                <img src="https://cdn.pixabay.com/photo/2017/11/10/05/46/group-2935521_1280.png" class="w-12 h-12 rounded-full border-2 border-white" />
                <div class="ml-3">
                  <h4 class="text-sm font-bold"><?php echo($row_of_review["cus_fname"])?> <?php echo($row_of_review["cus_lname"])?></h4>
                  
                  <p class="text-xs mt-4"> <?php echo($row_of_review["review_text"])?></p>
                </div>
              </div>
              <?php
                    }
                  }
                ?>

              <hr class="w-48 h-1 mx-auto  bg-gray-100 border-0 rounded md:my-6 dark:bg-gray-700">
              <!-- component -->
                <!-- comment form -->
                <input type="text" name="text" class="hidden" placeholder="Enter..." id="user_email" value="<?php echo $email ;?>">
                <input type="text" name="text" class="hidden" placeholder="Enter..." id="pro_id" value="<?php echo $id ;?>">


                <div class="max-w-md">
                  <form id="reviewForm" class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                      <div class="flex flex-wrap -mx-3 mb-6">
                          <h2 class="text-lg font-bold text-gray-800">Add a new Review</h2>
                          <div class="w-full md:w-full px-3 mb-2 mt-2">
                              <textarea id="comment" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:text-gray-500  focus:bg-white" name="body" placeholder='Type Your Comment' ></textarea>
                              <p id="commentError" class="text-red-500 hidden">Please enter your review.</p>
                          </div>
                          <div class="w-full md:w-full flex items-start md:w-full px-3">
                              <div class="-mr-1">
                                  <input type='submit' class="submitBtn px-6 py-2.5 text-white text-sm tracking-wider font-semibold border-none outline-none bg-gray-600 hover:bg-gray-700 active:bg-gray-600 " value='Post Comment'>
                              </div>
                          </div>
                      </div>
                  </form>
                </div> 


                
                    <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                      <h2 id="accordion-flush-heading-1">
                        <button type="button" class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="false" aria-controls="accordion-flush-body-1">
                          <span>A Note on Shipping and Returns</span>
                          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                          </svg>
                        </button>
                      </h2>
                      <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                          <p class="mb-2 text-gray-500 dark:text-gray-400">Please consider your purchase carefully, as there is no return or exchange policy or canceling order after you have ordered a product. We recommend reviewing the product details and ensuring it meets your requirements before placing your order. Your understanding and cooperation are greatly appreciated.</p>
                          <!-- <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p> -->
                        </div>
                      </div>
                      
                    </div>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <?php
      }
    }
?>


<script>
    $(document).ready(function() {
        $('.product-img').click(function() {
            // Remove 'selected' class from all thumbnails
            $('.product-img').removeClass('selected');
            
            // Add 'selected' class to the clicked thumbnail
            $(this).addClass('selected');
            
            // Set the main image source to the clicked thumbnail source
            $('#main-image').attr('src', $(this).attr('src'));
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var thumbnails = document.querySelectorAll(".product-img");
        var mainImage = document.getElementById("main-image");

        // Set initial image as the first image
        thumbnails[0].classList.add("selected");
        mainImage.src = thumbnails[0].src;

        // Add click event listener to thumbnails
        thumbnails.forEach(function(thumbnail) {
            thumbnail.addEventListener("click", function() {
                // Remove 'selected' class from all thumbnails
                thumbnails.forEach(function(item) {
                    item.classList.remove("selected");
                });

                // Add 'selected' class to the clicked thumbnail
                thumbnail.classList.add("selected");

                // Set the main image source to the clicked thumbnail source
                mainImage.src = thumbnail.src;
            });
        });
    });
</script>

<script src="../../js/singlereview.js">
</script>

    <?php
    include("./layout/footer/footer.php");
    ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>