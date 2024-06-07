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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jewelry Shop</title>
    
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script src="https://cdn.tailwindcss.com"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.7.1/cdn.js" defer ></script>

    
</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

<?php                
    include("../../config/connect.php");
?>


<header>
    <!--Nav-->
    <nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-2 h-auto fixed w-full z-20 top-0">

      <div class="flex flex-wrap items-end justify-between">
          <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
              <a href="adminpart.php" class="flex items-center space-x-3 rtl:space-x-reverse" aria-label="Home">
                  <img src="../../assests/logo/ethnic.jpeg" class="h-8" alt="Flowbite Logo">
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Ethnic Jewellery</span>
              </a>
          </div>

          <!-- <div class="flex w-full pt-2 content-end md:justify-center md:w-1/3 md:justify-end">
              <ul class="list-reset flex justify-end flex-1 md:flex-none items-end">
                  <li class="flex-1 md:flex-none md:mr-3">
                      <a class="inline-block py-2 px-4 text-white no-underline" href="adminpart.php">Home</a>
                  </li>
              </ul>
          </div> -->
      </div>

    </nav>


</header>


<main>

    <div class="flex flex-col md:flex-row">
        <nav aria-label="alternative nav">
            <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">

                <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                        <li class="mr-3 flex-1">
                            <a href="adminpart.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Information</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="admindisplaycus.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                              <i class="fas fa-user pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Customer</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="adminaddcus.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                              <i class="fas fa-box pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-white md:text-white block md:inline-block">Product</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="admindisplayorder.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                              <i class="fas fa-shopping-cart pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Orders</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="admindisplaypayment.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                              <i class="fas fa-credit-card pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Payment</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="#" data-modal-target="ad-crud-modal" data-modal-toggle="ad-crud-modal" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                              <i class="fas fa-user-circle pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Profile</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="../../config/logout.php" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                              <i class="fas fa-sign-out-alt pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>
        <section>
            <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

                <!-- <div class="bg-gray-800 pt-3">
                    <div class="rounded-tl-3xl bg-gradient-to-r from-red-900 to-gray-800 p-4 shadow text-2xl text-white">
                        <h1 class="font-bold pl-2">Analytics</h1>
                    </div>
                </div> -->

                

                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mx-auto md:mx-20 mt-4">
                  <div class="max-w-sm p-6 bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 border border-gray-800 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-4 drop-shadow-2xl">
                      <a href="#">
                          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Add Products</h5>
                      </a>
                      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Increase your product range by adding new items to your store. Quickly enhance your store's offerings by easily incorporating new products into your inventory.</p>
                      <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800" onclick="window.location.href='#'">
                          ADD
                          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                      </button>
                  </div>

                  <div class="max-w-sm p-6 bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 border border-gray-800 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-4 drop-shadow-2xl">
                      <a href="adminaddcus.php">
                          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Update Products</h5>
                      </a>
                      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Easily modify product information, including name, description, and price, with just a few clicks. You can effortlessly update product information through this platform.</p>
                      <a href="adminaddcus.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                          UPDATE
                          <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                      </a>
                  </div>
              </div>


                <div class="flex flex-wrap">


                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-purple-200 to-purple-100 border-b-4 border-purple-600 rounded-lg shadow-xl p-5" onclick="document.getElementById('add-materials-modal').classList.remove('hidden');">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-purple-600"><i class="fas fa-plus pr-0 md:pr-3 fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Add Materials</h2>                              
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                        <!-- Modal toggle for Materials -->
                            <button data-modal-target="materials-modal" data-modal-toggle="materials-modal" class="ml-20 mt-2 block text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800" type="button">
                                View Materials
                            </button>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-orange-200 to-orange-100 border-b-4 border-orange-600 rounded-lg shadow-xl p-5" onclick="document.getElementById('add-colors-modal').classList.remove('hidden');">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-orange-600"><i class="fas fa-plus pr-0 md:pr-3 fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Add Colors</h2>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                            <!-- Modal toggle for Colors -->
                                <button data-modal-target="colors-modal" data-modal-toggle="colors-modal" class="ml-20 mt-2 block text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800" type="button">
                                    View Colors
                                </button>
                    </div>
                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-cyan-200 to-cyan-100 border-b-4 border-cyan-600 rounded-lg shadow-xl p-5" onclick="document.getElementById('add-category-modal').classList.remove('hidden');">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-cyan-600"><i class="fas fa-plus pr-0 md:pr-3 fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Add Category</h2>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                            <!-- Modal toggle for Categories -->
                                <button data-modal-target="categories-modal" data-modal-toggle="categories-modal" class="ml-20 mt-2 block text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800" type="button">
                                    View Categories
                                </button>
                    </div>




                    <!-- modalsss -->
                        <!-- Add Materials Modal -->
                        <div id="add-materials-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Add New Material
                                        </h3>
                                        <button type="button" onclick="document.getElementById('add-materials-modal').classList.add('hidden');" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-4 md:p-5">
                                        <div class="grid gap-4 mb-4 grid-cols-1">
                                            <div class="col-span-1">
                                                <label for="new-material" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Material</label>
                                                <input type="text" name="new-material" id="new-material" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-600 focus:border-purple-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" placeholder="Type new material">
                                            </div>
                                        </div>
                                        <div id="material-error-msg" class="text-purple-500 p-2"></div>
                                        <button type="submit" class="text-white inline-flex items-center bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Add new material
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Add Colors Modal -->
                        <div id="add-colors-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Add New Color
                                        </h3>
                                        <button type="button" onclick="document.getElementById('add-colors-modal').classList.add('hidden');" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>

                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-4 md:p-5">
                                        <div class="grid gap-4 mb-4 grid-cols-1">
                                            <div class="col-span-1">
                                                <label for="new-color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Color</label>
                                                <input type="text" name="new-color" id="new-color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-orange-500" placeholder="Type new color">
                                            </div>
                                        </div>
                                        <div id="color-error-msg" class="text-orange-500 p-2"></div>
                                        <button type="submit" class="text-white inline-flex items-center bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Add new color
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Add Categories Modal -->
                        <div id="add-category-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Add New Category
                                        </h3>
                                        <button type="button" onclick="document.getElementById('add-category-modal').classList.add('hidden');" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>

                                    </div>
                                    <!-- Modal body -->
                                    <form class="p-4 md:p-5">
                                        <div class="grid gap-4 mb-4 grid-cols-1">
                                            <div class="col-span-1">
                                                <label for="new-category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Category</label>
                                                <input type="text" name="new-category" id="new-category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500" placeholder="Type new category">
                                            </div>
                                        </div>
                                        <div id="category-error-msg" class="text-cyan-500 p-2"></div>
                                        <button type="submit" class="text-white inline-flex items-center bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">
                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Add new category
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    <!-- modals end -->

                    <!-- display modal -->

                    <!-- Materials Modal -->
                        <!-- Materials Modal -->
                        <div id="materials-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Materials</h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="materials-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <div class="p-4 md:p-5 space-y-4">
                                        <table class="table-auto w-full">
                                            <thead>
                                                <tr>
                                                    <th class="px-4 py-2">ID</th>
                                                    <th class="px-4 py-2">Name</th>
                                                    <th class="px-4 py-2">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Fetch materials from the database and loop through them to display in the table
                                                $materialQuery = "SELECT * FROM `materials`";
                                                $executequery = mysqli_query($con, $materialQuery);
                                                if (mysqli_num_rows($executequery)) {
                                                    while ($row_of_material = mysqli_fetch_assoc($executequery)) {
                                                        ?>
                                                        <tr>
                                                            <td class="border px-4 py-2"><?php echo $row_of_material["material_id"]; ?></td>
                                                            <td class="border px-4 py-2"><?php echo $row_of_material["material_name"]; ?></td>
                                                            <td class="border px-4 py-2">
                                                                <a href="../../main/ajax/edit_materialajax.php?id=<?php echo $row_of_material["material_id"]; ?>" class="text-blue-500 hover:text-blue-700 mr-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0l-10 10a1 1 0 00-.211.316l-1 3a1 1 0 001.316 1.316l3-1a1 1 0 00.316-.211l10-10a1 1 0 000-1.414zM14 5l-9.998 10L5 14l10-9.998L14 5z" clip-rule="evenodd" />
                                                                    </svg>
                                                                </a>
                                                                <a href="../../main/ajax/delete_materialajax.php?id=<?php echo $row_of_material["material_id"]; ?>" class="text-red-500 hover:text-red-700">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path fill-rule="evenodd" d="M5 4a1 1 0 011-1h8a1 1 0 011 1v1h4a1 1 0 010 2H4a1 1 0 010-2h4V4zm4 8a1 1 0 00-1 1v4a1 1 0 102 0v-4a1 1 0 00-1-1zm-4 0a1 1 0 011-1h8a1 1 0 011 1v4a1 1 0 01-1 1H6a1 1 0 01-1-1v-4z" clip-rule="evenodd" />
                                                                    </svg>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="materials-modal" type="button" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Colors Modal -->
                        <div id="colors-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Colors</h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="colors-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <div class="p-4 md:p-5 space-y-4">
                                        <table class="table-auto w-full">
                                            <thead>
                                                <tr>
                                                    <th class="px-4 py-2">ID</th>
                                                    <th class="px-4 py-2">Name</th>
                                                    <th class="px-4 py-2">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                // Fetch colors from the database and loop through them to display in the table
                                                $colorQuery = "SELECT * FROM `colors`";
                                                $executequery = mysqli_query($con, $colorQuery);
                                                if (mysqli_num_rows($executequery)) {
                                                    while ($row_of_color = mysqli_fetch_assoc($executequery)) {
                                                        ?>
                                                        <tr>
                                                            <td class="border px-4 py-2"><?php echo $row_of_color["color_id"]; ?></td>
                                                            <td class="border px-4 py-2"><?php echo $row_of_color["color_name"]; ?></td>
                                                            <td class="border px-4 py-2">
                                                                <a href="../../main/ajax/edit_colorajax.php?id=<?php echo $row_of_color["color_id"]; ?>" class="text-blue-500 hover:text-blue-700 mr-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0l-10 10a1 1 0 00-.211.316l-1 3a1 1 0 001.316 1.316l3-1a1 1 0 00.316-.211l10-10a1 1 0 000-1.414zM14 5l-9.998 10L5 14l10-9.998L14 5z" clip-rule="evenodd" />
                                                                    </svg>
                                                                </a>
                                                                <a href="../../main/ajax/delete_colorajax.php?id=<?php echo $row_of_color["color_id"]; ?>" class="text-red-500 hover:text-red-700">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path fill-rule="evenodd" d="M5 4a1 1 0 011-1h8a1 1 0 011 1v1h4a1 1 0 010 2H4a1 1 0 010-2h4V4zm4 8a1 1 0 00-1 1v4a1 1 0 102 0v-4a1 1 0 00-1-1zm-4 0a1 1 0 011-1h8a1 1 0 011 1v4a1 1 0 01-1 1H6a1 1 0 01-1-1v-4z" clip-rule="evenodd" />
                                                                    </svg>


                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="colors-modal" type="button" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Categories Modal -->
                        <div id="categories-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Categories</h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="categories-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <div class="p-4 md:p-5 space-y-4">
                                        <table class="table-auto w-full">
                                            <thead>
                                                <tr>
                                                    <th class="px-4 py-2">ID</th>
                                                    <th class="px-4 py-2">Name</th>
                                                    <th class="px-4 py-2">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $category = "SELECT * FROM `category`";
                                                $executequery = mysqli_query($con, $category);
                                                if (mysqli_num_rows($executequery)) {
                                                    while ($row_of_category = mysqli_fetch_assoc($executequery)) {
                                                ?>
                                                        <tr>
                                                            <td class="border px-4 py-2"><?php echo $row_of_category["category_id"]; ?></td>
                                                            <td class="border px-4 py-2"><?php echo $row_of_category["category_name"]; ?></td>
                                                            <td class="border px-4 py-2">
                                                                <a href="../../main/ajax/edit_categoryajax.php?id=<?php echo $row_of_category["category_id"]; ?>" class="text-blue-500 hover:text-blue-700 mr-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0l-10 10a1 1 0 00-.211.316l-1 3a1 1 0 001.316 1.316l3-1a1 1 0 00.316-.211l10-10a1 1 0 000-1.414zM14 5l-9.998 10L5 14l10-9.998L14 5z" clip-rule="evenodd" />
                                                                    </svg>
                                                                </a>
                                                                <a href="../../main/ajax/delete_categoryajax.php?id=<?php echo $row_of_category["category_id"]; ?>" class="text-red-500 hover:text-red-700">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path fill-rule="evenodd" d="M13 6a1 1 0 011 1v8a1 1 0 01-2 0V7a1 1 0 011-1zM7 6a1 1 0 011 1v8a1 1 0 01-2 0V7a1 1 0 011-1z" clip-rule="evenodd" />
                                                                    </svg>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button data-modal-hide="categories-modal" type="button" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- end display modal -->

                    



                    <?php
                    // Query to get the total number of products
                    $productQuery = "SELECT COUNT(*) AS total_products FROM `product`";
                    $result = mysqli_query($con, $productQuery);
                    $row = mysqli_fetch_assoc($result);
                    $totalProducts = $row['total_products'];
                    ?>

                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">                      
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                            <div class="flex flex-row items-center">
                                <div class="flex-shrink pr-4">
                                    <div class="rounded-full p-5 bg-green-600"><i class="fas fa-box pr-0 md:pr-3 fa-2x fa-inverse"></i></div>
                                </div>
                                <div class="flex-1 text-right md:text-center">
                                    <h2 class="font-bold uppercase text-gray-600">Total No of Products</h2>
                                    <p class="font-bold text-3xl"><?php echo $totalProducts; ?> <span class="text-green-500"></span></p>
                                </div>
                            </div>
                        </div>
                        <!--/Metric Card-->
                    </div>


                    <?php
                        // Query to get the total number of customers
                        $customerQuery = "SELECT COUNT(*) AS total_customers FROM `customer`";
                        $result = mysqli_query($con, $customerQuery);
                        $row = mysqli_fetch_assoc($result);
                        $totalCustomers = $row['total_customers'];
                        ?>

                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h2 class="font-bold uppercase text-gray-600">Total No of Users</h2>
                                        <p class="font-bold text-3xl"><?php echo $totalCustomers; ?> <span class="text-pink-500"></span></p>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>


                        <?php
                            // Query to get the total number of payments
                            $paymentQuery = "SELECT COUNT(*) AS total_payments FROM `payment`";
                            $result = mysqli_query($con, $paymentQuery);
                            $row = mysqli_fetch_assoc($result);
                            $totalPayments = $row['total_payments'];
                            ?>

                            <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                <!--Metric Card-->
                                <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                                    <div class="flex flex-row items-center">
                                        <div class="flex-shrink pr-4">
                                            <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-credit-card pr-0 md:pr-3 fa-2x fa-inverse"></i></div>
                                        </div>
                                        <div class="flex-1 text-right md:text-center">
                                            <h2 class="font-bold uppercase text-gray-600">Total No of Payments</h2>
                                            <p class="font-bold text-3xl"><?php echo $totalPayments; ?> <span class="text-yellow-600"></span></p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Metric Card-->
                            </div>


                            <?php
                                // Query to get the total number of orders
                                $orderQuery = "SELECT COUNT(*) AS total_orders FROM orders";
                                $result = mysqli_query($con, $orderQuery);
                                $row = mysqli_fetch_assoc($result);
                                $totalOrders = $row['total_orders'];
                                ?>

                                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                    <!--Metric Card-->
                                    <div class="bg-gradient-to-b from-teal-200 to-teal-100 border-b-4 border-teal-500 rounded-lg shadow-xl p-5">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="rounded-full p-5 bg-teal-600"><i class="fas fa-shopping-cart pr-0 md:pr-3 fa-2x fa-inverse"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h2 class="font-bold uppercase text-gray-600">Total No of Orders</h2>
                                                <p class="font-bold text-3xl"><?php echo $totalOrders; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>

                                <?php
                                    // Query to get the total number of feedback
                                    $feedbackQuery = "SELECT COUNT(*) AS total_feedback FROM review";
                                    $result = mysqli_query($con, $feedbackQuery);
                                    $row = mysqli_fetch_assoc($result);
                                    $totalFeedback = $row['total_feedback'];
                                    ?>

                                    <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                        <!--Metric Card-->
                                        <div class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                                            <div class="flex flex-row items-center">
                                                <div class="flex-shrink pr-4">
                                                    <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-comments pr-0 md:pr-3 fa-2x fa-inverse"></i></div>
                                                </div>
                                                <div class="flex-1 text-right md:text-center">
                                                    <h2 class="font-bold uppercase text-gray-600">Total No of Feedback</h2>
                                                    <p class="font-bold text-3xl"><?php echo $totalFeedback; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/Metric Card-->
                                    </div>

                                    <?php
                                        // Query to get the total number of addresses
                                        $addressQuery = "SELECT COUNT(*) AS total_addresses FROM address";
                                        $result = mysqli_query($con, $addressQuery);
                                        $row = mysqli_fetch_assoc($result);
                                        $totalAddresses = $row['total_addresses'];
                                        ?>

                                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                            <!--Metric Card-->
                                            <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                                                <div class="flex flex-row items-center">
                                                    <div class="flex-shrink pr-4">
                                                        <div class="rounded-full p-5 bg-red-600"><i class="fas fa-map-marker-alt pr-0 md:pr-3 fa-2x fa-inverse"></i></div>
                                                    </div>
                                                    <div class="flex-1 text-right md:text-center">
                                                        <h2 class="font-bold uppercase text-gray-600">Total No of Address</h2>
                                                        <p class="font-bold text-3xl"><?php echo $totalAddresses; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/Metric Card-->
                                        </div>

                                        <?php
                                            // Query to get the total number of materials
                                            $materialQuery = "SELECT COUNT(*) AS total_materials FROM materials";
                                            $result = mysqli_query($con, $materialQuery);
                                            $materialRow = mysqli_fetch_assoc($result);
                                            $totalMaterials = $materialRow['total_materials'];

                                            // Query to get the total number of colors
                                            $colorQuery = "SELECT COUNT(*) AS total_colors FROM colors";
                                            $result = mysqli_query($con, $colorQuery);
                                            $colorRow = mysqli_fetch_assoc($result);
                                            $totalColors = $colorRow['total_colors'];

                                            // Query to get the total number of categories
                                            $categoryQuery = "SELECT COUNT(*) AS total_categories FROM category";
                                            $result = mysqli_query($con, $categoryQuery);
                                            $categoryRow = mysqli_fetch_assoc($result);
                                            $totalCategories = $categoryRow['total_categories'];
                                            ?>

                                        <div class="flex flex-wrap -mx-4">
                                                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                                    <!--Metric Card for Materials-->
                                                    <div class="bg-gradient-to-b from-orange-200 to-orange-100 border-b-4 border-orange-600 rounded-lg shadow-xl p-5">
                                                        <div class="flex flex-row items-center">
                                                            <div class="flex-shrink pr-4">
                                                                <div class="rounded-full p-5 bg-orange-600"><i class="fas fa-box pr-0 md:pr-3 fa-2x fa-inverse"></i></div>
                                                            </div>
                                                            <div class="flex-1 text-right md:text-center">
                                                                <h2 class="font-bold uppercase text-gray-600">Total No of Materials</h2>
                                                                <p class="font-bold text-3xl"><?php echo $totalMaterials; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/Metric Card for Materials-->
                                                </div>
                                                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                                    <!--Metric Card for Colors-->
                                                    <div class="bg-gradient-to-b from-stone-200 to-stone-100 border-b-4 border-stone-600 rounded-lg shadow-xl p-5">
                                                        <div class="flex flex-row items-center">
                                                            <div class="flex-shrink pr-4">
                                                                <div class="rounded-full p-5 bg-stone-600"><i class="fas fa-palette pr-0 md:pr-3 fa-2x fa-inverse"></i></div>
                                                            </div>
                                                            <div class="flex-1 text-right md:text-center">
                                                                <h2 class="font-bold uppercase text-gray-600">Total No of Colors</h2>
                                                                <p class="font-bold text-3xl"><?php echo $totalColors; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/Metric Card for Colors-->
                                                </div>
                                                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                                                    <!--Metric Card for Categories-->
                                                    <div class="bg-gradient-to-b from-lime-200 to-lime-100 border-b-4 border-lime-600 rounded-lg shadow-xl p-5">
                                                        <div class="flex flex-row items-center">
                                                            <div class="flex-shrink pr-4">
                                                                <div class="rounded-full p-5 bg-lime-600"><i class="fas fa-tags pr-0 md:pr-3 fa-2x fa-inverse"></i></div>
                                                            </div>
                                                            <div class="flex-1 text-right md:text-center">
                                                                <h2 class="font-bold uppercase text-gray-600">Total No of Categories</h2>
                                                                <p class="font-bold text-3xl"><?php echo $totalCategories; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--/Metric Card for Categories-->
                                                </div>
                                        </div>


                </div>


          
        </section>
    </div>
</main>

<!-- Edit products  -->
                     <!-- Main modal -->
                     <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                           <!-- Modal content -->
                           <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-8 py-4 ">
                              <!-- Modal header -->
                              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 ">
                                 <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Create New Product
                                 </h3>
                                 <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                 </button>
                              </div>
                              <!-- Modal body -->
                              <form id="productForm" class="p-4 md:p-5">
                                 <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2">
                                       <label for="product-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                                       <input type="text" name="product-name" id="product-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Type product name">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                       <label for="product-price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Price</label>
                                       <input type="number" name="product-price" id="product-price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Rs.2999">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                       <label for="product-category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Category</label>
                                       <select id="product-category" name="product-category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500">
                                       <option value="">Select option</option>

                                       <?php
                                                     $category = "SELECT * FROM `category`";
                                                     $executequerycat = mysqli_query($con,$category);
                                                     if(mysqli_num_rows($executequerycat))
                                                     {
                                                         while($row_of_cat=mysqli_fetch_assoc($executequerycat))
                                                         {
                                                           
                                                             ?>

                                          <option value="<?php echo($row_of_cat["category_id"]); ?>"><?php echo($row_of_cat["category_name"]); ?></option>

                                          <?php
                                                         }
                                                        }
                                                        ?>
                                       </select>
                                    </div>

                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="product-material" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Material</label>

                                        <select id="select2" name="select2[]" class="hidden" multiple>
                                                
                                                    <?php
                                                     $materials = "SELECT * FROM `materials`";
                                                     $executequerymaterials = mysqli_query($con,$materials);
                                                     if(mysqli_num_rows($executequerymaterials))
                                                     {
                                                         while($row_of_material=mysqli_fetch_assoc($executequerymaterials))
                                                         {
                                                           
                                                    ?>

                                            <option value="<?php echo($row_of_material["material_id"]); ?>"><?php echo($row_of_material["material_name"]); ?></option>

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
                                    
                                    <div class="col-span-3 sm:col-span-2">
                                    <label for="product-color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Color</label>

                                        <select id="select3" name="select3[]" class="hidden" multiple>

                                        <?php
                                                     $color = "SELECT * FROM `colors`";
                                                     $executequerycolor = mysqli_query($con,$color);
                                                     if(mysqli_num_rows($executequerycolor))
                                                     {
                                                         while($row_of_color=mysqli_fetch_assoc($executequerycolor))
                                                         {
                                                           
                                                    ?>

                                            <option value="<?php echo($row_of_color["color_id"]); ?>"><?php echo($row_of_color["color_name"]); ?></option>
                                            
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
                                       <label for="product-description" class="block text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                       <textarea id="product-description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Write product description here"></textarea>                    
                                    </div>
                                    <div class="col-span-2">
                                       <div class="">
                                          <label for="images" class="block text-sm font-medium text-gray-700">Select Image Files (Max 5)</label>
                                          <input id="images" name="images[]" type="file" accept="image/*" multiple class="mt-1 bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
                                          <div id="selectedImages" class="mt-2 flex flex-col space-y-2"></div>
                                       </div>
                                       <script>
                                          // Stop click event propagation on the images input
                                          document.getElementById('images').addEventListener('click', function(event) {
                                              event.stopPropagation();
                                          });
                                          
                                          document.getElementById('images').addEventListener('change', function(event) {
                                              const fileList = event.target.files;
                                              const selectedImagesContainer = document.getElementById('selectedImages');
                                              selectedImagesContainer.innerHTML = ''; // Clear previous selection
                                          
                                              if (fileList.length > 5) {
                                                  event.target.value = ''; // Clear the selected files
                                                  return;
                                              }
                                          
                                              for (let i = 0; i < fileList.length; i++) {
                                                  const fileName = fileList[i].name;
                                                  const fileItem = document.createElement('div');
                                                  fileItem.textContent = fileName;
                                                  fileItem.classList.add('text-sm', 'text-gray-700');
                                                  selectedImagesContainer.appendChild(fileItem);
                                              }
                                          });
                                       </script>
                                    </div>
                                    <div class="col-span-2 flex justify-center">
                                       <button type="submit" class="w-full md:w-auto text-white flex items-center bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm md:text-base px-5  md:py-1 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                                          <svg class="w-[30px] h-[28px] text-gray-800 dark:text-white m-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"/>
                                          </svg>
                                          Add product
                                       </button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- Edit product end -->


<!-- profile -->
      <!-- Main modal -->
      <div id="ad-crud-modal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full inset-0 h-full overflow-y-auto overflow-x-hidden">
         <div class="relative w-full max-w-md p-4">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
               <!-- Modal header -->
               <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                     Admin Profile
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="ad-crud-modal">
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                     </svg>
                     <span class="sr-only">Close modal</span>
                  </button>
               </div>
               <!-- Modal body -->
               <div class="p-4">
                  <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-4 mb-4">
                     <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover" src="https://elements-cover-images-0.imgix.net/e7fafd3e-df25-4026-9336-e7f7b16c3044?auto=compress%2Cformat&w=1370&fit=max&s=03d62df3f9b0448666c3b3ce0504f2c1" alt="Bonnie image"/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                           <span id="username">jeweladmin@gmail.com</span>
                        </h5>
                        <div class="relative">
                           <input
                              type="password"
                              id="password"
                              name="password"
                              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                              placeholder="Password"
                              value="password"
                              readonly
                              />
                           <div
                              class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5"
                              id="password-toggle"
                              aria-hidden="true"
                              >
                              <svg class="w-[32px] h-[32px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" id="toggle-password">
                                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H7a1 1 0 0 1-1-1v-7c0-.6.4-1 1-1Z"/>
                              </svg>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script>
         const passwordInput = document.getElementById('password');
         const passwordToggle = document.getElementById('toggle-password');
         
         passwordToggle.addEventListener('mouseenter', () => {
           passwordInput.type = 'text';
           passwordInput.value = 'jeweladmin';
         });
         
         passwordToggle.addEventListener('mouseleave', () => {
           passwordInput.type = 'password';
           passwordInput.value = 'password';
         });
      </script>

      <script src="../../js/addproduct.js"></script>
      <script src="../../js/addcatmatcol.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>



</body>

</html>