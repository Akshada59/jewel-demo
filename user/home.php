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
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <title>Jewelry Shop</title>
 

  
   

</head>
<body>


    <?php
    include("./layout/header/header.php");
    include("../../config/connect.php");
    ?>


        

<div id="gallery" class="relative w-full my-10  z-0" data-carousel="slide" >
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96 mt-20">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item style="z-index: 1">
            <img src="https://media.istockphoto.com/id/1198714412/photo/bangles-made-of-gold.jpg?s=612x612&w=0&k=20&c=fvlLFQegczkC87aBXXuJli0XszW5O0DG_VBOKVXB2Lg=" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active" style="z-index: 1">
            <img src="https://media.istockphoto.com/id/1276740597/photo/indian-traditional-gold-necklace.jpg?s=612x612&w=0&k=20&c=OYp1k0OVJObYq9hqVK_r6NwYa_W54km4nya1R-ovIUY=" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item style="z-index: 1">
            <img src="https://media.istockphoto.com/id/1126858679/photo/ethnic-jewellery-in-low-light.jpg?s=612x612&w=0&k=20&c=_3mrKI_BxBtN4Sz4qRWfZaIcGi_yCrwlOGRKV5Faq7w=" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item style="z-index: 1">
            <img src="https://images.unsplash.com/photo-1589674781759-c21c37956a44?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8cmluZ3N8ZW58MHwwfDB8fHwy" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item style="z-index: 1">
            <img src="https://images.unsplash.com/photo-1641290748359-1d944fc8359a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZWFyaW5nfGVufDB8MHwwfHx8Mg%3D%3D" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 " alt="">
        </div>
    </div>

    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


<!-- category -->
<div class="container mx-auto" >
        <h1 class="text-5xl italic text-center font-bold text-amber-800 " id="category">Categories</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 m-4">
            <!-- php of blog post card 1 -->
           <?php
                $get_categories="SELECT * FROM `category`";
                $result_get_category=mysqli_query($con,$get_categories);
                if(mysqli_num_rows($result_get_category)){
                    while($row=mysqli_fetch_assoc($result_get_category))
                    {
                        $category_id = $row["category_id"];
                        ?>
                        <div class="max-w-sm bg-cover bg-center bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700"
                style="background-image: url('https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=600');">
                <?php
                    $get_category_img="SELECT * FROM `product`,`image` WHERE `product`.`pro_category_id`='$category_id' AND `product`.`pro_id`=`image`.`image_product_id` LIMIT 1";
                    $result_get_category_img=mysqli_query($con,$get_category_img);
                    if(mysqli_num_rows($result_get_category_img)){
                        while($row_image=mysqli_fetch_assoc($result_get_category_img))
                        {
                            $imageBlob = $row_image["image_name"];
                            
                            ?>
                            <a href="#">
                                <img class="rounded-t-lg h-64 w-full object-cover" src="<?php echo($imageBlob); ?>" alt="" />
                            </a>
                           <?php 
                        }
                    }
                ?>
                
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo($row["category_name"]); ?></h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore Necklaces</p>
                    <a href="products.php?category=<?php echo($row["category_name"]); ?>"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                        Explore
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            <?php
                    }
                }
            ?>

          


        </div>

        <div class="2xl:container 2xl:mx-auto md:py-12 py-9">
            <div class="bg-amber-50 dark:bg-amber-800 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-8 md:gap-12 gap-14 lg:px-20 lg:py-12 py-10 md:px-12 px-4">
                <!-- Delivery grid Card -->
                <div class="">
                <svg class="w-[35px] h-[35px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.8" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z"/>
                </svg>
                    <h3 class="text-xl leading-5 dark:text-white font-semibold text-amber-800 lg:mt-10 mt-8">Best Product</h3>
                    <p class="text-base leading-6 font-normal dark:text-amber-300 text-amber-600 mt-4 lg:w-full md:w-9/12 w-full">Discover our bestseller, loved for its quality and style!</p>
                </div>
    
                <!-- customer Grid Card -->
    
                <div class="">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg2.svg" alt="Customer Care">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg2dark.svg" alt="Customer Care">
                    <h3 class="text-xl leading-5 dark:text-white font-semibold text-amber-800 lg:mt-10 mt-8">Customer Care</h3>
                    <p class="text-base leading-6 font-normal dark:text-amber-300 text-amber-600 mt-4 lg:w-full md:w-9/12 w-full">Our customer care is available 24/7 at <span class="font-semibold cursor-pointer">+516-486-5135</span> and <span class="font-semibold cursor-pointer">ethnicjewel@gmail.com</span></p>
                </div>
    
                <!-- Recycle Grid Card -->
    
                <div class="">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg3.svg" alt="Recycle">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg3dark.svg" alt="Recycle">
                    <h3 class="text-xl leading-5 dark:text-white font-semibold text-amber-800 lg:mt-10 mt-8">Recycle</h3>
                    <p class="text-base leading-6 font-normal dark:text-amber-300 text-amber-600 mt-4 lg:w-full md:w-9/12 w-full">All out products are 100 percent recycable</p>
                </div>
    
                <!-- Secure Payment Card -->
    
                <div class="">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg4.svg" alt="Secure Payment">
                    <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/highlight-1-svg4dark.svg" alt="Secure Payment">
                    <h3 class="text-xl leading-5 dark:text-white font-semibold text-amber-800 lg:mt-10 mt-8">Secure Payment</h3>
                    <p class="text-base leading-6 font-normal dark:text-amber-300 text-amber-600 mt-4 lg:w-full md:w-9/12 w-full">Transaction process has end to end encryption</p>
                </div>
            </div>
    </div>

        
