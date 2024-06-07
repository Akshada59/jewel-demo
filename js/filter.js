$(document).ready(function() {
    $('#productNameFilter').on('keyup', function() {
      var searchText = $(this).val().toLowerCase();
      $('.grid > div').each(function() {
        var productName = $(this).find('h3').text().toLowerCase();
        if (productName.includes(searchText)) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
      // Show the filter section after search
      $('.mb-4').show();
    });
  });

  document.getElementById('priceRangeInput').addEventListener('input', function() {
    filterProductsByPrice(this.value);
  });

  function filterProductsByPrice(price) {
    let products = document.querySelectorAll('.bg-white');
    products.forEach(product => {
      let productPrice = parseInt(product.querySelector('#price').innerText.replace('Rs.', ''));
      if (productPrice <= price) {
        product.style.display = 'block';
      } else {
        product.style.display = 'none';
      }
    });
  }

  function clearPriceFilter() {
    document.getElementById('priceRangeInput').value = 1500; // Set max value
    filterProductsByPrice(1500); // Show all products
  }




  $(document).ready(function(){
    // Filter by color
    $(".color-filter").change(function(){
        var selectedColors = [];
        $(".color-filter:checked").each(function(){
            selectedColors.push($(this).val().toLowerCase());
        });

        if(selectedColors.length > 0){
            $(".product").each(function(){
                var colors = $(this).data("colors").toLowerCase().split(",");
                var showProduct = false;
                for(var i = 0; i < selectedColors.length; i++){
                    if(colors.includes(selectedColors[i])){
                      console.log("in showww");
                        showProduct = true;
                        break;
                    }
                }
                console.log(showProduct);
                if(showProduct){
                  console.log(this);
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        } else {
            $(".product").show();
        }
    });

    // Clear color filter
    function clearColorFilter() {
        $(".color-filter").prop('checked', false);
        $(".product").show();
    }

    $(".clear-color-filter").click(function(){
        clearColorFilter();
    });
});


$(document).ready(function(){
  // Filter by material
  $(".material-filter").change(function(){
    var selectedMaterials = [];
    $(".material-filter:checked").each(function(){
      selectedMaterials.push($(this).val().toLowerCase());
    });

    if(selectedMaterials.length > 0){
      $(".product").each(function(){
        var materials = $(this).data("materials").toLowerCase().split(",");
        var showProduct = false;
        for(var i = 0; i < selectedMaterials.length; i++){
          console.log(selectedMaterials[i]);
          console.log(materials);
          if(materials.includes(selectedMaterials[i])){
            showProduct = true;
            break;
          }
        }
        if(showProduct){
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    } else {
      $(".product").show();
    }
  });

  // Clear material filter
  function clearMaterialFilter() {
    $(".material-filter").prop('checked', false);
    $(".product").show();
  }

  $(".clear-material-filter").click(function(){
    clearMaterialFilter();
  });
});



  $(document).ready(function() {
    // Clear all filters
    $(".clear-all-filters").click(function() {
      // Clear color filter
      $(".color-filter").prop("checked", false);

      // Clear material filter
      $(".material-filter").prop("checked", false);

      // Clear price filter
      $("#priceRangeInput").val(1500);

      // Show all products
      $(".product").show();
    });
  });


  $(document).ready(function(){
    // Filter by color, material, and price
    $(".color-filter, .material-filter").change(function(){
        filterProducts();
    });

    $("#priceRangeInput").on('input', function() {
        filterProducts();
    });

    function filterProducts() {
        var selectedColors = [];
        var selectedMaterials = [];
        var selectedPrice = parseInt($("#priceRangeInput").val());

        $(".color-filter:checked").each(function(){
            selectedColors.push($(this).val().toLowerCase());
        });

        $(".material-filter:checked").each(function(){
            selectedMaterials.push($(this).val().toLowerCase());
        });

        $(".product").each(function(){
            var colors = $(this).data("colors").toLowerCase().split(",");
            var materials = $(this).data("materials").toLowerCase().split(",");
            var productPrice = parseInt($(this).data("price"));

            var showProduct = true;

            if(selectedColors.length > 0 && !colors.some(r => selectedColors.includes(r))){
                showProduct = false;
            }

            if(selectedMaterials.length > 0 && !materials.some(r => selectedMaterials.includes(r))){
                showProduct = false;
            }

            if(productPrice > selectedPrice){
                showProduct = false;
            }

            if(showProduct){
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }

    // Clear all filters
    $(".clear-all-filters").click(function() {
        $(".color-filter, .material-filter").prop("checked", false);
        $("#priceRangeInput").val(1500);
        $(".product").show();
    });
});

  

