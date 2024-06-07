<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Jewelry Shop</title>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
</head>
<body>
<div id="page1" class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">

        <div class="font-sans">
            <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ml-80 w-full">
                <div class="relative sm:max-w-sm w-full">
                    <div id="cardBackground1" class="card bg-yellow-800 shadow-lg w-full h-full rounded-3xl absolute transform -rotate-6"></div>
                    <div id="cardBackground2" class="card bg-orange-800 shadow-lg w-full h-full rounded-3xl absolute transform rotate-6"></div>
                    <div id="mainContainer" class="relative w-full rounded-3xl px-6 py-4 bg-gray-100 shadow-md">
                        <label for="resetHeading" class="block mt-3 text-xl text-gray-700 text-center font-semibold">
                            You have requested to reset your password!
                        </label>

                        <label for="resetInstructions" class="block mt-3 text-xs text-gray-400 text-center font-semibold">
                            We cannot send you your old password. A unique link to reset your password has been generated for you to reset your password. Click the following link and follow the instructions.
                        </label>

                        <form id="resetForm" class="mt-10">                 
                            <div class="mt-7">                
                                <input type="email" placeholder="Email" id="email" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-amber-100 focus:bg-amber-100 focus:ring-0 px-2">                           
                            </div>

                            <div class="mt-7">
                                <button type="button" id="reset" class="bg-yellow-950 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out transform hover:-translate-x hover:scale-105">
                                    Reset Password
                                </button>
                            </div>

                            <div class="mt-7">
                                <div class="flex justify-center items-center">
                                    <label class="mr-2" for="loginLink">Do you already have an account?</label>
                                    <a id="loginLink" href="./login.php" class="text-amber-500 transition duration-500 ease-in-out transform hover:-translate-x hover:scale-105">
                                        Login Here
                                    </a>
                                </div>
                            </div>
                            
                            <div class="mt-7">
                                <div class="flex justify-center items-center">
                                    <label class="mr-2" for="signupLink">Create Account?</label>
                                    <a id="signupLink" href="./signup.php" class="text-amber-500 transition duration-500 ease-in-out transform hover:-translate-x hover:scale-105">
                                        Sign Up Here
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="page2" class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
						<!-- component -->
    <div class="font-sans">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ml-80 w-full">
            <div class="relative sm:max-w-sm w-full">
                <div id="cardBackground1" class="card bg-yellow-800 shadow-lg w-full h-full rounded-3xl absolute transform -rotate-6"></div>
                    <div id="cardBackground2" class="card bg-orange-800 shadow-lg w-full h-full rounded-3xl absolute transform rotate-6"></div>
                        <div id="mainContainer" class="relative w-full rounded-3xl px-6 py-4 bg-gray-100 shadow-md">
                            <label for="resetHeading" class="block mt-3 text-xl text-gray-700 text-center font-semibold">
                                Verification Code via Email
                            </label>

                            <label for="resetInstructions" class="block mt-3 text-xs text-gray-400 text-center font-semibold">
                                Please check your email inbox for the verification code we've sent.
                            </label>

                            <div>
                                <form action="" method="post">
                                    <div class="flex flex-col space-y-16 p-2">
          

                                    <div id="otp" class="inputs flex flex-row items-center justify-between mx-auto w-full max-w-xs">
                                            <input id="first" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==1) return false;" name="first" class="w-16 h-16 flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-amber-700" type="text">
                                            <input id="second" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==1) return false;" name="second" class="w-16 h-16 flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-amber-700" type="text">
                                            <input id="third" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==1) return false;" name="third" class="w-16 h-16 flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-amber-700" type="text">
                                            <input id="fourth" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==1) return false;" name="fourth" class="w-16 h-16 flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-amber-700" type="text">
                                        </div>
                                            <span id="invalidotp" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                                                Invalid OTP !
                                            </span>

                                                <div class="flex flex-col space-y-5">
                                                    <div>
                                                        <button id="verifyOtp" type="button" class="flex flex-row items-center justify-center text-center w-full border rounded-xl outline-none py-4 bg-amber-700 border-none text-white text-sm shadow-sm">
                                                            Verify OTP
                                                        </button>
                                                    </div>

                                                    <div class="flex flex-row items-center justify-center text-center text-sm font-medium space-x-1 text-gray-500">
                                                        <p>Didn't recieve code?</p> <a class="flex flex-row items-center text-amber-600" href="http://" target="_blank" rel="noopener noreferrer">Resend</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
					
<div id="page3" class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
    <div class="font-sans">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ml-80 w-full">
            <div class="relative sm:max-w-sm w-full">
                <div id="cardBackground1" class="card bg-yellow-800 shadow-lg w-full h-full rounded-3xl absolute transform -rotate-6"></div>
                    <div id="cardBackground2" class="card bg-orange-800 shadow-lg w-full h-full rounded-3xl absolute transform rotate-6"></div>
                        <div id="mainContainer" class="relative w-full rounded-3xl px-6 py-4 bg-gray-100 shadow-md">
                            <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                Kindly Change Password
                            </h2>
                            <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5">
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Create a new password for your account.
                                    </label>
                                    <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-white p-2"style="color: green;">
                                        Enter a password that's strong and unique!
                                    </div>
                                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" required="" minlength="8">
                                </div>

                                <div>
                                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Confirm password
                                    </label>
                                    <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" required="" minlength="8">
                                        <p id="password-error" class="text-red-500 text-sm mt-1"></p>
                                </div>
                                    
                                <button id="changepass" type="submit" class="w-full text-white bg-amber-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Reset password
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

			</div>
		</div>
	</div>
</div>

<script src="../../js/forpass.js"> </script>
	

</body>
</html>