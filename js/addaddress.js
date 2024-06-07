$email = $('#user_email').val();
console.log($email);

$(document).ready(function() {
    // Function to limit the input length of a field
    function limitInputLength(input, maxLength) {
        input.on('input', function() {
            if (input.val().length > maxLength) {
                input.val(input.val().substring(0, maxLength));
            }
        });
    }

    // Call the function for each input field
    limitInputLength($('#Room'), 5);
    limitInputLength($('#Building'), 5);
    limitInputLength($('#Landmark'), 20);
    limitInputLength($('#Street'), 20);
    limitInputLength($('#City'), 20);
    limitInputLength($('#pincode'), 6);

    $('#submit').click(function() {
        var type = $('#type').val();
        var room = $('#Room').val();
        var building = $('#Building').val();
        var landmark = $('#Landmark').val();
        var street = $('#Street').val();
        var city = $('#City').val();
        var pincode = $('#pincode').val();
        var isValid = true;

        // Clear previous error messages
        $('.error-msg').remove();
        console.log(type);
        // Validation
        if (type === 'Select Type' || type === null) {
            $('#type').after('<div class="error-msg  text-red-500">Please select a type.</div>');
            isValid = false;
        }

        if (room.length > 5 || room.length===0 ) {
            $('#Room').after('<div class="error-msg text-red-500">Room No must be 5 characters or less.</div>');
            isValid = false;
        }

        if (building.length > 5 || building===null || building==="") {
            $('#Building').after('<div class="error-msg text-red-500">Building No must be 5 characters or less.</div>');
            isValid = false;
        }

        if (landmark.length > 20 || landmark===null || landmark==="") {
            $('#Landmark').after('<div class="error-msg text-red-500">Landmark must be 20 characters or less.</div>');
            isValid = false;
        }

        if (street.length > 20 || street===null || street==="") {
            $('#Street').after('<div class="error-msg text-red-500">Street must be 20 characters or less.</div>');
            isValid = false;
        }

        if (city.length > 20 || city===null || city==="") {
            $('#City').after('<div class="error-msg text-red-500">City must be 20 characters or less.</div>');
            isValid = false;
        }

        if (pincode.length != 6 || pincode===null || pincode==="") {
            $('#pincode').after('<div class="error-msg text-red-500">Pincode must be 6 digits.</div>');
            isValid = false;
        }



        // If all fields pass validation, submit the form
        if (isValid) {
            $.ajax({
                type: 'POST',
                url: '../ajax/addaddressajax.php',
                data: {
                    type:type,
                    room:room,
                    building:building,
                    landmark:landmark,
                    street:street,
                    city:city,
                    pincode:pincode,
                    email:$email
                },
                success: function(data) {
                    if(data==1){
                        jSuites.notification({
                            message: 'Successfull',
                        });
                        window.location.reload();
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

            $('#myForm').submit();
        }
    });
});
   