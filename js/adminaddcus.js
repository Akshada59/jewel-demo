$id = $('#product_id').val();
console.log($id);

$(document).ready(function() {
    // Function to validate the form
    function validateForm() {
        let isValid = true;
        // Reset error messages
        $('.error-msg').remove();

        // Validate Product Name
        if ($('#product-name').val().trim() === '') {
            $('#product-name').after('<p class="error-msg text-red-500">Product Name is required</p>');
            isValid = false;
        }

        // Validate Product Price
        if ($('#product-price').val().trim() === '') {
            $('#product-price').after('<p class="error-msg text-red-500">Product Price is required</p>');
            isValid = false;
        }

        // Validate Product Category
        if ($('#product-category').val() === '' || $('#product-category').val() === 'Select category') {
            $('#product-category').after('<p class="error-msg text-red-500">Please select a Product Category</p>');
            isValid = false;
        }

        // Validate material
        var selectedMaterials = $('#select2').val();
        if (selectedMaterials == null || selectedMaterials.length === 0) {
            $('#select2').after('<p class="error-msg text-red-500">Please select at least one option in Material</p>');
            isValid = false;
        }

        // Validate color
        var selectedColors = $('#select3').val();
        if (selectedColors == null || selectedColors.length === 0) {
            $('#select3').after('<p class="error-msg text-red-500">Please select at least one option in color</p>');
            isValid = false;
        }

        // Validate Product Description
            if ($('#product-description').val().trim() === '') {
                $('#product-description').after('<p class="error-msg text-red-500">Product Description is required</p>');
                isValid = false;
            }

        // Validate Images
            var images = $('#images')[0].files;
            if (images.length === 0) {
                $('#selectedImages').after('<p class="error-msg text-red-500">Please select at least one Image</p>');
                isValid = false;
            }

        return isValid;
    }

    // Submit event handler for the form
    $('#productForm').submit(function(event) {
        if (!validateForm()) {
            event.preventDefault(); // Prevent form submission if validation fails
        } else {
            event.preventDefault(); // Prevent form submission if validation fails

            var product_name = $('#product-name').val().trim();
            var product_price = $('#product-price').val().trim();
            var product_category = $('#product-category').val();
            var product_material = JSON.stringify($('#select2').val()); // Convert to JSON string
            var product_color = JSON.stringify($('#select3').val()); // Convert to JSON string
            var product_description = $('#product-description').val().trim();

            // Get the files from the file input
            var images = $('#images')[0].files;

            // Create a FormData object to send files via AJAX
            var formData = new FormData();
            formData.append('product_name', product_name);
            formData.append('product_price', product_price);
            formData.append('product_category', product_category);
            formData.append('product_material', product_material);
            formData.append('product_color', product_color);
            formData.append('product_description', product_description);

            // Append each file to the FormData object
            for (var i = 0; i < images.length; i++) {
                formData.append('image[]', images[i]);
            }

            // Send the AJAX request with FormData
            $.ajax({
                type: 'POST',
                url: '../ajax/adminaddcusajax.php',
                data: formData,
                processData: false, // Prevent jQuery from automatically processing the FormData object
                contentType: false, // Prevent jQuery from automatically setting the content type

                success: function(data) {
                    if (data == 1) {
                        jSuites.notification({
                            message: 'Successfully Added a Product',
                        });
                        // Delay reload by 2 seconds
                        setTimeout(function(){
                            window.location.reload();
                         }, 1000);
                    } else {
                        jSuites.notification({
                            error: 1,
                            message: 'Failed to Add a Product',
                        });
                    }

                    console.log(data);
                    console.log(product_material);
                    console.log(product_color);
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.error('Error:', textStatus, errorThrown);
                },
            });
        }
    });



    function validateForm() {
        // Validation logic here
        return true;
    }


});







