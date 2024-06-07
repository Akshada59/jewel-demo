$email = $('#user_email').val();
console.log($email);

function addtocart(pro_id, ) {
    console.log(pro_id);  // 16
    console.log();      // "some"


    var a = [];

    // Parse the serialized data back into an array of objects
    a = JSON.parse(localStorage.getItem('cart')) || [];

    // Check if an item with the same pro_id, , and user_email is already in the array
    var itemExists = a.some(item => item.pro_id === pro_id &&  item.user_email === $email);

    if (!itemExists) {
        // If not present, push the new data onto the array
        a.push({ pro_id: pro_id, user_email: $email,pieces:1  });

        // Re-serialize the array back into a string and store it in localStorage
        localStorage.setItem('cart', JSON.stringify(a));
        getcartbadge();
    } else {
        console.log("Item is already in the cart.");
    }
}

function getcartbadge() {
    var cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    // Filter items based on user email
    var userCartItems = cartItems.filter(item => item.user_email === $email);
    console.log(cartItems.length);
    // Update the cart badge with the count of user's items
    $("#cartnum").text(userCartItems.length);
}

getcartbadge();

function getcartdetails() {
    var cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    // Filter items based on user email
    var userCartItems = cartItems.filter(item => item.user_email === $email);
  const dataOfcart = {
    cart:userCartItems,
  }
  $.ajax({
        url: "../Ajax/buycartajax.php", // Replace with the actual URL of your server-side script
        type: "POST",
        data: {
          data:JSON.stringify(dataOfcart),
          // Add more data as needed
        },
        success: function (response) {
          // Handle the response from the server
          $('#cart_container').html("");
          $('#cart_container').html(response);
          cartprice() //calling cart proce function
          if (response == 1) {

          } else {

          }
        },
        error: function (error) {
          // Handle errors
          console.error(error);
        },
      });
}

function addpeice(id, event) {
  var a = JSON.parse(localStorage.getItem('cart')) || [];
  var updated = false;

  // Iterate over the items in the array
  for (var i = 0; i < a.length; i++) {
      // If the item's pro_id matches the id passed to the function
      if (a[i].pro_id === id) {
          // Update the number of pieces for that item
          a[i].pieces = parseInt(event.target.value);
          updated = true;
          break;
      }
  }

  // If the item is not found in the cart, you can add it with default pieces value
  if (!updated) {
      a.push({ pro_id: id, user_email: $email, pieces: parseInt(event.target.value) });
      
  }

  // Store the updated cart back into localStorage
  localStorage.setItem('cart', JSON.stringify(a));
  getcartdetails();
  getcartbadge();
}

// Example of calling addpeice function
// addpeice('product_id_here', { target: { value: 'new_pieces_value_here' } });



function cartprice() {

    var values = $('.item_price').map(function() {
        return parseFloat($(this).text()) || 0; // Get the numeric content of each span, handle non-numeric values
    }).get();
    console.log(values);
    // Calculate the sum of values
    var sum = values.reduce(function(acc, val) {
        console.log("acc,",acc);
        return acc + val;
    }, 0);
    $('#cart_price').text(sum);
    console.log('Sum:', sum);
    GetPayProcess();
}

function deletefromcart(pro_id) {
    var a = [];

    // Parse the serialized data back into an array of objects
    a = JSON.parse(localStorage.getItem('cart')) || [];

    // Find the index of the item with matching pro_id, type, and user_email
    var index = a.findIndex(item => item.pro_id === pro_id && item.user_email === $email);

    if (index !== -1) {
        // If item found, remove it from the array
        a.splice(index, 1);

        // Re-serialize the array back into a string and store it in localStorage
        localStorage.setItem('cart', JSON.stringify(a));
        getcartbadge();
        getcartdetails()
    } else {
        console.log("Item not found in the cart.");
    }
}

function GetPayProcess() {
  var add_id;
    var priceText = $('#cart_price').text(); // Get the text content of the element
    var priceInteger = parseInt(priceText); // Convert the text to an integer
    console.log(priceText); 
    var cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    // Filter items based on user email
    var userCartItems = cartItems.filter(item => item.user_email === $email);
  const dataOfcart = {
    cart:userCartItems,
  }
      var options = {
        "key": "rzp_test_2CuQAO1cT1r9LF", // Enter the Key ID generated from the Dashboard
        "amount": priceInteger*100,
        "currency": "INR",
        "description": "Acme Corp",
        "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
        "prefill":
        {
          "email": "ruchi.k@yahoo.com",
          "contact": +919900990090,
        },
        "handler": function (response) {
          console.log(response);
            $.ajax({
            type:'POST',
            url:'../Ajax/paymentajax.php',
            data:{
              address:add_id,
              pay_id: response.razorpay_payment_id,
              pay_amount: priceInteger,
              cust_id: $email,
              data:JSON.stringify(dataOfcart),

            },
            success:function(result){
              if (result == 1) {
                setTimeout(function(){
                  window.location.reload();
               }, 1000);
                var cartItems = JSON.parse(localStorage.getItem('cart')) || [];
// Delete user's cart items from the original array
cartItems = cartItems.filter(item => item.user_email !== $email);
// Update localStorage with the filtered array
localStorage.setItem('cart', JSON.stringify(cartItems));

// Now, userCartItems contains cart items of the user with email $email
// cartItems contains the updated cart items array with user's items removed


              }else{

              }
                console.log(result);
        
                }
        })
        },
        "modal": {
          "ondismiss": function () {
            if (confirm("Are you sure, you want to close the form?")) {
              txt = "You pressed OK!";
              console.log("Checkout form closed by the user");
            } else {
              txt = "You pressed Cancel!";
              console.log("Complete the Payment")
            }
          }
        }
      };
      var rzp1 = new Razorpay(options);
      document.getElementById('rzp-button1').onclick = function (e) {
         add_id = $('#add_id').val();

        rzp1.open();
        e.preventDefault();
      }
}