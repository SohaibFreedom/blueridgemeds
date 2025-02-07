<?php

add_filter('woocommerce_add_to_cart_validation', 'prevent_duplicate_cart_item', 10, 3);
function prevent_duplicate_cart_item($passed, $product_id, $quantity) {
    foreach (WC()->cart->get_cart() as $cart_item) {
        if ($cart_item['product_id'] == $product_id) {
            wc_add_notice(__('This item is already in your cart.'), 'notice');
            return false;
        }
    }
    return $passed;
}




function my_theme_enqueue_styles() {
    $parent_style = 'generatepress-child-style';
    
    // Enqueue the parent theme style
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
    // Enqueue the child theme style
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

	 wp_enqueue_style( 'blog-style',
        get_stylesheet_directory_uri() . '/blog.css',
        array( 'child-style' ),
        wp_get_theme()->get('Version')
    );
	
	// Enqueue the my-account.css file
	 wp_enqueue_style( 'my-account-style',
        get_stylesheet_directory_uri() . '/my-account.css',
        array( 'child-style' ),
        wp_get_theme()->get('Version')
    );
	
    // Enqueue the checkout.css file
    wp_enqueue_style( 'checkout-style',
        get_stylesheet_directory_uri() . '/checkout.css',
        array( 'child-style' ), // This file will depend on the child style
        wp_get_theme()->get('Version')
    );
	
	// Enqueue Slick Slider CSS
	wp_enqueue_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
	wp_enqueue_style( 'slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css' );
	
	// Enqueue Slick Slider JS
	wp_enqueue_script( 'slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );





function add_page_title_to_body_class( $classes ) {
    if ( is_singular() ) { // Check if it's a single post, page, or any custom post type
        global $post;
        $page_title = sanitize_title( get_the_title( $post->ID ) ); // Sanitize the title to make it a valid CSS class
        $classes[] = 'title-' . $page_title; // Append the title class
    }
    
    return $classes;
}
add_filter( 'body_class', 'add_page_title_to_body_class' );





function my_child_theme_enqueue_scripts() {
    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue your custom script
    wp_enqueue_script(
        'my-custom-jquery-script', // Handle for the custom script
        get_stylesheet_directory_uri() . '/js/custom-script.js', // Path to your custom JS file
        array('jquery'), // Specify jQuery as a dependency
        null, // Version number
        true // Load in the footer
    );

    // Enqueue the form.js script
    wp_enqueue_script(
        'my-custom-form-script', // Handle for the form script
        get_stylesheet_directory_uri() . '/js/form.js?v=1.0', // Path to your form JS file
        array('jquery'), // Specify jQuery as a dependency
        null, // Version number
        true // Load in the footer
    );
}
add_action('wp_enqueue_scripts', 'my_child_theme_enqueue_scripts');



function custom_generatepress_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Header Widget', 'generatepress-child' ),
        'id'            => 'header-widget',
        'before_widget' => '<div class="header-widget-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'custom_generatepress_widgets_init' );





// // Start session if not already started
// add_action('init', 'start_session');
// function start_session() {
//     if (!session_id()) {
//         session_start();
//     }
	
	
// }







function handle_custom_template_form() {
    // Ensure WooCommerce sessions are initialized
    if ( ! WC()->session ) {
        WC()->session = new WC_Session_Handler();
        WC()->session->init();
    }

    // Check if the form is submitted
    if ( isset( $_POST['submit_form'] ) ) {
        // Sanitize and handle form inputs
        $fname = sanitize_text_field( $_POST['fname'] );
        $lname = sanitize_text_field( $_POST['lname'] );
        $email = sanitize_email( $_POST['email'] );

        // Send email notification
        $to = array( "sohaib@freedommedia.com" );
        $subject = "New Form Submission";
        $body = "You have received a new form submission:\n\n";
        $body .= "First Name: $fname\n";
        $body .= "Last Name: $lname\n";
        $body .= "Email: $email\n";

        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: Your Website <no-reply@yourdomain.com>'
        );

        if ( wp_mail( $to, $subject, $body, $headers ) ) {
            // Product maps
            $product_map = array(
                'tirze-3' => 354,
                'tirze-1' => 353,
                'semag-1' => 343,
                'semag-3' => 352,
                'oral'    => 355,
            );

            $boaster_item_map = array(
                'b12' => 1607,
                'mic' => 1610,
                'serm' => 1612,
                'gluth' => 1611,
            );

            // Ensure WooCommerce cart is loaded
            if ( ! WC()->cart ) {
                WC()->initialize_cart();
            }

            $products_added = false;

            // Handle final item
            if ( isset( $_GET['finalitem'] ) ) {
                $final_item = sanitize_text_field( $_GET['finalitem'] );
                WC()->session->set( 'finalitem', $final_item );

                if ( isset( $product_map[ $final_item ] ) ) {
                    $product_id = $product_map[ $final_item ];
                    WC()->cart->add_to_cart( $product_id );

                    // Handle discounts
                    if ( isset( $_GET['discount'] ) && $_GET['discount'] === 'apply' ) {
                        $coupon_code = strpos( $final_item, '3' ) !== false ? '150-disocunt' : '1st-month-discount';
                        if ( $coupon_code && ! WC()->cart->has_discount( $coupon_code ) ) {
                            WC()->cart->apply_coupon( $coupon_code );
                        }
                    }

                    $products_added = true;
                }
            }

            // Handle multiple boaster items
            if ( isset( $_GET['boasterItem'] ) ) {
                $boaster_items = sanitize_text_field( $_GET['boasterItem'] );
                $boaster_items_array = explode( '-', $boaster_items ); // Split by hyphen

                foreach ( $boaster_items_array as $boaster_item ) {
                    if ( isset( $boaster_item_map[ $boaster_item ] ) ) {
                        $booster_product_id = $boaster_item_map[ $boaster_item ];
                        WC()->cart->add_to_cart( $booster_product_id );
                        $products_added = true;
                    }
                }

                WC()->session->set( 'boasterItem', $boaster_items );
            }

            // Redirect or show an error if no products added
            if ( $products_added ) {
                WC()->cart->calculate_totals(); // Recalculate totals
                wp_safe_redirect( wc_get_cart_url() );
                exit;
            } else {
                echo '<p>Error: No products added to the cart.</p>';
            }
        } else {
            echo '<p>Error: Unable to send the email notification.</p>';
        }
    }

    // Handle persisted session values (for cart reloads)
    $final_item = WC()->session->get( 'finalitem' );
    $boaster_item = WC()->session->get( 'boasterItem' );

    if ( $final_item && isset( $product_map[ $final_item ] ) ) {
        $product_id = $product_map[ $final_item ];
        WC()->cart->add_to_cart( $product_id );
    }

    if ( $boaster_item ) {
        $boaster_items_array = explode( '-', $boaster_item );
        foreach ( $boaster_items_array as $item ) {
            if ( isset( $boaster_item_map[ $item ] ) ) {
                $booster_product_id = $boaster_item_map[ $item ];
                WC()->cart->add_to_cart( $booster_product_id );
            }
        }
    }
}

add_action( 'wp_loaded', 'handle_custom_template_form' );




add_action('wp_footer', 'populate_email_checkout_field');
function populate_email_checkout_field() {
    if (is_checkout() && isset($_SESSION['form_data'])) {
        $form_data = $_SESSION['form_data']; // Retrieve form data from session
        ?>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                // Retrieve session data
                var firstName = '<?php echo esc_js($form_data['first_name']); ?>';
                var lastName = '<?php echo esc_js($form_data['last_name']); ?>';
                var email = '<?php echo esc_js($form_data['email']); ?>';
                var phone = '<?php echo esc_js($form_data['phone']); ?>';
                var state = '<?php echo esc_js($form_data['state']); ?>';

                // Auto-populate the first name field
                if (firstName) {
                    $('#billing_first_name').val(firstName);
                }

                // Auto-populate the last name field
                if (lastName) {
                    $('#billing_last_name').val(lastName);
                }

                // Auto-populate the email field
                if (email) {
                    $('#billing_email').val(email);
                }

                // Auto-populate the phone field
                if (phone) {
                    $('#billing_phone').val(phone);
                }

                // Auto-populate the state field
                if (state) {
                    const $billingStateSelect = $('#billing_state');
                    if ($billingStateSelect.length) {
                        const optionValue = $billingStateSelect.find('option').filter(function() {
                            return $(this).text().toLowerCase() === state.toLowerCase();
                        }).val();

                        if (optionValue) {
                            $billingStateSelect.val(optionValue).trigger('change');
                            $('#select2-billing_state-container').text(state);
                        }
                    }
                }
            });
        </script>
        <?php
    }
}









