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

</head>

<body class="">

    <!-- Navigation Bar -->
   

    <!-- Login Form -->
    <div class="font-sans">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 z-0 ">
            <div class="relative sm:max-w-sm w-full">
                <div class="card bg-yellow-800 shadow-lg w-full h-full rounded-3xl absolute transform -rotate-6"></div>
                <div class="card bg-orange-800 shadow-lg w-full h-full rounded-3xl absolute transform rotate-6"></div>
                <div class="relative w-full rounded-3xl px-6 py-4 bg-gray-100 shadow-md">
                    <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                        Login
                    </label>
                    <form id="loginForm" method="#" action="#" class="mt-10">

                        <div>
                            <input type="email" id="username" placeholder="Username" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 px-2">
                            <div id="usernameError" class="text-red-500"></div>
                        </div>

                        <div class="mt-7">
                            <input type="password" id="password" placeholder="Password" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 px-2">
                            <div id="passwordError" class="text-red-500"></div>
                        </div>

                        <div class="mt-7 flex">
                           

                            <div class="w-full text-right">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="./forpass.php">
                                    Forgot Password
                                </a>
                            </div>
                        </div>

                        <div class="mt-7">
                            <button id="loginButton" class="bg-yellow-950 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                Login
                            </button>
                        </div>

                        <div class="mt-7">
                            <div class="flex justify-center items-center">
                                <label class="mr-2">Create Account ?</label>
                                <a href="./signup.php" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php
        include("./layout/footer/footer.php");
        ?>
    </div>

    <!-- jQuery script for validation -->

<script src="../../js/login.js">

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>


</body>

</html>
