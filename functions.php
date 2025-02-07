<?php

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





// Start session if not already started
add_action('init', 'start_session');
function start_session() {
    if (!session_id()) {
        session_start();
    }
	
	
}



// Ensure WooCommerce session is started and cart is initialized
add_action( 'wp_loaded', 'force_woocommerce_cart_session' );
function force_woocommerce_cart_session() {
    if ( WC()->cart && ! WC()->session->has_session() ) {
        WC()->session->set_customer_session_cookie(true);
    }
}

// Function to clear all products from WooCommerce cart before adding new product
function clear_woocommerce_cart() {
    if ( WC()->cart ) {
        WC()->cart->empty_cart(); // Clear the cart before adding the new item
    }
}


function handle_custom_template_form() {
    if ( isset( $_POST['submit_form'] ) ) {
        // Sanitize and handle form inputs
        $fname = sanitize_text_field( $_POST['fname'] );
        $lname = sanitize_text_field( $_POST['lname'] );
        $email = sanitize_email( $_POST['email'] );
        $phone = sanitize_text_field( $_POST['phone'] );
        $dob = sanitize_text_field( $_POST['dob'] );
        $state = sanitize_text_field( $_POST['state'] );
        $sex_assigned = sanitize_text_field( $_POST['sex-assigned'] );
        $bmi = sanitize_text_field( $_POST['bmi'] );

        // Handle checkboxes (Interests)
        if ( isset( $_POST['interests'] ) && is_array( $_POST['interests'] ) ) {
            $interests = array_map( 'sanitize_text_field', $_POST['interests'] );
            $interests_list = implode( ', ', $interests );
        } else {
            $interests_list = 'None';
        }

        // Prepare data to be saved in JSON format
        $form_data = array(
            'first_name'    => $fname,
            'last_name'     => $lname,
            'email'         => $email,
            'phone'         => $phone,
            'dob'           => $dob,
            'state'         => $state,
            'sex_assigned'  => $sex_assigned,
            'bmi'           => $bmi,
            'interests'     => $interests_list,
        );

        // Store form data in session
        $_SESSION['form_data'] = $form_data;

        // Send email notification
        $to = array( "ask@blueridgemeds.com" );
        $subject = "New Form Submission";
        $body = "You have received a new form submission:\n\n";
        $body .= "First Name: $fname\n";
        $body .= "Last Name: $lname\n";
        $body .= "Email: $email\n";
        $body .= "Phone: $phone\n";
        $body .= "State: $state\n";

        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: Your Website <no-reply@yourdomain.com>'
        );

        $mail_sent = wp_mail( $to, $subject, $body, $headers );

        if ( $mail_sent ) {
            // Map 'finalitem' values to product IDs
            $product_map = array(
                'tirze-3' => 354, 
                'tirze-1' => 353, 
                'semag-1' => 343, 
                'semag-3' => 352, 
                'oral'    => 355
            );

            // Check if 'finalitem' is present in the URL
            if ( isset( $_GET['finalitem'] ) ) {
                $final_item = sanitize_text_field( $_GET['finalitem'] );

                if ( array_key_exists( $final_item, $product_map ) ) {
                    $product_id = $product_map[ $final_item ];

                    // Clear WooCommerce cart before adding the new item
                    clear_woocommerce_cart();

                    // Ensure WooCommerce cart is initialized
                    if ( WC()->cart ) {
                        // Add product to cart
                        WC()->cart->add_to_cart( $product_id );

                        // Check for 'discount' parameter
                        if ( isset( $_GET['discount'] ) && $_GET['discount'] === 'apply' ) {
                            // Check for 'finalitem' and apply corresponding coupons
                            if ( strpos( $final_item, '3' ) !== false ) {
                                $coupon_code = '1st-month-discount';
                            } elseif ( strpos( $final_item, '1' ) !== false ) {
                                $coupon_code = '1st-month-discount';
                            }

                            // Apply the determined coupon if set
                            if ( isset( $coupon_code ) ) {
                                if ( ! WC()->cart->has_discount( $coupon_code ) ) {
                                    WC()->cart->apply_coupon( $coupon_code );
                                }
                                WC()->cart->calculate_totals(); // Recalculate totals
                            }
                        } else {
                            // Default coupon logic if 'discount' parameter is not set
                            $default_coupon_code = 'Newyear50';

                            if ( ! WC()->cart->has_discount( $default_coupon_code ) ) {
                                WC()->cart->apply_coupon( $default_coupon_code );
                            }
                            WC()->cart->calculate_totals(); // Recalculate totals
                        }

                        // Redirect to checkout if cart has items
                        if ( WC()->cart->get_cart_contents_count() > 0 ) {
                            wp_redirect( wc_get_checkout_url() );
                            exit;
                        } else {
                            echo '<p>Error: Cart is empty after adding product.</p>';
                        }
                    } else {
                        echo '<p>Error: WooCommerce cart not initialized.</p>';
                    }
                } else {
                    echo '<p>Error: Invalid product selection.</p>';
                }
            } else {
                wp_redirect( home_url("/thank-you") );
                exit;
            }
        } else {
            echo '<p>Error: Unable to send the email notification.</p>';
        }
    }
}

add_action( 'init', 'handle_custom_template_form' );







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





add_action('woocommerce_thankyou', 'clear_session_data');
function clear_session_data() {
    if (isset($_SESSION['form_data'])) {
        unset($_SESSION['form_data']);
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





add_action('woocommerce_checkout_shipping', 'custom_woocommerce_checkout_shipping', 10);

function custom_woocommerce_checkout_shipping() {
    echo '<h3>Shipping Address</h3>';
}




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
















