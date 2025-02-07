<?php if ( is_checkout() && ! is_order_received_page() ) : ?>
    <script>
        // Prepare cart data for Google Ads "begin_checkout" event
        var checkoutData = {
            currency: "<?php echo get_woocommerce_currency(); ?>", // Add currency code
            items: [
                <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) : 
                    $product = $cart_item['data'];
                ?>
                {
                    item_id: "<?php echo $product->get_id(); ?>",
                    item_name: "<?php echo $product->get_name(); ?>",
                    quantity: <?php echo $cart_item['quantity']; ?>,
                    price: <?php echo $cart_item['line_total']; ?>
                },
                <?php endforeach; ?>
            ],
            total_item_count: <?php echo WC()->cart->get_cart_contents_count(); ?> // Add item count
        };

        // Log the checkout data to the browser console for debugging
        console.log(checkoutData);

        // Send the "begin_checkout" event to Google Ads
        gtag('event', 'begin_checkout', {
            'send_to': 'AW-16527862953/j5xlCOuA0t4ZEKnZjMk9', // Correct Conversion ID and Label for Begin Checkout
            'currency': checkoutData.currency, // Include currency in the event
            'value': <?php echo WC()->cart->get_total(''); ?>, // Include total value if needed
            'items': checkoutData.items,
            'item_count': checkoutData.total_item_count // Include item count in the event
        });
    </script>
<?php endif; ?>




<header class="custom-form-header">
    <div class="container">
        <div class="custom-header-inner">
            <div class="logo-wrapper">
                <div class="icon-button-wrap">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/Group-123.png" alt="previous" onclick="handleNavigation()" style="cursor:pointer;">
                </div>
                <a href="https://blueridgemeds.wpenginepowered.com/" class="logo-img">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/KxBL8CTz1ZiDbTn8PeRg1JLSW4.avif" alt="Blue Ridge Meds">
                </a>
            </div>
<div class="help-button-wrap">
                <a href="tel:855-295-BLUE (2538)" title="Help?"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
