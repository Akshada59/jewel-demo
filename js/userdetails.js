$email = $('#user_email').val();
console.log($email);

$(document).ready(function() {
    $("#confirm").click(function() {
        $(".error-message").remove(); // Remove any existing error messages

        // Validate First Name
        var firstName = $("#first_name").val().trim();
        if (firstName == "") {
            $("#first_name").after("<div class='error-message text-red-500'>Please enter your first name.</div>");
            return;
        }

        // Validate Last Name
        var lastName = $("#last_name").val().trim();
        if (lastName == "") {
            $("#last_name").after("<div class='error-message text-red-500'>Please enter your last name.</div>");
            return;
        }

        // Validate Phone Number
        var phone = $("#phone").val().trim();
        if (phone == "" || !/^\d{10}$/.test(phone)) {
            $("#phone").after("<div class='error-message text-red-500'>Please enter a valid 10-digit phone number.</div>");
            return;
        }


        $.ajax({
            type: 'POST',
            url: '../ajax/userdetailsajax.php',
            data: {
                firstName:firstName,
                lastName:lastName,
                phone:phone,
                email:$email
            },
            success: function(data) {
                if(data==1){
                    jSuites.notification({
                        message: 'Successfully Updated',
                    });
                    // Delay reload by 2 seconds
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                    
                }else{
                    jSuites.notification({
                        error: 1,
                        message: 'Failed',
                    })
                }
                


                console.log(data);
            },
            error: function() {
                console.log(response.status);
            },
        })

        // If all validations pass, submit the form
        // Uncomment the following line to submit the form
        $("#your-form-id").submit();
    });
});