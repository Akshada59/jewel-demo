$(document).ready(function() {
    $('#reviewForm').submit(function(e) {
        e.preventDefault(); // Prevent form submission

        $email = $('#user_email').val();
        console.log($email);

        $id = $('#pro_id').val();
        console.log($id);

        $comment = $('#comment').val();
        console.log($comment);

        // Check if textarea is empty
        if ($('#comment').val().trim() === '') {
            $('#commentError').removeClass('hidden');
        } else {
            $('#commentError').addClass('hidden');
             // Placeholder for actual form submission

             $.ajax({
                type: 'POST',
                url: '../ajax/singlereviewajax.php',
                data: {
                    review_text:$comment,
                    pro_id:$id,
                    cus_id:$email
                },
                success: function(data) {
                    if(data==1){
                        jSuites.notification({
                            message: 'Submitted',
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
        }
    });
});