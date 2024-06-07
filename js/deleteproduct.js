$(document).ready(function() {
    // Delete product
    $('.delete-product').click(function() {
        var productId = $(this).data('product-id');

        $.ajax({
            type: 'POST',
            url: '../main/ajax/deleteproductajax.php', // Replace with the path to your PHP script that handles deletion
            data: { productId: productId },
            success: function(response) {
                if (response == 1) {
                    // Product deleted successfully, remove the row from the table
                    $(this).closest('tr').remove();
                } else {
                    // Show error message or handle failure
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                console.error('Error:', textStatus, errorThrown);
            },
        });
    });
});