// Remove the default WooCommerce privacy policy text.
remove_action( 'woocommerce_checkout_terms_and_conditions', 'wc_checkout_privacy_policy_text', 20 );

// Add your custom privacy policy text.
add_action( 'woocommerce_checkout_terms_and_conditions', 'custom_checkout_privacy_policy_text', 20 );

function custom_checkout_privacy_policy_text() {
    ?>
    <div class="woocommerce-privacy-policy-text">
        <p class="privacy-policy-checkout-txt">By confirming, you authorize BlueRidge Meds to charge your payment method or any payment method on file each month at the above rate or the new rate in effect. Your BlueRidge Meds subscription will renew automatically until you cancel. You can cancel anytime by contacting <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a></p>
    </div>
    <?php
}



// hide notice on checkout
function hide_cart_message_on_checkout() {
    // Check if we are on the checkout page and adding a product to the cart
    if (is_checkout() && isset($_GET['add-to-cart'])) {
        remove_action('woocommerce_before_checkout_form', 'woocommerce_output_all_notices', 10);
    }
}
add_action('wp', 'hide_cart_message_on_checkout');


add_filter('woocommerce_customer_details_email', 'add_mailto_to_email_address', 10, 2);


// add_action('woocommerce_checkout_shipping', 'custom_woocommerce_checkout_shipping', 10);