</div>




<!-- chatbot -->

<div class="fixed bottom-0 right-0 mb-4 mr-4 ">
        <button id="open-chat" class="border-2 border-black-600 bg-amber-700 text-white  rounded-lg hover:bg-amber-600 transition duration-300 flex items-center">
        
        <svg fill="#050505" width="60px" height="50px" viewBox="-2.4 -2.4 28.80 28.80" id="conversation-alt" data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line" transform="matrix(1, 0, 0, 1, 0, 0)" stroke="#050505"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.44"><path id="secondary" d="M17,4v8a1,1,0,0,1-1,1H7L3,17V4A1,1,0,0,1,4,3H16A1,1,0,0,1,17,4Z" style="fill: #c9b21d; stroke-width:1.08;"></path><path id="primary" d="M8,17h9l4,4V7a1,1,0,0,0-1-1H17" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.08;"></path><path id="primary-2" data-name="primary" d="M17,4v8a1,1,0,0,1-1,1H7L3,17V4A1,1,0,0,1,4,3H16A1,1,0,0,1,17,4Z" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.08;"></path></g><g id="SVGRepo_iconCarrier"><path id="secondary" d="M17,4v8a1,1,0,0,1-1,1H7L3,17V4A1,1,0,0,1,4,3H16A1,1,0,0,1,17,4Z" style="fill: #c9b21d; stroke-width:1.08;"></path><path id="primary" d="M8,17h9l4,4V7a1,1,0,0,0-1-1H17" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.08;"></path><path id="primary-2" data-name="primary" d="M17,4v8a1,1,0,0,1-1,1H7L3,17V4A1,1,0,0,1,4,3H16A1,1,0,0,1,17,4Z" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.08;"></path></g></svg>        
        
    </button>
        
    </div>
    <div id="chat-container" class="hidden fixed bottom-16 right-4 w-96">
        <div class="bg-white shadow-md rounded-lg max-w-lg w-full">
            <div class="p-4 border-b bg-amber-800 text-white rounded-t-lg flex justify-between items-center">
                <p class="text-lg font-semibold">Chat with us...</p>
                <button id="close-chat" class="text-gray-300 hover:text-gray-400 focus:outline-none focus:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div id="chatbox" class="p-4 h-80 overflow-y-auto">
              <!-- Chat messages will be displayed here -->
              <!-- <div class="mb-2 text-right">
                <p class="bg-amber-800 text-white rounded-lg py-2 px-4 inline-block">hello</p>
              </div>
              <div class="mb-2">
                <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">This is a response from the chatbot.</p>
              </div>-->
            </div>
            <div class="p-4 border-t flex">
                <input id="user-input" type="text" placeholder="Type a message" class="w-full px-3 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-amber-600">
                <button id="send-button" class="bg-amber-700 text-white px-4 py-2 rounded-r-md hover:bg-amber-600 transition duration-300">Send</button>
            </div>
        </div>
    </div>



    
    


    <script>
        const chatbox = document.getElementById("chatbox");
const chatContainer = document.getElementById("chat-container");
const userInput = document.getElementById("user-input");
const sendButton = document.getElementById("send-button");
const openChatButton = document.getElementById("open-chat");
const closeChatButton = document.getElementById("close-chat");

let isChatboxOpen = true; // Set the initial state to open

// Function to toggle the chatbox visibility
function toggleChatbox() {
    chatContainer.classList.toggle("hidden");
    isChatboxOpen = !isChatboxOpen; // Toggle the state
}

// Add an event listener to the open chat button
openChatButton.addEventListener("click", toggleChatbox);

// Add an event listener to the close chat button
closeChatButton.addEventListener("click", toggleChatbox);

// Add an event listener to the send button
sendButton.addEventListener("click", function () {
    const userMessage = userInput.value;
    if (userMessage.trim() !== "") {
        console.log(userMessage);
        addUserMessage(userMessage);
        // respondToUser(userMessage);
        userInput.value = "";
    }
});

userInput.addEventListener("keyup", function (event) {
    if (event.key === "Enter") {
        const userMessage = userInput.value;
        addUserMessage(userMessage);
        // respondToUser(userMessage);
        userInput.value = "";
    }
});

function addUserMessage(message) {
    const messageElement = document.createElement("div");
    messageElement.classList.add("mb-2", "text-right");
    messageElement.innerHTML = `<p class="bg-amber-800 text-white rounded-lg py-2 px-4 inline-block">${message}</p>`;
    chatbox.appendChild(messageElement);
    chatbox.scrollTop = chatbox.scrollHeight;
    $.ajax({
                type: 'POST',
                url: '../ajax/botajax.php',
                data:'value='+message,
                success: function(data) {
                    console.log(data);
                    addBotMessage(data);
                },
                error: function() {
                    console.log(response.status);
                },
            })
}

function addBotMessage(message) {
    const messageElement = document.createElement("div");
    messageElement.classList.add("mb-2");
    messageElement.innerHTML = `<p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block">${message}</p>`;
    chatbox.appendChild(messageElement);
    chatbox.scrollTop = chatbox.scrollHeight;
}



        </script>
  
    <?php
    include("./layout/footer/footer.php");
    ?>

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</body>
</html>