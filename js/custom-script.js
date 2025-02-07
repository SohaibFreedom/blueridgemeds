jQuery(document).ready(function($) {
    // Initially hide all accordion content
    $('.Acc-Content').hide();

    // Accordion toggle functionality
    $('.Acc-Heading').click(function() {
        if ($(this).next('.Acc-Content').is(':visible')) {
            // Close currently open content
            $(this).next('.Acc-Content').slideToggle(400);
            $(this).removeClass('current');
        } else {
            // Hide all accordion content
            $('.Acc-Content').slideUp(400);
            $('.Acc-Heading').removeClass('current');
            
            // Show clicked accordion content
            $(this).next('.Acc-Content').slideDown(400);
            $(this).addClass('current');
        }
    });
	
<<<<<<< HEAD



// Use event delegation to attach the click event listener to dynamically created buttons
// Use event delegation to attach the click event listener to dynamically created buttons
$(document).on("click", ".remove-custom-cart", function (event) {
    // Prevent the default action (navigation)
    event.preventDefault();

    // Log the data attributes or any other message
    console.log("Remove button clicked:");
    console.log("Product ID:", $(this).data("product_id"));
    console.log("Product SKU:", $(this).data("product_sku"));

    // Check for the presence of the `.cart-empty` div after 1–2 seconds
    setTimeout(function () {
        if ($(".cart-empty").length > 0) {
            console.log(".cart-empty div has been added to the DOM.");
            // Perform a hard reload by appending a unique query string
            window.location.href = window.location.href.split('?')[0] + '?_=' + new Date().getTime();
        } else {
            console.log(".cart-empty div is not present in the DOM.");
        }
    }, 4000); // Wait for 4 seconds
});


=======
	
>>>>>>> 1a345f53bf303ef4add3131a6410deda042cbdc2

  // Toggle the mobile menu when the icon is clicked
  $('#icon-toggle-mob').on('click', function () {
    $('.header-content-wrapper').toggleClass('show-menu-mob');
  });

  // Close the mobile menu when the cross icon is clicked
  $('.toggle-cross-icon').on('click', function () {
    $('.header-content-wrapper').removeClass('show-menu-mob');
  });


    // Set the first tab as active by default
    $(".tab-header li:first-child").addClass("active");

    // Handle tab clicks
    $(".tab-header li a").on("click", function (event) {
        event.preventDefault();
        var activeTab = $(this).attr("href");

        // Remove active class from all tabs and panes
        $(".tab-header li").removeClass("active");
        $(".tab-pane").removeClass("active");

        // Add active class to clicked tab and corresponding tab pane
        $(this).parent().addClass("active");
        $(activeTab).addClass("active");
    });

<<<<<<< HEAD
=======







>>>>>>> 1a345f53bf303ef4add3131a6410deda042cbdc2
  // Attach the calculateBMI function to input change events
  $("#feet, #inches, #weight").on('input', function() {
      calculateBMI();
  });


	$('a#learnMore').click(function(){
	$('.product-model-popup').addClass('show');
	$('.popup-overlay').addClass('show-overlay');
});

$('.cross-icon').click(function(){
	$('.product-model-popup').removeClass('show');
	$('.popup-overlay').removeClass('show-overlay');
});
	 
$('input[value="Got It"]').click(function(){
	$('.product-model-popup').removeClass('show');
	$('.popup-overlay').removeClass('show-overlay');
});
<<<<<<< HEAD

});
=======
	 	

jQuery(document).ready(function($) {
    // Listen for changes in the quantity input field
    $('.woocommerce-cart-form .product-quantity input.qty').on('change', function() {
        var $this = $(this);
        var new_qty = $this.val(); // Get the new quantity
        var cart_item_key = $this.closest('.woo-custom-cart__item').data('item-key'); // Get cart item key

        var data = {
            action: 'woocommerce_update_cart_item', // Custom AJAX action
            cart_item_key: cart_item_key,
            quantity: new_qty
        };

        // Send AJAX request
        $.ajax({
            url: woocommerce_params.ajax_url, // WooCommerce AJAX URL
            type: 'POST',
            data: data,
            success: function(response) {
                if (response.success) {
                    // Update the cart fragments (subtotal, totals, etc.)
                    $(document.body).trigger('wc_fragment_refresh');

                    // Optional: You can also manually update the subtotal if you have that in your layout
                    var subtotal = response.data.subtotal;
                    $this.closest('.woo-custom-cart__item').find('.product-subtotal').html(subtotal);
                } else {
                    alert('Failed to update the cart.');
                }
            },
            error: function() {
                console.log('Error during AJAX request.');
            }
        });
    });
});

	


});


>>>>>>> 1a345f53bf303ef4add3131a6410deda042cbdc2
