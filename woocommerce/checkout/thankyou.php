<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
 */

defined( 'ABSPATH' ) || exit;
?>

<style>
.thankyou-page .container {
    max-width: 1000px;
    margin: 0 auto;
    margin-top: 5em;
}
	.woocommerce-order.custom-thank-you-page {
    display: none;
}
.thankyou-page .thankyou-page-text {
    background-color: #FAFAFA;
    padding: 40px;
    border-radius: 15px;
}
.thankyou-page .thankyou-page-text h2 {
    text-align: center;
    color: #102850;
    font-weight: 700;
}
.thankyou-page .thankyou-page-text p {
    text-align: center;
    padding: 30px 0;
    color: #001C55;
    font-weight: 600;
}
.thankyou-page .thankyou-page-text img {
    display: block;
    margin: 0 auto;
}
</style>

<header class="custom-form-header">
    <div class="container">
        <div class="custom-header-inner">
            <div class="logo-wrapper">
                <div class="icon-button-wrap">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/Group-123.png" alt="previous" onclick="goToPreviousStep()" style="cursor:pointer;">
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


    <div class="thankyou-page">
        <div class="container">
            <div class="thankyou-page-text">
                <h2>Thank you!</h2>
                <p>You will now automatically be redirected to the next page</p>
                <img src="/wp-content/uploads/2024/08/KxBL8CTz1ZiDbTn8PeRg1JLSW4.avif" alt="">
            </div>
        </div>
    </div>

<div class="woocommerce-order custom-thank-you-page">

	
<?php if ( $order ) : ?>
    <script>
        // Prepare order data for Google Ads Conversion Tracking
        var orderData = {
            transaction_id: "<?php echo $order->get_order_number(); ?>",
            value: <?php echo $order->get_total(); ?>,
            currency: "<?php echo $order->get_currency(); ?>",
            email: "<?php echo $order->get_billing_email(); ?>", // Retrieve billing email
            items: [
                <?php foreach ( $order->get_items() as $item_id => $item ) : ?>
                {
                    item_id: "<?php echo $item->get_product_id(); ?>",
                    item_name: "<?php echo $item->get_name(); ?>",
                    quantity: <?php echo $item->get_quantity(); ?>,
                    price: <?php echo $item->get_total(); ?>
                },
                <?php endforeach; ?>
            ]
        };

        // Log the order data to the browser console for debugging
        console.log(orderData);

        // Send the conversion event to Google Ads
        gtag('event', 'purchase', {
            'send_to': 'AW-16527862953/A-60CKWyld4ZEKnZjMk9', // Correct Conversion ID and Label
            'transaction_id': orderData.transaction_id,
            'value': orderData.value,
            'currency': orderData.currency,
            'items': orderData.items,
            'user_data': {
                'email': orderData.email  
            }
        });
		
		
		 fbq('track', 'Purchase', {
            value: orderData.value,
            currency: orderData.currency,
            contents: orderData.items.map(function(item) {
                return {
                    id: item.item_id,
                    quantity: item.quantity,
                    name: item.item_name,
                    price: item.price
                };
            }),
            content_type: 'product',
            content_ids: orderData.items.map(function(item) {
                return item.item_id;
            }),
            email: orderData.email
        });
		
    </script>
<?php endif; ?>

	
	<?php
	
	// Assuming $order contains your order data
$telemdnow_visit_link = null;

// Iterate through the meta data of the order
foreach ($order->get_meta_data() as $meta) {
    // Check if the key matches 'telemdnow_visit_link'
    if ($meta->key === 'telemdnow_visit_link') {
        // Fetch the value
        $telemdnow_visit_link = $meta->value;
        break; // Exit the loop once found
    }
}

// Output the result and handle redirect
if ($telemdnow_visit_link !== null) {
    echo "Telemdnow Visit Link: " . $telemdnow_visit_link;

    // Redirect after 5 seconds
    echo "<script>
            setTimeout(function(){
                window.location.href = '$telemdnow_visit_link';
            }, 3000);
          </script>";
} else {
    echo "Telemdnow Visit Link not found.";
}

	
	
	
	if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() );
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<?php wc_get_template( 'checkout/order-received.php', array( 'order' => $order ) ); ?>

			<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details akasha-code-thanks">

				<li class="woocommerce-order-overview__order order">
					<?php esc_html_e( 'Order number:', 'woocommerce' ); ?>
					<strong><?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<li class="woocommerce-order-overview__date date">
					<?php esc_html_e( 'Date:', 'woocommerce' ); ?>
					<strong><?php echo wc_format_datetime( $order->get_date_created() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
					<li class="woocommerce-order-overview__email email">
						<?php esc_html_e( 'Email:', 'woocommerce' ); ?>
						<strong><?php echo $order->get_billing_email(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
					</li>
				<?php endif; ?>

				<li class="woocommerce-order-overview__total total">
					<?php esc_html_e( 'Total:', 'woocommerce' ); ?>
					<strong><?php echo $order->get_formatted_order_total(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
				</li>

				<?php if ( $order->get_payment_method_title() ) : ?>
					<li class="woocommerce-order-overview__payment-method method">
						<?php esc_html_e( 'Payment method:', 'woocommerce' ); ?>
						<strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
					</li>
				<?php endif; ?>

			</ul>

		<?php endif; ?>

		<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
	
	
<?php if ( $order ) : ?>
    <script>
        // Prepare items data for console logging
        var orderItems = [
            <?php foreach ( $order->get_items() as $item_id => $item ) : ?>
            {
                item_id: "<?php echo $item->get_product_id(); ?>",
                item_name: "<?php echo $item->get_name(); ?>",
                quantity: <?php echo $item->get_quantity(); ?>,
                price: <?php echo $item->get_total(); ?>
            },
            <?php endforeach; ?>
        ];

        // Log the items data to the browser console
        console.log("hello worls");
    </script>
<?php endif; ?>

	<?php else : ?>

		<?php wc_get_template( 'checkout/order-received.php', array( 'order' => false ) ); ?>

	<?php endif; ?>

</div>
