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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />

    <title>Jewelry Shop</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
    

</head>

<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <?php
    include("./layout/header/header.php");
    include("../../config/connect.php");
    ?>

<div class="flex flex-grow ">

<!-- <aside class="w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700 mt-20">
    <a href="#" class="mx-auto">
        <img class="w-auto h-6 sm:h-7" src="https://merakiui.com/images/full-logo.svg" alt="">
    </a>

    <div class="flex flex-col items-center mt-6 -mx-2">
    <svg height="120px" width="120px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-8.49 -8.49 77.65 77.65" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="1.82013"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-8.49" y="-8.49" width="77.65" height="77.65" rx="38.825" fill="#bb6502" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#fcf7f7" stroke-width="2.669524"> <g> <g> <ellipse style="fill:#ffffff;" cx="30.336" cy="12.097" rx="11.997" ry="12.097"></ellipse> <path style="fill:#ffffff;" d="M35.64,30.079H25.031c-7.021,0-12.714,5.739-12.714,12.821v17.771h36.037V42.9 C48.354,35.818,42.661,30.079,35.64,30.079z"></path> </g> </g> </g><g id="SVGRepo_iconCarrier"> <g> <g> <ellipse style="fill:#ffffff;" cx="30.336" cy="12.097" rx="11.997" ry="12.097"></ellipse> <path style="fill:#ffffff;" d="M35.64,30.079H25.031c-7.021,0-12.714,5.739-12.714,12.821v17.771h36.037V42.9 C48.354,35.818,42.661,30.079,35.64,30.079z">     
    </path> </g> </g> </g></svg>      
        <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200">John Doe</h4>
        <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400">john@example.com</p>
    </div>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <span class="mx-4 font-medium">Edit Details</span>
            </a>

            <a href="javascript:void(0)" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                viewBox="0 0 6.35 6.35">
                <path
                  d="M3.172.53a.265.266 0 0 0-.262.268v2.127a.265.266 0 0 0 .53 0V.798A.265.266 0 0 0 3.172.53zm1.544.532a.265.266 0 0 0-.026 0 .265.266 0 0 0-.147.47c.459.391.749.973.749 1.626 0 1.18-.944 2.131-2.116 2.131A2.12 2.12 0 0 1 1.06 3.16c0-.65.286-1.228.74-1.62a.265.266 0 1 0-.344-.404A2.667 2.667 0 0 0 .53 3.158a2.66 2.66 0 0 0 2.647 2.663 2.657 2.657 0 0 0 2.645-2.663c0-.812-.363-1.542-.936-2.03a.265.266 0 0 0-.17-.066z"
                  data-original="#000000" />
              </svg>
              <span class="mx-4 font-medium">Logout</span>
            </a>

        </nav>
    </div>
