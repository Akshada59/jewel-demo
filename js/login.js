

$(document).ready(function () {
    $("#loginButton").click(function (event) {
        
        event.preventDefault();
        if (validateLoginForm()) {
            console.log("inside validate");
            // If the form is valid, you can submit it
            //$("#loginForm").unbind("submit").submit();
            $email = $("#username").val();
            $password = $("#password").val();

            $.ajax({
                type: 'POST',
                url: '../ajax/loginajax.php',
                data: {
                    email:$email,
                    password:$password
                },
                success: function(data) {
                    if(data==1){
                        jSuites.notification({
                            message: 'Successfully Login',
                        });
                        window.location.href = "./home.php";
                    }else{
                        jSuites.notification({
                            error: 1,
                            message: 'Login Failed',
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
        //}
   // });

    function validateLoginForm() {
        // Reset previous error messages
        $(".text-red-500").text("");

        // Flag to check form validity
        let isValid = true;

        // Validate Username
        const username = $("#username").val().trim();
        if (username === "") {
            $("#usernameError").text("Username is required.");
            isValid = false;
        }

        // Validate Password
        const password = $("#password").val().trim();
        if (password === "") {
            $("#passwordError").text("Password is required.");
            isValid = false;
        }

        return isValid;
    }
});