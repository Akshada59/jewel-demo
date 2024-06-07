<?php 
session_start(); 
if(isset($_SESSION["email"]) && isset($_SESSION["type"])  )
{
  if($_SESSION["type"]=="a")
  {
    $email = $_SESSION["email"];
  }
  else
  {
    echo ("<script>location.href='adminlogin.php'</script>");
  }

}
else{
    echo ("<script>location.href='adminlogin.php'</script>");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />

    <title>Jewelry Shop</title>

    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.7.1/cdn.js" defer ></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>






</head>

<body class="">

<?php                
    include("../../config/connect.php");
?>

<!-- Edit products  -->

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4 relative">
        <a href="home.php" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="../../assests/logo/ethnic.jpeg" class="h-8" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Ethnic Jewellery</span>
        </a>
        <div class="absolute top-0 right-0 flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <a href="adminpart.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-700 md:p-0 md:dark:hover:text-yellow-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                <svg class="w-[40px] h-[40px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="m4 12 8-8 8 8M6 10.5V19c0 .6.4 1 1 1h3v-3c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v3h3c.6 0 1-.4 1-1v-8.5"/>
                </svg>
              </a>

                
            </ul>
        </div>

    </div>
</nav>

<?php            
if(!isset($_GET["id"]))
{
  echo ("<script>location.href='adminpart.php'</script>");
}
if(!empty($_GET["id"]))
{
  $id=$_GET["id"];
    echo $id;
}
    else{
    echo ("<script>location.href='adminpart.php'</script>");
  }

                $product = "SELECT * FROM `product` WHERE `product`.`pro_id`='$id'";
                $executequery = mysqli_query($con,$product);
                if(mysqli_num_rows($executequery))
                {
                    while($row_of_product=mysqli_fetch_assoc($executequery))
                    {
                      
                        ?>

                            <div class="w-full max-w-xl mx-auto bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 my-20">
                                <!-- Modal body -->
                                <form id="productForm" class="p-4 md:p-5" enctype="multipart/form-data">
                                <input type="text" id="product_id" class="hidden" value="<?php echo($row_of_product["pro_id"]); ?>">

                                 <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2">
                                       <label for="product-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                                       <input type="text" value="<?php echo($row_of_product["pro_name"]); ?>" name="product-name" id="product-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Type product name">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                       <label for="product-price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
                                       <input type="number" value="<?php echo($row_of_product["pro_price"]); ?>" name="product-price" id="product-price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Rs.2999">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="product-category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Category</label>
                                        <select id="product-category" name="product-category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500">
                                            <option value="">Select option</option>
                                            <?php
                                            $category = "SELECT * FROM `category`";
                                            $executequerycat = mysqli_query($con, $category);
                                            if (mysqli_num_rows($executequerycat)) {
                                                while ($row_of_cat = mysqli_fetch_assoc($executequerycat)) {
                                                    $selected = ($row_of_product["pro_category_id"] == $row_of_cat["category_id"]) ? 'selected' : '';
                                            ?>
                                                    <option value="<?php echo $row_of_cat["category_id"]; ?>" <?php echo $selected; ?>><?php echo $row_of_cat["category_name"]; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>


                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="product-material" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Material</label>

                                        <?php
                                                   $pmaterials = "SELECT * FROM pmaterials WHERE pmaterial_product_id = '$id'";
                                                   $executequerypmaterials = mysqli_query($con, $pmaterials);
                                                    
                                                           
                                                    ?>
                                          <select id="select2" name="select2[]" class="hidden" multiple>

                                          <?php
                                                         
                                                    
                                                        ?>
                                                
                                                    <?php
                                                     $materials = "SELECT * FROM `materials`";
                                                     $executequerymaterials = mysqli_query($con,$materials);
                                                     if(mysqli_num_rows($executequerymaterials))
                                                     {
                                                         while($row_of_material=mysqli_fetch_assoc($executequerymaterials))
                                                         {
                                                            
                                                           
                                                    ?>

                                                            <option value="<?php echo $row_of_material["material_id"]; ?>" <?php 
                                                                $selected = "";
                                                                if(mysqli_num_rows($executequerypmaterials) > 0) {
                                                                    mysqli_data_seek($executequerypmaterials, 0);
                                                                    while($row_of_pmaterial = mysqli_fetch_assoc($executequerypmaterials)) {
                                                                        if ($row_of_pmaterial["pmaterial_material_id"] == $row_of_material["material_id"]) {
                                                                            $selected = "selected";
                                                                            break; // exit the loop once a match is found
                                                                        }
                                                                    }
                                                                }
                                                                echo $selected;
                                                            ?>><?php echo $row_of_material["material_name"]; ?></option>


                                                    <?php
                                                                
                                                         }
                                                        }
                                                    ?>

                                        </select>

                                        <div class="relative flex" x-data="{ ...selectMultiple('select2') }">

                                            <!-- Selected -->
                                            <div class="flex flex-wrap border border-amber-400 rounded-lg"
                                                @click="isOpen = true;"
                                                @keydown.arrow-down.prevent="if(dropdown.length > 0) document.getElementById(elSelect.id+'_'+dropdown[0].index).focus();">

                                                <template x-for="(option,index) in selected;" :key="option.value">
                                                    <p class="m-1 self-center p-2 text-xs whitespace-nowrap rounded-lg bg-amber-200 cursor-pointer hover:bg-red-300"
                                                        x-text="option.text"
                                                        @click="toggle(option)">
                                                    </p>
                                                </template>

                                                <input type="text" placeholder="Material" class="pl-2 rounded-lg h-10"
                                                    x-model="term"
                                                    x-ref="input" />
                                            </div>

                                            <!-- Dropdown -->
                                            <div class="absolute mt-12 z-10 w-full max-h-72 overflow-y-auto rounded-lg bg-amber-100 "
                                                x-show="isOpen"
                                                @mousedown.away="isOpen = false">

                                                <template x-for="(option,index) in dropdown" :key="option.value">
                                                    <div class="cursor-pointer hover:bg-amber-200 focus:bg-amber-300 focus:outline-none"
                                                        :class="(term.length > 0 && !option.text.toLowerCase().includes(term.toLowerCase())) && 'hidden';"
                                                        x-init="$el.id = elSelect.id + '_' + option.index; $el.tabIndex = option.index;"
                                                        @click="toggle(option)"
                                                        @keydown.enter.prevent="toggle(option);"
                                                        @keydown.arrow-up.prevent="if ($el.previousElementSibling != null) $el.previousElementSibling.focus();"
                                                        @keydown.arrow-down.prevent="if ($el.nextElementSibling != null) $el.nextElementSibling.focus();">

                                                        <p class="p-2"
                                                        x-text="option.text"></p>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>

                                        <script>
                                            document.addEventListener('alpine:init', () => {
                                                Alpine.data('selectMultiple', (elSelectId) => ({

                                                    elSelect: document.getElementById(elSelectId),
                                                    isOpen: false,
                                                    term: '',

                                                    selected: [],
                                                    dropdown: [],

                                                    // in the <select> element, set the attributes :
                                                    //  "multiple" to avoid to Always set "selected" to the first item
                                                    //  class="hidden" (better than hide it with javascript which has a slow reaction)
                                                    init()
                                                    {
                                                        for(var index=0; index < this.elSelect.options.length; index++)
                                                        {
                                                            if (this.elSelect.options[index].selected)
                                                                this.selected.push(this.elSelect.options[index]);
                                                            else
                                                                this.dropdown.push(this.elSelect.options[index]);
                                                        }
                                                    },

                                                    toggle(option)
                                                    {
                                                        var property1 = (option.selected == true) ? 'dropdown' : 'selected';
                                                        var property2 = (option.selected == true) ? 'selected' : 'dropdown';

                                                        option.selected = !option.selected;

                                                        // add
                                                        this[property1].push(option);

                                                        // remove
                                                        this[property2] = this[property2].filter((opt, index)=>{
                                                            return opt.value != option.value;
                                                        });
                                                        
                                                        // reorder this.dropdown to their original select.options indexes
                                                        if (property1 == 'dropdown')
                                                            this.dropdown.sort((opt1, opt2) => (opt1.index > opt2.index) ? 1 : -1)

                                                        // after adding, re-focus the input
                                                        if (option.selected)
                                                            this.$refs.input.focus();
                                                    },
                                                }))
                                            });
                                        </script>

                                    </div>
                                    

                                    <!-- demo -->
                                   


                                    <!-- demo end -->




                                    
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="product-color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Color</label>

                                        <?php
                                                   $pcolors = "SELECT * FROM pcolors WHERE pcolor_product_id = '$id' ";
                                                   $executequerypcolors = mysqli_query($con, $pcolors);
                                                    
                                                           
                                                    ?>

                                        <select id="select3" name="select3[]" class="hidden" multiple>

                                        <?php

                                        ?>

                                                <?php
                                                     $colors = "SELECT * FROM `colors`";
                                                     $executequerycolors = mysqli_query($con,$colors);
                                                     if(mysqli_num_rows($executequerycolors))
                                                     {
                                                         while($row_of_colors=mysqli_fetch_assoc($executequerycolors))
                                                         {
                                                            
                                                           
                                                    ?>

                                                            <option value="<?php echo $row_of_colors["color_id"]; ?>" <?php 
                                                                $selected = "";
                                                                if(mysqli_num_rows($executequerypcolors) > 0) {
                                                                    mysqli_data_seek($executequerypcolors, 0);
                                                                    while($row_of_pcolors = mysqli_fetch_assoc($executequerypcolors)) {
                                                                        if ($row_of_pcolors["pcolor_color_id"] == $row_of_colors["color_id"]) {
                                                                            $selected = "selected";
                                                                            break; // exit the loop once a match is found
                                                                        }
                                                                    }
                                                                }
                                                                echo $selected;
                                                            ?>>
                                                                <?php echo $row_of_colors["color_name"]; ?>
                                                            </option>


                                                    <?php
                                                                
                                                         }
                                                        }
                                                    ?>

                                        </select>

                                        <div class="relative flex" x-data="{ ...selectMultiple('select3') }">

                                            <!-- Selected -->
                                            <div class="flex flex-wrap border border-amber-400 rounded-lg"
                                                @click="isOpen = true;"
                                                @keydown.arrow-down.prevent="if(dropdown.length > 0) document.getElementById(elSelect.id+'_'+dropdown[0].index).focus();">

                                                <template x-for="(option,index) in selected;" :key="option.value">
                                                    <p class="m-1 self-center p-2 text-xs whitespace-nowrap rounded-lg bg-amber-200 cursor-pointer hover:bg-red-300"
                                                        x-text="option.text"
                                                        @click="toggle(option)">
                                                    </p>
                                                </template>

                                                <input type="text" placeholder="color" class="pl-2 rounded-lg h-10"
                                                    x-model="term"
                                                    x-ref="input" />
                                            </div>

                                            <!-- Dropdown -->
                                            <div class="absolute mt-12 z-10 w-full max-h-72 overflow-y-auto rounded-lg bg-amber-100 "
                                                x-show="isOpen"
                                                @mousedown.away="isOpen = false">

                                                <template x-for="(option,index) in dropdown" :key="option.value">
                                                    <div class="cursor-pointer hover:bg-amber-200 focus:bg-amber-300 focus:outline-none"
                                                        :class="(term.length > 0 && !option.text.toLowerCase().includes(term.toLowerCase())) && 'hidden';"
                                                        x-init="$el.id = elSelect.id + '_' + option.index; $el.tabIndex = option.index;"
                                                        @click="toggle(option)"
                                                        @keydown.enter.prevent="toggle(option);"
                                                        @keydown.arrow-up.prevent="if ($el.previousElementSibling != null) $el.previousElementSibling.focus();"
                                                        @keydown.arrow-down.prevent="if ($el.nextElementSibling != null) $el.nextElementSibling.focus();">

                                                        <p class="p-2"
                                                        x-text="option.text"></p>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>

                                        <script>
                                            document.addEventListener('alpine:init', () => {
                                                Alpine.data('selectMultiple', (elSelectId) => ({

                                                    elSelect: document.getElementById(elSelectId),
                                                    isOpen: false,
                                                    term: '',

                                                    selected: [],
                                                    dropdown: [],

                                                    // in the <select> element, set the attributes :
                                                    //  "multiple" to avoid to Always set "selected" to the first item
                                                    //  class="hidden" (better than hide it with javascript which has a slow reaction)
                                                    init()
                                                    {
                                                        for(var index=0; index < this.elSelect.options.length; index++)
                                                        {
                                                            if (this.elSelect.options[index].selected)
                                                                this.selected.push(this.elSelect.options[index]);
                                                            else
                                                                this.dropdown.push(this.elSelect.options[index]);
                                                        }
                                                    },

                                                    toggle(option)
                                                    {
                                                        var property1 = (option.selected == true) ? 'dropdown' : 'selected';
                                                        var property2 = (option.selected == true) ? 'selected' : 'dropdown';

                                                        option.selected = !option.selected;

                                                        // add
                                                        this[property1].push(option);

                                                        // remove
                                                        this[property2] = this[property2].filter((opt, index)=>{
                                                            return opt.value != option.value;
                                                        });
                                                        
                                                        // reorder this.dropdown to their original select.options indexes
                                                        if (property1 == 'dropdown')
                                                            this.dropdown.sort((opt1, opt2) => (opt1.index > opt2.index) ? 1 : -1)

                                                        // after adding, re-focus the input
                                                        if (option.selected)
                                                            this.$refs.input.focus();
                                                    },
                                                }))
                                            });
                                        </script>

                                    </div>


                        
                                    <div class="col-span-2">
                                       <label for="product-description" class="block text-sm font-medium text-gray-900 dark:text-white">Product Description </label>
                                       <textarea id="product-description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Write product description here"> <?php echo($row_of_product["pro_descrip"]); ?></textarea>                    
                                    </div>


                                    <div class="col-span-2">
                                        <div>
                                            <label for="images" class="block text-sm font-medium text-gray-700">Select Image Files (Max 5)</label>
                                            <input id="images" name="images[]" type="file" accept="image/*" multiple class="mt-1 bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
                                            <div id="selectedImages" class="mt-2 flex flex-col space-y-2">
                                                <?php
                                                $maxImages = 5;
                                                $ImageQuery = "SELECT * FROM `image` WHERE `image`.`image_product_id`='$id'";
                                                $executeImgquery = mysqli_query($con, $ImageQuery);
                                                $imageCount = 0;
                                                if (mysqli_num_rows($executeImgquery)) {
                                                    while ($row_of_product_img = mysqli_fetch_assoc($executeImgquery)) {
                                                        if ($imageCount < $maxImages) {
                                                            $imageBlob = $row_of_product_img["image_name"];
                                                            ?>
                                                            <img class="size-6 m-1" src="<?php echo($imageBlob); ?>" alt="image description">
                                                            <?php
                                                            $imageCount++;
                                                        }
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="flex"></div>

                                        <script>
                                            document.getElementById('images').addEventListener('change', function (event) {
                                                const fileList = event.target.files;
                                                const selectedImagesContainer = document.getElementById('selectedImages');

                                                const maxFiles = 5;
                                                if (fileList.length + selectedImagesContainer.childElementCount > maxFiles) {
                                                    event.target.value = ''; // Clear the selected files
                                                    return;
                                                }

                                                for (let i = 0; i < fileList.length; i++) {
                                                    if (selectedImagesContainer.childElementCount + i < maxFiles) {
                                                        const file = fileList[i];
                                                        const reader = new FileReader();
                                                        reader.onload = function (e) {
                                                            const img = document.createElement('img');
                                                            img.src = e.target.result;
                                                            img.classList.add('size-6', 'm-1');
                                                            selectedImagesContainer.appendChild(img);
                                                        };
                                                        reader.readAsDataURL(file);
                                                    }
                                                }
                                            });

                                        </script>
                                    </div>


                                    
                                    <div class="col-span-2 flex justify-center">
                                       <button type="submit" class="w-full md:w-auto text-white flex items-center bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm md:text-base px-5  md:py-1 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                                          <svg class="w-[30px] h-[28px] text-gray-800 dark:text-white m-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"/>
                                          </svg>
                                          Edit product
                                       </button>
                                    </div>
                                 </div>

                              </form>
</div>
<?php
                    }
                }
                ?>

                                   
                               


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="../../js/adminaddcus.js"></script>

</body>

</html>
