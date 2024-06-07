$(document).ready(function () 
{
    $("form").submit(function (event) {
        event.preventDefault();
        if (validateForm()) {
            // $("form").unbind("submit").submit();
            $firstName=$("#first-name").val().trim();
            $lastName = $("#last-name").val().trim();
            $email = $("#email").val().trim();
            $phoneNumber = $("#phone-number").val().trim();
            $password = $("#password").val().trim();

            $.ajax({
                type: 'POST',
                url: '../ajax/registerajax.php',
                data: {
                    firstName:$firstName,
                    lastName:$lastName,
                    email:$email,
                    phoneNumber:$phoneNumber,
                    password:$password
                },
                success: function(data) {
                    if(data==1){
                        jSuites.notification({
                            message: 'Successfully Registered',
                        });
                        window.location.href = "./login.php";
                    }else{
                        jSuites.notification({
                            error: 1,
                            message: 'Registration Failed',
                        })
                    }
                    
                    console.log(data);
                },
                error: function() {
                    console.log(response.status);
                },
            })
        }
    });

    // function validateForm() {
    //     $(".error-message").remove();
    //     let isValid = true;

    //     // Validate First Name
    //     const firstName = $("#first-name").val().trim();
    //     if (firstName === "") {
    //         $("#first-name").after('<div class="error-message text-red-500">First Name is required.</div>');
    //         isValid = false;
    //     }

    //     // Validate Last Name
    //     const lastName = $("#last-name").val().trim();
    //     if (lastName === "") {
    //         $("#last-name").after('<div class="error-message text-red-500">Last Name is required.</div>');
    //         isValid = false;
    //     }

    //     // Validate Email
    //     const email = $("#email").val().trim();
    //     const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     if (email === "" || !emailRegex.test(email)) {
    //         $("#email").after('<div class="error-message text-red-500">Enter a valid Email address.</div>');
    //         isValid = false;
    //     }

    //     // Validate Phone Number
    //     const phoneNumber = $("#phone-number").val().trim();
    //     const phoneRegex = /^\d{10}$/;
    //     if (phoneNumber === "" || !phoneRegex.test(phoneNumber)) {
    //         $("#phone-number").after('<div class="error-message text-red-500">Enter a valid Phone Number (10 digits).</div>');
    //         isValid = false;
    //     }

    //     // Validate Username
    //     // const username = $("#username").val().trim();
    //     // if (username === "") {
    //     //     $("#username").after('<div class="error-message text-red-500">Username is required.</div>');
    //     //     isValid = false;
    //     // }

    //     // Validate Password
    //     const password = $("#password").val().trim();
    //     if (password === "") {
    //         $("#password").after('<div class="error-message text-red-500">Password is required.</div>');
    //         isValid = false;
    //     }

    //     // Validate Confirm Password
    //     const confirmPassword = $("#confirm-password").val().trim();
    //     if (confirmPassword === "" || confirmPassword !== password) {
    //         $("#confirm-password").after('<div class="error-message text-red-500">Passwords do not match.</div>');
    //         isValid = false;
    //     }

    //     return isValid;
    // }

    
    function validateForm() {
        $(".error-message").remove();
        let isValid = true;

        // Validate First Name
        const firstName = $("#first-name").val().trim();
        if (firstName === "") {
            $("#first-name-error").html('First Name is required.');
            isValid = false;
        } else if (firstName.length > 20) {
            $("#first-name-error").html('First Name should not exceed 20 characters.');
            isValid = false;
        }

        // Validate Last Name
        const lastName = $("#last-name").val().trim();
        if (lastName === "") {
            $("#last-name-error").html('Last Name is required.');
            isValid = false;
        } else if (lastName.length > 20) {
            $("#last-name-error").html('Last Name should not exceed 20 characters.');
            isValid = false;
        }

        // Validate Email
        const email = $("#email").val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "" || !emailRegex.test(email)) {
            $("#email-error").html('Enter a valid Email address.');
            isValid = false;
        }

        // Validate Phone Number
        const phoneNumber = $("#phone-number").val().trim();
        const phoneRegex = /^\d{10}$/;
        if (phoneNumber === "" || !phoneRegex.test(phoneNumber)) {
            $("#phone-number-error").html('Enter a valid Phone Number (10 digits).');
            isValid = false;
        }

        // Validate Username
        //const username = $("#username").val().trim();
        // Add additional validation logic for username if needed

        // Validate Password
        const password = $("#password").val().trim();
        if (password === "") {
            $("#password-error").html('Password is required.');
            isValid = false;
        } else if (password.length > 15) {
            $("#password-error").html('Password should not exceed 15 characters.');
            isValid = false;
        }

        // Validate Confirm Password
        const confirmPassword = $("#confirm-password").val().trim();
        if (confirmPassword === "" || confirmPassword !== password) {
            $("#confirm-password-error").html('Passwords do not match.');
            isValid = false;
        }

        if (isValid) {
            // Perform additional form submission or processing logic
            return true;
        }
    }

    // Add event listeners for real-time character limit enforcement
    $("#first-name").on('input', function () {
        limitInput(this, 20);
    });

    $("#last-name").on('input', function () {
        limitInput(this, 20);
    });

    $("#phone-number").on('input', function () {
        limitInput(this, 10);
    });

    $("#password").on('input', function () {
        limitInput(this, 15);
    });

    $("#confirm-password").on('input', function () {
        limitInput(this, 15);
    });

    function limitInput(input, maxLength) {
        if (input.value.length > maxLength) {
            input.value = input.value.slice(0, maxLength);
        }
    }
});