// function custom_woocommerce_checkout_shipping() {
//     echo '<h3>Shipping Address</h3>';
// }


add_action( 'woocommerce_subscription_details_after_shipping_address', 'add_edit_billing_address_button' );

function add_edit_billing_address_button( $subscription ) {
    $edit_billing_url = wc_get_endpoint_url( 'edit-address', 'billing', wc_get_page_permalink( 'myaccount' ) );
    ?>
    <a href="<?php echo esc_url( $edit_billing_url ); ?>" class="button edit-billing-address">
        <?php esc_html_e( 'Edit Billing address', 'woocommerce' ); ?>
    </a>
    <?php
}


// Set a maximum cart quantity of 1 for Any Pro items only START

// Prevent duplicate additions in the cart
add_filter('woocommerce_add_cart_item_data', 'limit_product_quantity_in_cart', 10, 3);
function limit_product_quantity_in_cart($cart_item_data, $product_id, $variation_id) {
    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
        if ($cart_item['product_id'] == $product_id) {
            // Remove the existing item to prevent duplication
            WC()->cart->remove_cart_item($cart_item_key);
        }
    }
    return $cart_item_data;
}

// Ensure the cart quantity remains at 1 per product
add_action('woocommerce_check_cart_items', 'set_max_quantity_per_item');
function set_max_quantity_per_item() {
    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
        if ($cart_item['quantity'] > 1) {
            WC()->cart->set_quantity($cart_item_key, 1);
        }
    }
}

// Force the cart to update after adding an item
add_action('woocommerce_add_to_cart', 'force_cart_update_after_add', 10, 6);
function force_cart_update_after_add($cart_item_key, $product_id, $quantity, $variation_id, $variation, $cart_item_data) {
    WC()->cart->calculate_totals();
    WC()->cart->set_session();
}

// Set a maximum cart quantity of 1 for Any Pro items only End

// Add custom CSS to WooCommerce emails.
add_filter('woocommerce_email_styles', 'custom_woocommerce_email_styles');
function custom_woocommerce_email_styles($css) {
    $css .= "
      a.manual-order-pay-link {
	border: 2px solid #fff;
    border-radius: 30px;
    background: #102850;
    color: #fff;
    font-weight: 400;
    padding: 16px 43px;
    display: inline-block;
    margin: 2rem 0;
    text-decoration: none;
    font-weight: bold;
    letter-spacing: 0px;
    font-size: 18px;
}
    ";
    return $css;
}