</aside> -->

          <div class="container mx-auto px-4 py-8 mt-20">
                  <h2 class="text-2xl font-bold text-gray-800">Update Details</h2>
                  <form class="mt-10" id="your-form-id">
            <div>
            <h3 class="text-lg font-bold text-gray-800 mb-6">Personal Details</h3>

            <?php
              $cust_details="SELECT `cus_email`,`cus_fname`,`cus_lname`,`cus_phone` FROM `customer` WHERE `cus_email`='$email'";
              $get_details=mysqli_query($con,$cust_details);
              if(mysqli_num_rows($get_details)){
                  while($row_cus=mysqli_fetch_assoc($get_details))
                  {
                    ?>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="relative flex items-center">
                        <input type="text" placeholder="First Name" value="<?php echo($row_cus["cus_fname"]); ?>"
                            class="px-4 py-3.5 bg-white text-amber w-full text-sm border-b-2 focus:border-amber outline-none"
                            id="first_name" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                            class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                            <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                            <path
                                d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                data-original="#000000"></path>
                        </svg>
                    </div>
                    <div class="relative flex items-center">
                        <input type="text" placeholder="Last Name" value="<?php echo($row_cus["cus_lname"]); ?>"
                            class="px-4 py-3.5 bg-white text-amber w-full text-sm border-b-2 focus:border-amber outline-none"
                            id="last_name" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                            class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                            <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                            <path
                                d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                data-original="#000000"></path>
                        </svg>
                    </div>
                    <div class="relative flex items-center">
                        <input type="email" placeholder="Email" readonly value="<?php echo($row_cus["cus_email"]); ?>"
                            class="px-4 py-3.5 bg-white text-gray-600 w-full text-sm border-b-2 focus:border-amber outline-none"
                            id="email" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb"
                            class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 682.667 682.667">
                            <defs>
                                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                    <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                <path fill="none" stroke-miterlimit="10" stroke-width="40"
                                    d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                                    data-original="#000000"></path>
                                <path
                                    d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                                    data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="relative flex items-center">
                        <input type="tel" placeholder="Phone No." value="<?php echo($row_cus["cus_phone"]); ?>" maxlength="10"
                            class="px-4 py-3.5 bg-white text-amber w-full text-sm border-b-2 focus:border-amber outline-none"
                            id="phone" />
                        <svg fill="#bbb" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 64 64">
                            <path
                                d="m52.148 42.678-6.479-4.527a5 5 0 0 0-6.963 1.238l-1.504 2.156c-2.52-1.69-5.333-4.05-8.014-6.732-2.68-2.68-5.04-5.493-6.73-8.013l2.154-1.504a4.96 4.96 0 0 0 2.064-3.225 4.98 4.98 0 0 0-.826-3.739l-4.525-6.478C20.378 10.5 18.85 9.69 17.24 9.69a4.69 4.69 0 0 0-1.628.291 8.97 8.97 0 0 0-1.685.828l-.895.63a6.782 6.782 0 0 0-.63.563c-1.092 1.09-1.866 2.472-2.303 4.104-1.865 6.99 2.754 17.561 11.495 26.301 7.34 7.34 16.157 11.9 23.011 11.9 1.175 0 2.281-.136 3.29-.406 1.633-.436 3.014-1.21 4.105-2.302.199-.199.388-.407.591-.67l.63-.899a9.007 9.007 0 0 0 .798-1.64c.763-2.06-.007-4.41-1.871-5.713z"
                                data-original="#000000"></path>
                        </svg>
                    </div>
                </div>

                <button type="button" class="rounded-md my-6 px-6 py-3 w-full text-sm font-semibold bg-gray-800 text-white hover:bg-gray-700" id="confirm">Confirm</button>

               


                    <?php

                  }
                }
            ?>
            </div>
            <div class="mt-6">

            <!-- modal for add address -->

            <!-- Main modal -->
            <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-lg  max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-10">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Add New Address
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="mt-10" id="myForm">
                            <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <select id="type" class="px-4 py-3.5 bg-white text-amber w-full text-sm border-b-2 focus:border-amber outline-none" placeholder="">
                                <option value="" disabled selected>Select Type</option>
                                <option value="Home">Home</option>
                                <option value="Work">Work</option>
                            </select>
                        </div>
                        <div>
                            <input type="text" id="Room" placeholder="Room No" maxlength="10"
                            class="px-4 py-3.5 bg-white text-amber w-full text-sm border-b-2 focus:border-amber outline-none" />
                        </div>
                        <div>
                            <input type="text" id="Building" placeholder="Building No" maxlength="10"
                            class="px-4 py-3.5 bg-white text-amber w-full text-sm border-b-2 focus:border-amber outline-none" />
                        </div>
                        <div>
                            <input type="text" id="Landmark" placeholder="Landmark" maxlength="40"
                            class="px-4 py-3.5 bg-white text-amber w-full text-sm border-b-2 focus:border-amber outline-none" />
                        </div>
                        <div>
                            <input type="text" id="Street" placeholder="Street" maxlength="40"
                            class="px-4 py-3.5 bg-white text-amber w-full text-sm border-b-2 focus:border-amber outline-none" />
                        </div>
                        <div>
                            <input type="text" id="City" placeholder="City" maxlength="20"
                            class="px-4 py-3.5 bg-white text-amber w-full text-sm border-b-2 focus:border-amber outline-none" />
                        </div>
                        <div>
                            <input type="number" id="pincode" placeholder="Pincode" maxlength="6"
                            class="px-4 py-3.5 bg-white text-amber w-full text-sm border-b-2 focus:border-amber outline-none" />
                        </div>

                            </div>

                            <div id="error-msg"></div>

                            <button type="button" id="submit" class="rounded-md my-6 px-6 py-3 w-full text-sm font-semibold bg-amber text-white hover:bg-[#222]">Confirm</button>

                        </form>
                    </div>
                </div>
            </div> 

              
              <div class="flex gap-6 max-sm:flex-col items-center justify-between">
                <h3 class="text-lg font-bold text-amber mb-6">Shipping Address</h3>
                
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button" class="flex rounded-md px-6 py-3 w-50 mb-4 text-sm font-semibold bg-transparent hover:bg-gray-100 border-2 text-amber">
                    <svg class="mr-2" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M12 4V20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    Add Address</button>
              </div>

            <?php
              $addressQuery = "SELECT * FROM `address` WHERE `add_cus_email` = '$email' ";
              $executequery = mysqli_query($con,$addressQuery);
              if(mysqli_num_rows($executequery)>0)
              {
                while($row_of_address=mysqli_fetch_assoc($executequery))
                {
            ?>

           <div class="flex flex-col justify-center items-center mb-2">
             <div class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3 border-solid border-2 border-gray-600">
             
            <div class=" w-full">
                    <h4 class="px-2 text-xl font-bold text-navy-700 dark:text-white">
                    Address Information
                    </h4>
                </div> 
                <div class="grid grid-cols-2 gap-4 px-2 w-full">
                  <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Type</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                      <?php echo $row_of_address["add_type"] ?>
                    </p>
                  </div>

                  <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Room No</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                      <?php echo $row_of_address["add_room"] ?>
                    </p>
                  </div>

                  <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Building No</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                      <?php echo $row_of_address["add_blg"] ?>
                    </p>
                  </div>

                  <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Landmark</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                      <?php echo $row_of_address["add_landmark"] ?>
                    </p>
                  </div>

                  <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Street</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                      <?php echo $row_of_address["add_street"] ?> 
                    </p>
                  </div>

                  <div class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">City</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                      <?php echo $row_of_address["add_city"] ?>
                    </p>
                  </div>

                  <div class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Pincode</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                      <?php echo $row_of_address["add_pincode"] ?>
                    </p>
                  </div>
                </div>
             </div>
           </div>
           <?php
      }
    }
?>
              
            </div>
            <input type="text" class="hidden" name="text" placeholder="Enter..." id="user_email" value="<?php echo $email ;?>">

          </form>
        </div>
      </div>


    <!-- Footer -->
    <?php
    include("./layout/footer/footer.php");
    ?> 


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<script src="../../js/addaddress.js"></script>
<script src="../../js/userdetails.js"></script>


</body>


</html>
