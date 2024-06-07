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
    <title>Jewelry Shop</title>

    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>


</head>

<body class="">

<?php                
    include("../../config/connect.php");
?>

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



<!-- table -->


<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-20">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-3 py-3">
                    Customer Email
                </th>

                <th scope="col" class="px-3 py-3">
                    Customer Password
                </th>

                <th scope="col" class="px-3 py-3">
                    First Name
                </th>

                <th scope="col" class="px-3 py-3">
                    Last Name
                </th>

                <th scope="col" class="px-3 py-3">
                    Phone Number
                </th>

            </tr>
        </thead>
        <tbody>
            <?php                
                $customer = "SELECT * FROM `customer`";
                $executequery = mysqli_query($con,$customer);
                if(mysqli_num_rows($executequery))
                {
                    while($row_of_customer=mysqli_fetch_assoc($executequery))
                    {
                        $customerid=$row_of_customer["cus_email"];

                    
                        ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                           
                            <th scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php
                            echo $row_of_customer["cus_email"];
                            ?>
                            </th>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_customer["cus_password"];
                            ?>
                            </td>

                            <!-- line-clamp-1 hover:line-clamp-none -->
                            <td class="px-6 py-4 ">
                            <?php
                            echo $row_of_customer["cus_fname"];
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_customer["cus_lname"];
                            ?>
                            </td>

                            <td class="px-4 py-4">
                            <?php
                            echo $row_of_customer["cus_phone"];
                            ?>
                            </td>

                            


                            <!-- <td class="flex items-center px-4 py-2">
                                <a href="editcustomer.php?pro_id=$row[pro_id]" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="deletecustomer.php?pro_id=$row[pro_id]" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a>
                            </td> -->

                            

                        </tr>
                    <?php
                    }
                }
            ?>   
        </tbody>
    </table>
</div>

                
                
            </form>
        </div>
    </div>
</div> 





<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>



</body>

</html>