<path d="M21.97 18.33C21.97 18.69 21.89 19.06 21.72 19.42C21.55 19.78 21.33 20.12 21.04 20.44C20.55 20.98 20.01 21.37 19.4 21.62C18.8 21.87 18.15 22 17.45 22C16.43 22 15.34 21.76 14.19 21.27C13.04 20.78 11.89 20.12 10.75 19.29C9.6 18.45 8.51 17.52 7.47 16.49C6.44 15.45 5.51 14.36 4.68 13.22C3.86 12.08 3.2 10.94 2.72 9.81C2.24 8.67 2 7.58 2 6.54C2 5.86 2.12 5.21 2.36 4.61C2.6 4 2.98 3.44 3.51 2.94C4.15 2.31 4.85 2 5.59 2C5.87 2 6.15 2.06 6.4 2.18C6.66 2.3 6.89 2.48 7.07 2.74L9.39 6.01C9.57 6.26 9.7 6.49 9.79 6.71C9.88 6.92 9.93 7.13 9.93 7.32C9.93 7.56 9.86 7.8 9.72 8.03C9.59 8.26 9.4 8.5 9.16 8.74L8.4 9.53C8.29 9.64 8.24 9.77 8.24 9.93C8.24 10.01 8.25 10.08 8.27 10.16C8.3 10.24 8.33 10.3 8.35 10.36C8.53 10.69 8.84 11.12 9.28 11.64C9.73 12.16 10.21 12.69 10.73 13.22C11.27 13.75 11.79 14.24 12.32 14.69C12.84 15.13 13.27 15.43 13.61 15.61C13.66 15.63 13.72 15.66 13.79 15.69C13.87 15.72 13.95 15.73 14.04 15.73C14.21 15.73 14.34 15.67 14.45 15.56L15.21 14.81C15.46 14.56 15.7 14.37 15.93 14.25C16.16 14.11 16.39 14.04 16.64 14.04C16.83 14.04 17.03 14.08 17.25 14.17C17.47 14.26 17.7 14.39 17.95 14.56L21.26 16.91C21.52 17.09 21.7 17.3 21.81 17.55C21.91 17.8 21.97 18.05 21.97 18.33Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10"></path>
</svg><span>855-295-BLUE (2538)</span></a>
			<a class="help-btn" href="/contact-us/" title="Help">Help</a>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="cehckout-custom-classs">
		
		<!-- What Expect Section -->
		<div class="expect-features-wrap">
			<a href="/" class="checkout-logo">
				<img src="https://blueridgem2stg.wpenginepowered.com/wp-content/uploads/2024/11/checkout-logo.png" alt="logo" />
			</a>
			<h4 class="step-main-heading">What You Can Expect From Us</h4>
			<div class="expect-feature-list">
				<div class="feature-item">
					<img src="https://blueridgem2stg.wpenginepowered.com/wp-content/uploads/2024/11/diagnostic.png" alt="Free Medical Review" />
					<p>Free Medical <br>Review</p>
				</div>
				<div class="feature-item">
					<img src="https://blueridgem2stg.wpenginepowered.com/wp-content/uploads/2024/11/package.png" alt="Free Discreate Shipping" />
					<p>Free and Discreet <br>Shipping</p>
				</div>
				<div class="feature-item">
					<img src="https://blueridgem2stg.wpenginepowered.com/wp-content/uploads/2024/11/center.png" alt="Free Ongoing Support"/>
					<p>Free Ongoing <br>Support</p>
				</div>
			</div>
		</div>

        <!-- Shipping Section -->
        <div class="shipping-step-checkout shipping-checkout-top" data-step="shipping-step">
            <div class="shipping-info">
                <h3 class="step-main-heading">Shipping Info</h3>
                <p class="step-description">What to expect with us:</p>
				<div class="shipping-list-wrap">
					<ul>
						<li>
							<img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
							<span>Free and Discreet Shipping</span>
						</li>
						<li>
							<img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
							<span>Free Medical Review</span>
						</li>
						<li>
							<img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
							<span>Free Ongoing Support</span>
						</li>
                	</ul>
					<div class="ship-logo-wrap">
						<a href="/">
							<img src="https://blueridgemeds.com/wp-content/uploads/2024/10/BlueRidge-3-9.png" />
						</a>
				</div>
				</div>
            </div>
        </div>

        <?php
        do_action( 'woocommerce_before_checkout_form', $checkout );

        if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
            echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
            return;
        }
        ?>

        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

            <?php if ( $checkout->get_checkout_fields() ) : ?>

                <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                <div class="shipping-checkout-content shipping-step-checkout" data-step="shipping-step">
                    <div class="shipping-checkout-header">
                        <h3 class="step-main-heading">Billing Address</h3>
                        <p class="shp-chk-desc">
                            Where would you like to have your medication shipped, if prescribed?<br> 
                            Note we cannot ship to PO boxes.
                        </p>
                    </div>
                    <div class="col2-set" id="customer_details">
                        <div class="col-1 woocommerce-shipping-become-billing">
                            <?php do_action( 'woocommerce_checkout_billing' ); ?>
                        </div>
                        <div class="col-2 shipping-col-checkout-hide">
                            <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                        </div>
                    </div>
                    <div class="checkout-shipping-continue">
                        <input class="submit" id="continue-confirm" type="button" value="Continue & Confirm">
                    </div>
                </div>

                <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

            <?php endif; ?>
            
            <div class="order-checkout-content" data-step="order-step" style="display:none;">
				<div class="order-checkout-container">
					
				
				 <h3 class="step-main-heading">Review your treatment and pay</h3>
					<div class="order-checkout-header">
						<div class="od-check-head-wrap">
							<span class="heading">$0 Due Now - Pay Only If Prescription Is Processed</span>
							<p>
								You have selected the monthly treatment program! There will be a HOLD placed on your credit card, but you will not be billed until after your prescription is approved and processed. You will be invited to check in with your doctor every 30 days.
							</p>
						</div>
					</div>
					
					<h3 id="order_review_heading">Your Plan</h3>
				<div class="order-checkout-main-wrapper">
                <div class="shipping-checkout-header">
				
                    <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
                  
                    <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
                    <div id="order_review" class="woocommerce-checkout-review-order">
                        <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                    </div>
                    <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
                </div> 
				</div>	
			</div>
            </div>

        </form>

        <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
    </div>
