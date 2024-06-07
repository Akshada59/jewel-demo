<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Jewelry Shop</title>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script src="https://cdn.tailwindcss.com"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
      <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
      <!--Replace with your tailwind.css once created-->
      <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
      <!--Totally optional :) -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
   </head>
   <body class="container">
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
      <nav class="bg-white shadow-lg h-screen fixed top-0 left-0 min-w-[250px] py-6 px-4 font-[sans-serif] overflow-auto mt-16">
         <div class="mt-6">
            <h6 class="text-amber-600 text-sm font-bold px-4">Information</h6>
            <ul class="mt-3">
               <li>
                  <a href="admindisplaycus.php"
                     class="text-black hover:text-amber-600 text-sm flex items-center hover:bg-amber-50 rounded px-4 py-3 transition-all">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                        viewBox="0 0 512 512">
                        <path
                           d="M437.02 74.98C388.668 26.63 324.379 0 256 0S123.332 26.629 74.98 74.98C26.63 123.332 0 187.621 0 256s26.629 132.668 74.98 181.02C123.332 485.37 187.621 512 256 512s132.668-26.629 181.02-74.98C485.37 388.668 512 324.379 512 256s-26.629-132.668-74.98-181.02zM111.105 429.297c8.454-72.735 70.989-128.89 144.895-128.89 38.96 0 75.598 15.179 103.156 42.734 23.281 23.285 37.965 53.687 41.742 86.152C361.641 462.172 311.094 482 256 482s-105.637-19.824-144.895-52.703zM256 269.507c-42.871 0-77.754-34.882-77.754-77.753C178.246 148.879 213.13 114 256 114s77.754 34.879 77.754 77.754c0 42.871-34.883 77.754-77.754 77.754zm170.719 134.427a175.9 175.9 0 0 0-46.352-82.004c-18.437-18.438-40.25-32.27-64.039-40.938 28.598-19.394 47.426-52.16 47.426-89.238C363.754 132.34 315.414 84 256 84s-107.754 48.34-107.754 107.754c0 37.098 18.844 69.875 47.465 89.266-21.887 7.976-42.14 20.308-59.566 36.542-25.235 23.5-42.758 53.465-50.883 86.348C50.852 364.242 30 312.512 30 256 30 131.383 131.383 30 256 30s226 101.383 226 226c0 56.523-20.86 108.266-55.281 147.934zm0 0"
                           data-original="#000000" />
                     </svg>
                     <span>Customer</span>
                  </a>
               </li>
               <li>
                  <a href="adminaddcus.php"
                     class="text-black hover:text-amber-600 text-sm flex items-center hover:bg-amber-50 rounded px-4 py-3 transition-all">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                        viewBox="0 0 24 24">
                        <path
                           d="M18 2c2.206 0 4 1.794 4 4v12c0 2.206-1.794 4-4 4H6c-2.206 0-4-1.794-4-4V6c0-2.206 1.794-4 4-4zm0-2H6a6 6 0 0 0-6 6v12a6 6 0 0 0 6 6h12a6 6 0 0 0 6-6V6a6 6 0 0 0-6-6z"
                           data-original="#000000" />
                        <path d="M12 18a1 1 0 0 1-1-1V7a1 1 0 0 1 2 0v10a1 1 0 0 1-1 1z" data-original="#000000" />
                        <path d="M6 12a1 1 0 0 1 1-1h10a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1z" data-original="#000000" />
                     </svg>
                     <span>Product</span>
                  </a>
               </li>
               <li>
                  <a href="admindisplayorder.php"
                     class="text-black hover:text-amber-600 text-sm flex items-center hover:bg-amber-50 rounded px-4 py-3 transition-all">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                        viewBox="0 0 510 510">
                        <g fill-opacity=".9">
                           <path
                              d="M255 0C114.75 0 0 114.75 0 255s114.75 255 255 255 255-114.75 255-255S395.25 0 255 0zm0 459c-112.2 0-204-91.8-204-204S142.8 51 255 51s204 91.8 204 204-91.8 204-204 204z"
                              data-original="#000000" />
                           <path d="M267.75 127.5H229.5v153l132.6 81.6 20.4-33.15-114.75-68.85z" data-original="#000000" />
                        </g>
                     </svg>
                     <span>Orders</span>
                  </a>
               </li>
               <li>
                  <a href="admindisplaypayment.php"
                     class="text-black hover:text-amber-600 text-sm flex items-center hover:bg-amber-50 rounded px-4 py-3 transition-all">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                        viewBox="0 0 512.003 512.003">
                        <path
                           d="M475.244 264.501a15.592 15.592 0 0 1 0-16.998l18.698-28.74c17.032-26.178 5.556-61.348-23.554-72.491l-32.02-12.26a15.596 15.596 0 0 1-9.992-13.754l-1.765-34.24c-1.608-31.184-31.563-52.902-61.667-44.802l-33.109 8.902a15.598 15.598 0 0 1-16.167-5.254l-21.555-26.665c-19.631-24.284-56.625-24.245-76.223 0l-21.556 26.666a15.597 15.597 0 0 1-16.167 5.254l-33.111-8.902c-30.163-8.112-60.063 13.678-61.667 44.802l-1.765 34.24a15.598 15.598 0 0 1-9.992 13.753l-32.018 12.26c-29.171 11.166-40.555 46.365-23.556 72.492l18.699 28.739a15.596 15.596 0 0 1 0 16.998L18.061 293.24c-17.034 26.181-5.554 61.352 23.554 72.492l32.02 12.26a15.598 15.598 0 0 1 9.992 13.754l1.765 34.24c1.608 31.19 31.568 52.899 61.667 44.802l33.109-8.902a15.602 15.602 0 0 1 16.168 5.254l21.555 26.664c19.635 24.291 56.628 24.241 76.223 0l21.555-26.664a15.607 15.607 0 0 1 16.167-5.254l33.111 8.902c30.155 8.115 60.062-13.674 61.667-44.802l1.765-34.24a15.598 15.598 0 0 1 9.992-13.753l32.018-12.26c29.169-11.166 40.554-46.364 23.557-72.493l-18.702-28.739zm-16.806 70.02-32.02 12.26c-18.089 6.926-30.421 23.9-31.418 43.243l-1.765 34.24c-.511 9.921-10.036 16.821-19.612 14.249l-33.111-8.902c-18.705-5.032-38.661 1.455-50.836 16.518l-21.553 26.664c-6.245 7.725-18.009 7.709-24.242 0l-21.553-26.664c-9.438-11.676-23.55-18.198-38.132-18.198-4.229 0-8.499.548-12.706 1.68l-33.111 8.902c-9.596 2.576-19.1-4.348-19.612-14.249l-1.765-34.24c-.997-19.343-13.33-36.318-31.418-43.243l-32.02-12.261c-9.277-3.552-12.896-14.744-7.49-23.053l18.698-28.739c10.563-16.236 10.563-37.218 0-53.452l-18.698-28.739c-5.418-8.326-1.768-19.509 7.491-23.054l32.02-12.26c18.089-6.926 30.421-23.9 31.418-43.243l1.765-34.24c.511-9.921 10.036-16.821 19.612-14.249l33.111 8.902c18.705 5.031 38.66-1.455 50.836-16.518l21.555-26.665c6.245-7.724 18.01-7.708 24.241 0l21.555 26.666c12.178 15.063 32.129 21.549 50.836 16.517l33.111-8.902c9.595-2.577 19.1 4.348 19.612 14.249L395 121.98c.997 19.343 13.33 36.318 31.418 43.243l32.021 12.261c9.276 3.55 12.895 14.744 7.49 23.053l-18.697 28.738c-10.565 16.235-10.565 37.217-.001 53.453l18.698 28.738c5.416 8.328 1.768 19.51-7.491 23.055z"
                           data-original="#000000" />
                        <path
                           d="M339.485 170.845c-6.525-6.525-17.106-6.525-23.632 0L159.887 326.811c-6.525 6.525-6.525 17.106.001 23.632 3.263 3.263 7.54 4.895 11.816 4.895s8.554-1.632 11.816-4.895l155.966-155.967c6.526-6.524 6.526-17.105-.001-23.631zm-151.071-4.895c-18.429 0-33.421 14.993-33.421 33.421 0 18.429 14.994 33.421 33.421 33.421 18.429 0 33.421-14.993 33.421-33.421.001-18.428-14.992-33.421-33.421-33.421zm122.545 122.545c-18.429 0-33.421 14.993-33.421 33.421 0 18.429 14.993 33.421 33.421 33.421s33.421-14.993 33.421-33.421c.001-18.428-14.992-33.421-33.421-33.421z"
                           data-original="#000000" />
                     </svg>
                     <span>Payment</span>
                  </a>
               </li>
            </ul>
         </div>
         <div class="mt-6">
            <h6 class="text-amber-600 text-sm font-bold px-4">Income</h6>
            <ul class="mt-3">
               <li>
                  <a href="javascript:void(0)"
                     class="text-black hover:text-amber-600 text-sm flex items-center hover:bg-amber-50 rounded px-4 py-3 transition-all">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                        viewBox="0 0 511.877 511.877">
                        <path
                           d="M442.706 340.677c-11-68.6-93.8-175.7-120.1-208.2 4.2-3.5 6.9-8.7 6.9-14.6 0-4.2-1.4-8-3.7-11.1 2.3-3.1 3.7-7 3.7-11.1 0-6.6-3.4-12.4-8.5-15.7 8.1-33.1 31.3-59.5 32.4-60.7.8-.9 1.3-1.9 1.6-3 .7-2.4.1-5.1-1.5-7.1-1-1.2-2.3-2.1-3.8-2.5-63.1-17.5-114.9 4.1-129.7 11.4-12.3-7.5-24.5-14-39.9-16.2-5-.7-10.1-1-15.7-1a7.719 7.719 0 0 0-6.9 11.2s.6 1.1 1 1.6c.3.3 26.7 31.7 35.2 66.2-5.1 3.4-8.5 9.2-8.5 15.7 0 4.2 1.4 8 3.7 11.1-2.3 3.1-3.7 7-3.7 11.1 0 5.1 2 9.7 5.3 13.1-25.1 31-110.2 140-121.3 209.8-1.2 5.8-17.4 86.9 23.1 135.8 19.4 23.5 48.5 35.4 86.4 35.4 1.5 0 2.9 0 4.4-.1h145.7c1.5 0 3 .1 4.4.1 37.9 0 66.9-11.9 86.4-35.4 40.4-48.9 24.3-130 23.1-135.8zm-239.2-219.5h-.1c-1.6-.3-2.7-1.7-2.7-3.3 0-1.9 1.5-3.4 3.4-3.4h106.6c1.9 0 3.4 1.5 3.4 3.4s-1.5 3.4-3.4 3.4h-106.7c-.2-.1-.3-.1-.5-.1zm-2.9-25.6c0-1.8 1.5-3.3 3.3-3.4h106.7c1.8 0 3.3 1.5 3.3 3.4s-1.5 3.4-3.4 3.4h-106.5c-1.9 0-3.4-1.5-3.4-3.4zm124.3-78.4c-1.1.7-2.2 1.4-3.2 2.1 0 0-.1.1-.2.1-2.3 1.5-4.5 2.9-6.8 4.3-9.5 5.8-19.2 9.3-29.5 10.9-11.2 1.7-22.9 1.1-33.9-1.5-4.8-1.2-9.4-2.8-14.2-5.1-.2-.1-.3-.2-.5-.2 17.1-6.9 49.6-16.2 88.3-10.6zm-106.8 17.9 1.3.8c9.7 6 18.7 9.9 28.2 12.2 12.9 3.1 26.7 3.7 39.8 1.8 12-1.8 23.1-5.8 34.1-12.2-6.2 11-12.3 24.4-15.9 39.1h-96.9c-5.7-23.4-18.7-45.4-28.1-59 13.7 2.5 24.8 9.4 37.5 17.3zm189.5 431.5c-17 20.6-43.5 30.6-78.5 29.7h-146.3c-35.1.8-61.5-9.1-78.5-29.7-36.3-43.7-20.1-122.1-19.9-122.9 0-.1.1-.3.1-.4 10.9-69.1 104.5-186 121.3-206.6h100.3c16.5 20.1 110.4 137.4 121.3 206.6 0 .1 0 .3.1.4.1.8 16.4 79-19.9 122.9zm-151.7-233.7c-46.1 0-83.6 37.5-83.6 83.6s37.5 83.6 83.6 83.6 83.6-37.5 83.6-83.6c.1-46.1-37.5-83.6-83.6-83.6zm0 151.7c-37.6 0-68.1-30.6-68.1-68.1s30.6-68.1 68.1-68.1 68.1 30.5 68.1 68.1-30.5 68.1-68.1 68.1zm28.1-53.6c0 11.6-9 21.2-20.3 22.1v4c0 4.3-3.5 7.8-7.8 7.8s-7.8-3.5-7.8-7.8v-3.9h-5.5c-4.3 0-7.8-3.5-7.8-7.8s3.5-7.8 7.8-7.8h19.1a6.7 6.7 0 0 0 0-13.4h-11.7c-12.3 0-22.2-10-22.2-22.2 0-11.6 9-21.2 20.3-22.1v-4c0-4.3 3.5-7.8 7.8-7.8s7.8 3.5 7.8 7.8v3.9h5.5c4.3 0 7.8 3.5 7.8 7.8s-3.5 7.8-7.8 7.8h-19.1a6.7 6.7 0 0 0 0 13.4h11.7c12.2-.1 22.2 9.9 22.2 22.2z"
                           data-original="#000000" />
                     </svg>
                     <span>Earnings and taxes</span>
                  </a>
               </li>
            </ul>
         </div>
         <div class="mt-6">
            <h6 class="text-amber-600 text-sm font-bold px-4">Actions</h6>
            <ul class="mt-3">
               <li>
                  <a href="javascript:void(0)" data-modal-target="ad-crud-modal" data-modal-toggle="ad-crud-modal"
                     class="text-black hover:text-amber-600 text-sm flex items-center hover:bg-amber-50 rounded px-4 py-3 transition-all">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                        viewBox="0 0 512 512">
                        <path
                           d="M437.02 74.98C388.668 26.63 324.379 0 256 0S123.332 26.629 74.98 74.98C26.63 123.332 0 187.621 0 256s26.629 132.668 74.98 181.02C123.332 485.37 187.621 512 256 512s132.668-26.629 181.02-74.98C485.37 388.668 512 324.379 512 256s-26.629-132.668-74.98-181.02zM111.105 429.297c8.454-72.735 70.989-128.89 144.895-128.89 38.96 0 75.598 15.179 103.156 42.734 23.281 23.285 37.965 53.687 41.742 86.152C361.641 462.172 311.094 482 256 482s-105.637-19.824-144.895-52.703zM256 269.507c-42.871 0-77.754-34.882-77.754-77.753C178.246 148.879 213.13 114 256 114s77.754 34.879 77.754 77.754c0 42.871-34.883 77.754-77.754 77.754zm170.719 134.427a175.9 175.9 0 0 0-46.352-82.004c-18.437-18.438-40.25-32.27-64.039-40.938 28.598-19.394 47.426-52.16 47.426-89.238C363.754 132.34 315.414 84 256 84s-107.754 48.34-107.754 107.754c0 37.098 18.844 69.875 47.465 89.266-21.887 7.976-42.14 20.308-59.566 36.542-25.235 23.5-42.758 53.465-50.883 86.348C50.852 364.242 30 312.512 30 256 30 131.383 131.383 30 256 30s226 101.383 226 226c0 56.523-20.86 108.266-55.281 147.934zm0 0"
                           data-original="#000000" />
                     </svg>
                     <span>Profile</span>
                  </a>
               </li>
               <li>
                  <a href="../../config/logout.php"
                     class="text-black hover:text-amber-600 text-sm flex items-center hover:bg-amber-50 rounded px-4 py-3 transition-all">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[18px] h-[18px] mr-4"
                        viewBox="0 0 6.35 6.35">
                        <path
                           d="M3.172.53a.265.266 0 0 0-.262.268v2.127a.265.266 0 0 0 .53 0V.798A.265.266 0 0 0 3.172.53zm1.544.532a.265.266 0 0 0-.026 0 .265.266 0 0 0-.147.47c.459.391.749.973.749 1.626 0 1.18-.944 2.131-2.116 2.131A2.12 2.12 0 0 1 1.06 3.16c0-.65.286-1.228.74-1.62a.265.266 0 1 0-.344-.404A2.667 2.667 0 0 0 .53 3.158a2.66 2.66 0 0 0 2.647 2.663 2.657 2.657 0 0 0 2.645-2.663c0-.812-.363-1.542-.936-2.03a.265.266 0 0 0-.17-.066z"
                           data-original="#000000" />
                     </svg>
                     <span>Logout</span>
                  </a>
               </li>
            </ul>
         </div>
      </nav>
      <main>
         <div class="flex flex-col md:flex-row">
            <section>
               <div id="main" class="main-content flex-1 bg-gray-100 md:mt-2 pb-24 md:pb-5 ml-64 mt-16">
                  <div class="grid grid-cols-2 gap-2 ml-20 mt-16 ">
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-4 drop-shadow-2xl">
                            <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Add Products</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Increase your product range by adding new items to your store.Quickly enhance your store's offerings by easily incorporating new products into your inventory.</p>
                            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800" onclick="window.location.href='#'">
                            ADD
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                            </button>
                        </div>
                        
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-4 drop-shadow-2xl">
                            <a href="adminaddcus.php">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Update Products</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Easily modify product information, including name, description, and price, with just a few clicks.You can effortlessly update product information through this platform.</p>
                            <a href="adminaddcus.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                            UPDATE
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                            </a>
                        </div>
                 </div>

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
                                       <label for="product-id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Id</label>
                                       <input type="text" name="product-id" id="product-id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-600 focus:border-amber-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Type product Id">
                                    </div>
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
                                          <option selected="">Select category</option>
                                          <option value="Necklace">Necklace</option>
                                          <option value="Earnings">Earnings</option>
                                          <option value="Ring">Ring</option>
                                          <option value="Bracelet">Bracelet</option>
                                          <option value="Watch">Watch</option>
                                          <option value="Bangle">Bangle</option>
                                          <option value="JewelrySet">Jewelry Set</option>
                                          <option value="OxidizedSet">Oxidized Set</option>
                                          <option value="HairAccessories">Hair Accessories</option>
                                       </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                       <label for="product-material" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Material</label>
                                       <select id="product-material" name="product-material" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500">
                                          <option selected="">Select material</option>
                                          <option value="TV">Gold-Plate</option>
                                          <option value="PC">Silver-Plate</option>
                                          <option value="GA">Acrylic</option>
                                          <option value="PH">Resin</option>
                                          <option value="TV">Polymer Clay</option>
                                          <option value="PC">Glass Beads</option>
                                          <option value="GA">Wood</option>
                                          <option value="PH">Plastic</option>
                                          <option value="PH">Fabric</option>
                                       </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                       <label for="product-color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Color</label>
                                       <select id="product-color" name="product-color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500">
                                          <option selected="">Select color</option>
                                          <option value="TV">Black</option>
                                          <option value="PC">White</option>
                                          <option value="GA">Brown</option>
                                          <option value="PH">Gold</option>
                                          <option value="TV">Silver</option>
                                          <option value="PC">Gray</option>
                                          <option value="GA">Orange</option>
                                          <option value="PH">Yellow</option>
                                          <option value="PH">Red</option>
                                       </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                       <label for="product-customization" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Customization</label>
                                       <select id="product-customization" name="product-customization" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500">
                                          <option selected="">Select Customization Option</option>
                                          <option value="TV">Yes</option>
                                          <option value="PC">No</option>
                                       </select>
                                    </div>
                                    <div class="col-span-2">
                                       <label for="product-description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                                       <textarea id="product-description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-500 dark:focus:border-amber-500" placeholder="Write product description here"></textarea>                    
                                    </div>
                                    <div class="col-span-2">
                                       <div class="mt-4">
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
                                          Edit product
                                       </button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- Edit product end -->

                  <div class="bg-amber-700 mt-4">
                    <div class="p-4 shadow text-2xl text-white">
                        <h1 class="font-bold pl-2">Analytics</h1>
                    </div>
                  </div>
                  
                  <div class="flex flex-wrap">
                     <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                           <div class="flex flex-row items-center">
                              <div class="flex-shrink pr-4">
                                 <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                              </div>
                              <div class="flex-1 text-right md:text-center">
                                 <h2 class="font-bold uppercase text-gray-600">Total Revenue</h2>
                                 <p class="font-bold text-3xl">$3249 <span class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                              </div>
                           </div>
                        </div>
                        <!--/Metric Card-->
                     </div>
                     <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                           <div class="flex flex-row items-center">
                              <div class="flex-shrink pr-4">
                                 <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                              </div>
                              <div class="flex-1 text-right md:text-center">
                                 <h2 class="font-bold uppercase text-gray-600">Total Users</h2>
                                 <p class="font-bold text-3xl">249 <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></p>
                              </div>
                           </div>
                        </div>
                        <!--/Metric Card-->
                     </div>
                     <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                           <div class="flex flex-row items-center">
                              <div class="flex-shrink pr-4">
                                 <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                              </div>
                              <div class="flex-1 text-right md:text-center">
                                 <h2 class="font-bold uppercase text-gray-600">New Users</h2>
                                 <p class="font-bold text-3xl">2 <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></p>
                              </div>
                           </div>
                        </div>
                        <!--/Metric Card-->
                     </div>
                     <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                           <div class="flex flex-row items-center">
                              <div class="flex-shrink pr-4">
                                 <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                              </div>
                              <div class="flex-1 text-right md:text-center">
                                 <h2 class="font-bold uppercase text-gray-600">Server Uptime</h2>
                                 <p class="font-bold text-3xl">152 days</p>
                              </div>
                           </div>
                        </div>
                        <!--/Metric Card-->
                     </div>
                     <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                           <div class="flex flex-row items-center">
                              <div class="flex-shrink pr-4">
                                 <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
                              </div>
                              <div class="flex-1 text-right md:text-center">
                                 <h2 class="font-bold uppercase text-gray-600">To Do List</h2>
                                 <p class="font-bold text-3xl">7 tasks</p>
                              </div>
                           </div>
                        </div>
                        <!--/Metric Card-->
                     </div>
                     <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                        <!--Metric Card-->
                        <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                           <div class="flex flex-row items-center">
                              <div class="flex-shrink pr-4">
                                 <div class="rounded-full p-5 bg-red-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
                              </div>
                              <div class="flex-1 text-right md:text-center">
                                 <h2 class="font-bold uppercase text-gray-600">Issues</h2>
                                 <p class="font-bold text-3xl">3 <span class="text-red-500"><i class="fas fa-caret-up"></i></span></p>
                              </div>
                           </div>
                        </div>
                        <!--/Metric Card-->
                     </div>
                  </div>
                  <div class="flex flex-row flex-wrap flex-grow mt-2">
                     <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                        <!--Graph Card-->
                        <div class="bg-white border-transparent rounded-lg shadow-xl">
                           <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                              <h class="font-bold uppercase text-gray-600">Graph</h>
                           </div>
                           <div class="p-5">
                              <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                              <script>
                                 new Chart(document.getElementById("chartjs-7"), {
                                     "type": "bar",
                                     "data": {
                                         "labels": ["January", "February", "March", "April"],
                                         "datasets": [{
                                             "label": "Page Impressions",
                                             "data": [10, 20, 30, 40],
                                             "borderColor": "rgb(255, 99, 132)",
                                             "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                         }, {
                                             "label": "Adsense Clicks",
                                             "data": [5, 15, 10, 30],
                                             "type": "line",
                                             "fill": false,
                                             "borderColor": "rgb(54, 162, 235)"
                                         }]
                                     },
                                     "options": {
                                         "scales": {
                                             "yAxes": [{
                                                 "ticks": {
                                                     "beginAtZero": true
                                                 }
                                             }]
                                         }
                                     }
                                 });
                              </script>
                           </div>
                        </div>
                        <!--/Graph Card-->
                     </div>
                     <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                        <!--Graph Card-->
                        <div class="bg-white border-transparent rounded-lg shadow-xl">
                           <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                              <h2 class="font-bold uppercase text-gray-600">Graph</h2>
                           </div>
                           <div class="p-5">
                              <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                              <script>
                                 new Chart(document.getElementById("chartjs-0"), {
                                     "type": "line",
                                     "data": {
                                         "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                         "datasets": [{
                                             "label": "Views",
                                             "data": [65, 59, 80, 81, 56, 55, 40],
                                             "fill": false,
                                             "borderColor": "rgb(75, 192, 192)",
                                             "lineTension": 0.1
                                         }]
                                     },
                                     "options": {}
                                 });
                              </script>
                           </div>
                        </div>
                        <!--/Graph Card-->
                     </div>
                     <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                        <!--Graph Card-->
                        <div class="bg-white border-transparent rounded-lg shadow-xl">
                           <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                              <h2 class="font-bold uppercase text-gray-600">Graph</h2>
                           </div>
                           <div class="p-5">
                              <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                              <script>
                                 new Chart(document.getElementById("chartjs-1"), {
                                     "type": "bar",
                                     "data": {
                                         "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                         "datasets": [{
                                             "label": "Likes",
                                             "data": [65, 59, 80, 81, 56, 55, 40],
                                             "fill": false,
                                             "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                             "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                             "borderWidth": 1
                                         }]
                                     },
                                     "options": {
                                         "scales": {
                                             "yAxes": [{
                                                 "ticks": {
                                                     "beginAtZero": true
                                                 }
                                             }]
                                         }
                                     }
                                 });
                              </script>
                           </div>
                        </div>
                        <!--/Graph Card-->
                     </div>
                     <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                        <!--Graph Card-->
                        <div class="bg-white border-transparent rounded-lg shadow-xl">
                           <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                              <h5 class="font-bold uppercase text-gray-600">Graph</h5>
                           </div>
                           <div class="p-5">
                              <canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                              <script>
                                 new Chart(document.getElementById("chartjs-4"), {
                                     "type": "doughnut",
                                     "data": {
                                         "labels": ["P1", "P2", "P3"],
                                         "datasets": [{
                                             "label": "Issues",
                                             "data": [300, 50, 100],
                                             "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                         }]
                                     }
                                 });
                              </script>
                           </div>
                        </div>
                        <!--/Graph Card-->
                     </div>
                     <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                        <!--Table Card-->
                        <div class="bg-white border-transparent rounded-lg shadow-xl">
                           <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                              <h2 class="font-bold uppercase text-gray-600">Graph</h2>
                           </div>
                           <div class="p-5">
                              <table class="w-full p-5 text-gray-700">
                                 <thead>
                                    <tr>
                                       <th class="text-left text-blue-900">Name</th>
                                       <th class="text-left text-blue-900">Side</th>
                                       <th class="text-left text-blue-900">Role</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Obi Wan Kenobi</td>
                                       <td>Light</td>
                                       <td>Jedi</td>
                                    </tr>
                                    <tr>
                                       <td>Greedo</td>
                                       <td>South</td>
                                       <td>Scumbag</td>
                                    </tr>
                                    <tr>
                                       <td>Darth Vader</td>
                                       <td>Dark</td>
                                       <td>Sith</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <p class="py-2"><a href="#">See More issues...</a></p>
                           </div>
                        </div>
                        <!--/table Card-->
                     </div>
                     <div class="w-full md:w-1/2 xl:w-1/2 p-6">
                        <!--Advert Card-->
                        <div class="bg-white border-transparent rounded-lg shadow-xl">
                           <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                              <h2 class="font-bold uppercase text-gray-600">Advert</h2>
                           </div>
                           <div class="p-5 text-center">
                              <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CK7D52JJ&placement=wwwtailwindtoolboxcom" id="_carbonads_js"></script>
                           </div>
                        </div>
                        <!--/Advert Card-->
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </main>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
   </body>
</html>


<!-- products -->
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
    <style>
      /* Ensure filter section remains visible */
      .flex-col {
        visibility: visible;
      }
      </style>
</head>

<body>

  <?php
    include("./layout/header/header.php");
    include("../../config/connect.php");
  ?>


<?php 

  if(!isset($_GET["category"]))
  {
    echo ("<script>location.href='home.php'</script>");
  }
  if(!empty($_GET["category"]))
  {
    $category=$_GET["category"];
  }
  	else{
      echo ("<script>location.href='home.php'</script>");
    }
?>

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

                      <label><input type="checkbox" value="Black" class="color-filter">Black</label>
                      <label><input type="checkbox" value="White" class="color-filter">White</label>
                      <label><input type="checkbox" value="Silver" class="color-filter">Silver</label>
                      <label><input type="checkbox" value="Gold" class="color-filter">Gold</label>
                      <label><input type="checkbox" value="Bronze" class="color-filter">Bronze</label>

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
                <label class="flex items-center font-medium">
                  <input type="checkbox" value="Pearl" class="material-filter">
                  <span class="inline-block cursor-pointer">Pearl</span>
                </label>
                <label class="flex items-center font-medium">
                  <input type="checkbox" value="Silver-plated" class="material-filter">
                  <span class="inline-block cursor-pointer">Silver-plated</span>
                </label>
                <label class="flex items-center font-medium">
                  <input type="checkbox" value="Glass beads" class="material-filter">
                  <span class="inline-block cursor-pointer">Glass beads</span>
                </label>
                <label class="flex items-center font-medium">
                  <input type="checkbox" value="Resin" class="material-filter">
                  <span class="inline-block cursor-pointer">Resin</span>
                </label>
                <label class="flex items-center font-medium">
                  <input type="checkbox" value="Gold-plated" class="material-filter">
                  <span class="inline-block cursor-pointer">Gold-plated</span>
                </label>
                </div>
              </div>

              <!-- Divider -->
              <div class="mb-6 mt-6 h-px w-full bg-amber"></div>
              <!-- Filter Two -->
              <div class="flex flex-col gap-6">
                <div class="flex cursor-pointer items-center justify-between py-4 [border-top:1px_solid_rgba(0,_0,_0,_0)] md:py-0">
                  <p class="font-semibold">Price</p>
                  <a href="#" class="inline-block text-sm text-black" onclick="clearPriceFilter()">
                    <p>Clear</p>
                  </a>
                </div>
                  <div class="relative mb-6">
                    <label for="labels-range-input" class="sr-only">Labels range</label>
                    <input id="priceRangeInput" type="range" value="1000" min="100" max="1500" class="w-full h-2 bg-gray-500 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
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
         $productQuery = "SELECT * FROM `product`,`category` WHERE `category`.`category_name` = 'necklace' AND `product`.`pro_category_id` = `category`.`category_id`";
          $executequery = mysqli_query($con,$productQuery);
          if (mysqli_num_rows($executequery)) {
            while ($roww = mysqli_fetch_assoc($executequery)) {
              $product_id = $roww["pro_id"];
              echo($product_id);
            }
          }
          if(mysqli_num_rows($executequery)>0)
          {
            while ($row_of_product = mysqli_fetch_assoc($executequery)) 
              {
              echo("hello");
              $product_id = $row_of_product["pro_id"];
             echo($product_id);
            ?>
           
              
             
              <div class="product bg-white rounded-2xl p-6 cursor-pointer hover:-translate-y-2 transition-all relative" data-colors="<?php
                                   echo(3);

                      $getcolors="SELECT * FROM `colors` ,`pcolors` WHERE `colors`.`color_id`=`pcolors`.`pcolor_color_id` AND `pcolors`.`pcolor_product_id`='$product_id'";
                        $execute_color = mysqli_query($con,$getcolors);
                        if(mysqli_num_rows($execute_color))
                        {
                          echo(2);
                          while($row_of_color=mysqli_fetch_assoc($execute_color))
                          {
                         
                              echo($row_of_color["color_name"].",");
                              
                          }
                        }
                        echo(1);
                        ?>" 
                        data-materials="<?php 
                          $getmaterial="SELECT * FROM `materials` ,`pmaterialsl` WHERE `materials`.`material_id`=`pmaterialsl`.`pmaterial_material_id` AND `pmaterialsl`.`pmaterial_product_id`='$product_id'";
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
                    <path
                      d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                      data-original="#000000"></path>
                  </svg>
                </div>
                <div class="w-11/12 h-[220px] overflow-hidden mx-auto aspect-w-16 aspect-h-8 md:mb-2 mb-4">
                  <?php
                  $imageQuery = "SELECT image_name 
               FROM image 
               WHERE image_product_id = $product_id 
               LIMIT 1";
               $execute_image = mysqli_query($con,$imageQuery);
               if(mysqli_num_rows($execute_image))
               {
                while($row_of_image=mysqli_fetch_assoc($execute_image))
                {
                            $imageBlob = $row_image["image_name"];
                  ?>
                     <img src="<?php echo($imageBlob); ?>" alt="Product 1" class="h-full w-full object-contain" />
                  <?php
                  
                }
               }

                  ?>
                     
                </div>
                <a href="singleproducts.php?category=<?php echo $category;?>&id=<?php echo $row_of_product["pro_id"]; ?>">
                <div>
                      <h3 class="text-lg font-bold text-gray-800"><?php echo $row_of_product["pro_name"]; ?></h3>
                     
                      <h4 class="text-lg text-gray-700 font-bold mt-4">Rs.<?php echo $row_of_product["pro_price"]; ?></h4>

                </div>
                </a>
              </div>

            <?php

            }
          }
        ?>


        
      </div>
    </div>
  </div>
</section>

<script src="../../js/filter.js">
</script>

<?php
    include("./layout/footer/footer.php");
    ?>
    
</body>
</html>



