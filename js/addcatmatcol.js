$(document).ready(function() {
   // Add Materials Modal Validation
   $('#add-materials-modal form').submit(function(e) {
        e.preventDefault();
        var newMaterial = $('#new-material').val().trim();
        if (newMaterial === '') {
            $('#material-error-msg').text('Please enter a new material');
            return;
        }
        // Reset error message
        $('#material-error-msg').text('');
        // Add your AJAX request here to submit the form data

         // Adding Materials
         $.ajax({
            type: 'POST',
            url: '../ajax/addmaterialajax.php',
            data: {
                newMaterial:newMaterial
            },
            success: function(data) {
                if(data==1){
                    jSuites.notification({
                        message: 'Material added successfully',
                    });
                    window.location.href = "./adminpart.php";
                }else{
                    jSuites.notification({
                        error: 1,
                        message: 'Failed to add Material',
                    })
                }
                
                console.log(data);
            },
            error: function() {
                console.log(response.status);
            },
        })
    });

   // Add Colors Modal Validation
        $('#add-colors-modal form').submit(function(e) {
            e.preventDefault();
            var newColor = $('#new-color').val().trim();
            if (newColor === '') {
                $('#color-error-msg').text('Please enter a new color');
                return;
            }
            // Reset error message
            $('#color-error-msg').text('');
            // Add your AJAX request here to submit the form data
            
            // Adding Colors
            $.ajax({
                type: 'POST',
                url: '../ajax/addcolorajax.php',
                data: {
                    newColor:newColor
                },
                success: function(data) {
                    if(data==1){
                        jSuites.notification({
                            message: 'Color added successfully',
                        });
                        window.location.href = "./adminpart.php";
                    }else{
                        jSuites.notification({
                            error: 1,
                            message: 'Failed to add color',
                        })
                    }
                    
                    console.log(data);
                },
                error: function() {
                    console.log(response.status);
                },
            })

        });

        // Add Categories Modal Validation
        $('#add-category-modal form').submit(function(e) {
            e.preventDefault();
            var newCategory = $('#new-category').val().trim();
            if (newCategory === '') {
                $('#category-error-msg').text('Please enter a new category');
                return;
            }
            // Reset error message
            $('#category-error-msg').text('');
            // Add your AJAX request here to submit the form data

             // Adding Categories
             $.ajax({
                type: 'POST',
                url: '../ajax/addcategoryajax.php',
                data: {
                    newCategory:newCategory
                },
                success: function(data) {
                    if(data==1){
                        jSuites.notification({
                            message: 'Category added successfully',
                        });
                        window.location.href = "./adminpart.php";
                    }else{
                        jSuites.notification({
                            error: 1,
                            message: 'Failed to add category',
                        })
                    }
                    
                    console.log(data);
                },
                error: function() {
                    console.log(response.status);
                },
            })

        });
});
