<?php 
session_start(); 
if(!isset($_SESSION["email"]) || !isset($_SESSION["firstname"]) || !isset($_SESSION["lastname"]) || !isset($_SESSION["type"])) {
    echo "<script>location.href='login.php'</script>";
    exit;
}

$email = $_SESSION["email"];
$firstname = $_SESSION["firstname"];
$lastname = $_SESSION["lastname"];
$_SESSION["type"] = "c";

include("../../config/connect.php");

if(!isset($_GET["category"]) || empty($_GET["category"])) {
    echo "<script>location.href='home.php'</script>";
    exit;
}

$category = $_GET["category"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        /* Ensure filter section remains visible */
        .flex-col {
            visibility: visible;
        }
    </style>
</head>
<body>

<?php include("./layout/header/header.php"); ?>

<section>
    <!-- Container -->
    <div class="mx-auto w-half px-5 py-16 md:px-10 md:py-24">
        <!-- Component -->
        <div class="flex flex-col gap-12">
            <!-- Title -->
            <div class="flex flex-col gap-5">
                <p class="text-sm text-[#808080] sm:text-base"></p>
            </div>
            <!-- Content -->
            <div class="grid gap-10 md:gap-12 lg:grid-cols-[max-content_1fr]">
                <!-- Filters -->
                <div class="mb-4 max-w-none lg:max-w-xs">
                    <form name="wf-form-Filter-2" method="get" class="flex-col gap-6">
                        <!-- Filters title -->
                        <div class="mb-6 flex items-center justify-between py-4 [border-bottom:1px_solid_rgb(217,_217,_217)]">
                            <h5 class="text-xl font-bold">Filters</h5>
                            <button type="button" class="clear-all-filters bg-amber-700 text-white px-4 py-2 rounded-md mt-6">Clear All</button>
                        </div>
                        <!-- Search input -->
                        <input type="text" id="productNameFilter" class="mb-10 block h-9 min-h-[44px] w-full rounded-md border border-solid border-[#cccccc] bg-[#f2f2f7] bg-[16px_center] bg-no-repeat py-3 pl-11 pr-4 text-sm font-bold text-[#333333] [background-size:18px] [border-bottom:1px_solid_rgb(215,_215,_221)]" placeholder="Search" style="background-image: url('https://assets.website-files.com/6458c625291a94a195e6cf3a/64b7a3a33cd5dc368f46daaa_MagnifyingGlass.svg');" />
                        <!-- Divider -->
                        <div class="mb-6 mt-6 h-px w-full bg-[#d9d9d9]"></div>
                        <!-- Filter One -->
                        <!-- Filter by Color -->
                        <div class="flex flex-col gap-6">
                            <div class="flex cursor-pointer items-center justify-between py-4 [border-top:1px_solid_rgba(0,_0,_0,_0)] md:py-0">
                                <p class="font-semibold">Color</p>
                                <a href="#" class="clear-color-filter inline-block text-sm text-black" onclick="clearColorFilter()">
                                    <p>Clear</p>
                                </a>
                            </div>
                            <div class="flex flex-col gap-3">
                                <!-- Color checkboxes here -->
                                <?php

                                $color="SELECT * FROM `colors`";
                                $executecol = mysqli_query($con,$color);
                                if(mysqli_num_rows($executecol))
                                {
                                  while($row_of_col=mysqli_fetch_assoc($executecol))
                                  {
                                    ?>
                                <label><input type="checkbox" value="<?php echo ($row_of_col["color_name"]); ?>" class="color-filter"> <?php echo ($row_of_col["color_name"]); ?></label>
                                
                                <?php
                                  }
                                }
                                ?>

                            </div>
                        </div>
                        <!-- Divider -->
                        <div class="mb-6 mt-6 h-px w-full bg-[#d9d9d9]"></div>
                        <!-- Filter Two -->
                        <div class="flex flex-col gap-6">
                          <div class="flex cursor-pointer items-center justify-between py-4 [border-top:1px_solid_rgba(0,_0,_0,_0)] md:py-0">
                            <p class="font-semibold">Material</p>
                            <a href="#" class="clear-material-filter inline-block text-sm text-black" onclick="clearMaterialFilter()">
                              <p>Clear</p>
                            </a>
                          </div>
                          <div class="flex flex-col gap-3">
                          <label class="flex items-center font-medium">
                            <input type="checkbox" value="All" class="material-filter">
                            <span class="inline-block cursor-pointer">All</span>
                          </label>
                          <?php

                            $materials="SELECT * FROM `materials`";
                            $executemat = mysqli_query($con,$materials);
                            if(mysqli_num_rows($executemat))
                            {
                              while($row_of_mat=mysqli_fetch_assoc($executemat))
                              {
                                ?>
                              <label class="flex items-center font-medium">
                                <input type="checkbox" value="<?php echo ($row_of_mat["material_name"]); ?>" class="material-filter">
                                 <span class="inline-block cursor-pointer">  <?php echo ($row_of_mat["material_name"]); ?></span>
                              </label>
                          <?php
                              }
                            }
                            ?>
                          </div>
                        </div>
                        <!-- Divider -->
                        <div class="mb-6 mt-6 h-px w-full bg-amber"></div>
                            <!-- Filter Two -->
                            <div class="flex flex-col gap-6">
                                <!-- Price range input here -->
                                <div class="flex cursor-pointer items-center justify-between py-4 [border-top:1px_solid_rgba(0,_0,_0,_0)] md:py-0">
                                    <p class="font-semibold">Price</p>
                                    <a href="#" class="inline-block text-sm text-black" onclick="clearPriceFilter()">
                                        <p>Clear</p>
                                    </a>
                                </div>
                                <div class="relative mb-6">
                                    <label for="priceRangeInput" class="sr-only">Price range</label>
                                    <input id="priceRangeInput" type="range" value="1500" min="100" max="1500" class="w-full h-2 bg-gray-500 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                    <span class="text-sm text-gray-700 dark:text-gray-700 absolute start-0 -bottom-6">Rs.100</span>
                                    <span class="text-sm text-gray-700 dark:text-gray-700 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">Rs.500</span>
                                    <span class="text-sm text-gray-700 dark:text-gray-700 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6 mr-2">Rs.1000</span>
                                    <span class="text-sm text-gray-700 dark:text-gray-700 absolute end-0 -bottom-6">Rs.1500</span>
                                </div>
                            </div>

                    </form>
                </div>
                <!-- Decor -->
                <div class="font-[sans-serif] bg-gray-100">
                    <div class="p-4 mx-auto lg:max-w-7xl sm:max-w-full">
                        <h2 class="text-4xl font-extrabold text-gray-800 mb-12">Ethnic <?php echo $category ?></h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <?php 
                            $productQuery = "SELECT * FROM `product`,`category` WHERE `category`.`category_name` = '$category' AND `product`.`pro_category_id` = `category`.`category_id`";
                            $executequery = mysqli_query($con, $productQuery);
                            if (mysqli_num_rows($executequery) > 0) {
                                while ($row_of_product = mysqli_fetch_assoc($executequery)) {
                                    $product_id = $row_of_product["pro_id"];
                                    $pro_name = $row_of_product["pro_name"];
                                    $pro_descrip = $row_of_product["pro_descrip"];
                                    $pro_price = $row_of_product["pro_price"];
                                    $imageQuery = "SELECT image_name FROM image WHERE image_product_id = $product_id LIMIT 1";
                                    $execute_image = mysqli_query($con, $imageQuery);
                                    if (mysqli_num_rows($execute_image) > 0) {
                                        $row_of_image = mysqli_fetch_assoc($execute_image);
                                        $imageBlob = $row_of_image["image_name"];
                                    } else {
                                        $imageBlob = "";
                                    }
                                    ?>
                                    <div class="product bg-white rounded-2xl p-6 cursor-pointer hover:-translate-y-2 transition-all relative" 
                                    data-colors="<?php
                                    // Fetch colors for product

                                        $getcolors="SELECT * FROM `colors` ,`pcolors` WHERE `colors`.`color_id`=`pcolors`.`pcolor_color_id` AND `pcolors`.`pcolor_product_id`='$product_id'";
                                        $execute_color = mysqli_query($con,$getcolors);
                                        if(mysqli_num_rows($execute_color))
                                        {
                                          while($row_of_color=mysqli_fetch_assoc($execute_color))
                                          {
                                        
                                              echo($row_of_color["color_name"].",");
                                              
                                          }
                                        }
                                    ?>" 
                                    data-materials="<?php 
                                    // Fetch materials for product
                                      $getmaterial="SELECT * FROM `materials` ,`pmaterials` WHERE `materials`.`material_id`=`pmaterials`.`pmaterial_material_id` AND `pmaterials`.`pmaterial_product_id`='$product_id'";
                                      $execute_material = mysqli_query($con,$getmaterial);
                                      if(mysqli_num_rows($execute_material))
                                      {
                                        while($row_of_material=mysqli_fetch_assoc($execute_material))
                                        {
                                      
                                            echo($row_of_material["material_name"].",");
                                            
                                        }
                                      }
                                    ?>">
                                    <div class="bg-gray-100 w-10 h-10 flex items-center justify-center rounded-full cursor-pointer absolute top-4 right-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" class="fill-gray-800 inline-block" viewBox="0 0 64 64">
                                            <path d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z" data-original="#000000"></path>
                                        </svg>
                                    </div>
                                    <div class="w-11/12 h-[220px] overflow-hidden mx-auto aspect-w-16 aspect-h-8 md:mb-2 mb-4">
                                        <?php if (!empty($imageBlob)) { ?>
                                            <img src="<?php echo $imageBlob; ?>" alt="Product 1" class="h-full w-full object-contain" />
                                        <?php } ?>
                                    </div>
                                    <a href="singleproducts.php?category=<?php echo $category; ?>&id=<?php echo $product_id; ?>">
                                        <div>
                                            <h3 class="text-lg font-bold text-gray-800"><?php echo $pro_name; ?></h3>
                                            <h4 id="price" class="text-lg text-gray-700 font-bold mt-4">Rs.<?php echo $pro_price; ?></h4>
                                        </div>
                                    </a>
                                </div>
                            <?php
                        }
                    } else {
                        echo "No products found for category: $category";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../../js/filter.js"></script>

<?php include("./layout/footer/footer.php"); ?>
</body>
</html>