</div>


<script>
	

    document.addEventListener('DOMContentLoaded', function() {
        // Find the coupon toggle form
        var couponToggle = document.querySelector('.woocommerce-form-coupon');
		document.querySelector('button[name="apply_coupon"]').textContent = "Apply";

        couponToggle.style.display = 'block';
        // Find the payment section
        var paymentSection = document.querySelector('#payment');

        // Move the coupon toggle before the payment section
        if (couponToggle && paymentSection) {
            paymentSection.parentNode.insertBefore(couponToggle, paymentSection);
        }
    });


document.getElementById('continue-confirm').addEventListener('click', function() {
    console.log('Continue button clicked');

    // Remove any previous error messages
    document.querySelectorAll('.error-message').forEach(function(error) {
        error.remove();
    });

    // Flag to track errors
    let isError = false;

    // Check for required fields
    document.querySelectorAll('.woocommerce-shipping-become-billing input[aria-required="true"]').forEach(function(input) {
        console.log('Checking input: ', input.name, ' with value: ', input.value);
        if (!input.value) {
            isError = true;

            // Create error message
            const errorMessage = document.createElement('div');
            errorMessage.classList.add('error-message');
            errorMessage.textContent = 'This field is required';

            // Insert the error message after the input field
            input.parentNode.insertBefore(errorMessage, input.nextSibling);

            // Add focus event listener to remove the error message on focus
            input.addEventListener('focus', function() {
                if (input.nextSibling && input.nextSibling.classList.contains('error-message')) {
                    input.nextSibling.remove();
                }
            });
        }
    });

    // If no errors, proceed to hide the shipping step and show the order step
    if (!isError) {
        console.log('No errors found, proceeding to next step');
		scrollToTop();
        document.querySelectorAll('[data-step="shipping-step"]').forEach(function(element) {
            element.style.display = 'none';
        });
        document.querySelectorAll('[data-step="order-step"]').forEach(function(element) {
            element.style.display = 'block';
        });
    } else {
        console.log('Errors were found, staying on the current step');
    }
});





document.addEventListener("DOMContentLoaded", function() {
    // Check if the URL contains the addtocart query parameter
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('addtocart')) {
        // Hide the WooCommerce notice
        var noticesWrapper = document.querySelector('.woocommerce-notices-wrapper');
        if (noticesWrapper) {
            noticesWrapper.style.display = 'none';
        }
    }
});




	
	   function handleNavigation() {
        // Check if shipping step is visible
        scrollToTop();
        const shippingStepVisible = Array.from(document.querySelectorAll('[data-step="shipping-step"]')).some(function(element) {
            return element.style.display !== 'none';
        });

        // Check if order step is visible
        const orderStepVisible = Array.from(document.querySelectorAll('[data-step="order-step"]')).some(function(element) {
            return element.style.display !== 'none';
        });

        if (shippingStepVisible) {
            // If shipping step is active, redirect to the /get-started page
            window.location.href = '/get-started';
        } else if (orderStepVisible) {
				  document.querySelectorAll('.checkout_coupon.woocommerce-form-coupon').forEach(function(element) {
            element.style.display = 'block';
        });
			
            // If order step is active, show the shipping step again
            document.querySelectorAll('[data-step="shipping-step"]').forEach(function(element) {
                element.style.display = 'block';
            });
            document.querySelectorAll('[data-step="order-step"]').forEach(function(element) {
                element.style.display = 'none';
            });
        }
    }
	
	document.addEventListener('DOMContentLoaded', function () {
    const billingAddressInput = document.getElementById('billing_address_1');
    const billingAddressField = document.getElementById('billing_address_1_field');

    billingAddressInput.addEventListener('input', function () {
        const inputValue = billingAddressInput.value.toLowerCase().trim(); // Normalize the input value

        // Regex to match variations of "po box", "po.box", "po-box", etc.
        const poBoxPattern = /\bpo[\s.-]*box\b/;

        // Check if the input matches the pattern
        if (poBoxPattern.test(inputValue)) {
            billingAddressField.classList.add('po-box-warning'); // Add the class
        } else {
            billingAddressField.classList.remove('po-box-warning'); // Remove the class
        }
    });
});


	
</script>


