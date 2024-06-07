$("#page1").show();
$("#page2").hide();
$("#page3").hide();
$('#invalidotp').hide();

function OTPInput() {
    const inputs = document.querySelectorAll('#otp > *[id]');
    console.log("yes");
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener('keydown', function (event) {
            if (event.key === "Backspace") {
                inputs[i].value = '';
                if (i !== 0) inputs[i - 1].focus();
            } else {
                if (i === inputs.length - 1 && inputs[i].value !== '') {
                    return true;
                } else if (event.keyCode > 47 && event.keyCode < 58) {
                    inputs[i].value = event.key;
                    $value = inputs[i].value;
                    if (i !== inputs.length - 1) inputs[i + 1].focus();
                    event.preventDefault();
                }

            }
        });
    }
}
OTPInput();

var val = 0;

function generateOtp() {
    val = Math.floor(1000 + Math.random() * 9000);
    console.log(val);
}

$("#reset").click(function () {
    var email = $("#email").val();
    $.ajax({
        url: "../ajax/forpassajax.php", // Replace with the actual URL of your server-side script
        type: "POST",
        data: {
            email: email,
            // Add more data as needed
        },
        success: function (response) {
            // Handle the response from the server
            console.log(response);
            if (response == 1) {
                jSuites.notification({
                    message: 'OTP sent on your email',
                });
                generateOtp();
                sendemail(email, val);
                $("#page1").hide();
                $("#page2").show();
                $("#displayemail").text(email);

            } else {
                jSuites.notification({
                    message: "user doesn't exist",
                });
            }
        },
        error: function (error) {
            // Handle errors
            console.error(error);
        },
    });


});
$('#verifyOtp').on('click', function () {

    const inputs = document.querySelectorAll('#otp > *[id]');
    var count = 0;
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value !== "") {
            count = count + 1;

        } else {
            alert("Please fill all the otp fields");
            break;
        }
    }
    if (count === inputs.length) {
        $otp_number = Number($('#first').val() + $('#second').val() + $('#third').val() + $('#fourth').val());
        console.log($otp_number);
        if ($otp_number === val) {
            $('#invalidotp').hide();
            $("#page2").hide();
            $("#page3").show();
        } else {
            $("#first, #second, #third, #fourth").effect("shake", {
                direction: 'left',
                times: 4,
                distance: 10
            }, 1000).css("border-color", "red");
            $('#invalidotp').show();


        }

    }

})
$("#changepass").click(function (e) {
    var password = $("#password").val();
    var confirmPassword = $("#confirm-password").val();
    var errorElement = $("#password-error");
    var email = $("#email").val();
    e.preventDefault();

    if (password.length < 8) {
        errorElement.text("Password must be at least 8 characters long");
        e.preventDefault(); // Prevent form submission
    } else if (password !== confirmPassword) {
        errorElement.text("Passwords do not match");
        e.preventDefault(); // Prevent form submission
    } else {
        errorElement.text("");
        $.ajax({
            url: "../ajax/forpassajax.php", // Replace with the actual URL of your server-side script
            type: "POST",
            data: {
                re_email: email,
                password: password
                // Add more data as needed
            },
            success: function (response) {
                // Handle the response from the server
                console.log(response);
                if (response == 1) {
                    jSuites.notification({
                        message: 'Password changed successfully',
                    });
                    $("#password").val("");
                    $("#confirm-password").val("");
                    window.location.href = "login.php"

                } else {
                    jSuites.notification({
                        message: 'Password failed to change',
                    });
                }
            },
            error: function (error) {
                // Handle errors
                console.error(error);
            },
        });
    }
});

function sendemail(email, val) {
    console.log(email);
    console.log(val);
    Email.send({
        SecureToken: "b1fa595e-2f94-45f2-9882-82153f5d2e38",
        To: email,
        From: "vanduu0211@gmail.com",   //elastic:Vanduu0211
        Subject: "Forget password",
        Body: "Your OTP is " + val + " "
    }).then(
        message => alert(message)
    );
}
