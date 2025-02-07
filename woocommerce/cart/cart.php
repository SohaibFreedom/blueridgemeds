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
                <a href="#" title="Help?">Help?</a>
            </div>
        </div>
    </div>
</header>

<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>


<div class="custom-woo-cart-container">

<div class="custom-woocommerce-cart-main">

	<div class="cart-header-c">
			<span>Your Medication Bag</span>
			<h2>
				Review Your Items Before Proceeding
		</h2>
	</div>

	
	
<form class="woocommerce-cart-form"  action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	<div class="woo-custom-cart">
	<div class="woo-custom-cart__header">
		<div class="product-remove"><?php esc_html_e( 'Remove item', 'woocommerce' ); ?></div>
		<div class="product-thumbnail"><?php esc_html_e( 'Thumbnail image', 'woocommerce' ); ?></div>
		<div class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?></div>
		<div class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></div>
		<div class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></div>
		<div class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></div>
	</div>

	<div class="woo-custom-cart__body">
		<?php do_action( 'woocommerce_before_cart_contents' ); ?>

		<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) : 
			$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
			$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) : 
				$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
		?>
		<div class="woo-custom-cart__item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>" data-item-key="<?php echo esc_attr( $cart_item_key ); ?>">

			<div class="product-cart-item-wrap">
					<div class="product-thumbnail">
	<?php
		// Get the full-size image instead of the thumbnail
		$thumbnail = $_product->get_image('small'); // 'full' size retrieves the full-size image
		
		if ( ! $product_permalink ) {
			echo $thumbnail; // Display the full-size image if there's no product link
		} else {
			// Display the full-size image wrapped in a link to the product
			printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
		}
	?>
</div>

				
				<div class="product-details-col">
				

	

			<div class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
				<?php
					if ( ! $product_permalink ) {
						echo wp_kses_post( $product_name . '&nbsp;' );
					} else {
						echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
					}

					do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );
					echo wc_get_formatted_cart_item_data( $cart_item ); 
					
					if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
						echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
					}
				?>
			</div>

			<div class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
				<?php
					echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
				?>
			</div>

			<div class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
				<?php
					if ( $_product->is_sold_individually() ) {
						$min_quantity = 1;
						$max_quantity = 1;
					} else {
						$min_quantity = 0;
						$max_quantity = $_product->get_max_purchase_quantity();
					}

					$product_quantity = woocommerce_quantity_input(
						array(
							'input_name'   => "cart[{$cart_item_key}][qty]",
							'input_value'  => $cart_item['quantity'],
							'max_value'    => $max_quantity,
							'min_value'    => $min_quantity,
							'product_name' => $product_name,
						),
						$_product,
						false
					);

					echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
				?>
			</div>
						<div class="product-remove">
				<?php
					echo apply_filters( 
						'woocommerce_cart_item_remove_link',
						sprintf(
							'<a href="%s" class="remove-custom-cart" aria-label="%s" data-product_id="%s" data-product_sku="%s">remove</a>',
							esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
							esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
							esc_attr( $product_id ),
							esc_attr( $_product->get_sku() )
						),
						$cart_item_key
					);
				?>
			</div>
				</div>
				
			</div>
				<div class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
				<?php
					echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
				?>
			</div>

		</div>
		
		
		<?php endif; endforeach; ?>
		<?php do_action( 'woocommerce_cart_contents' ); ?>
		
	
		
	</div>
		
			<div class="continue_btn-wrapper-cart">
			<a href="/checkout">Checkout</a>
		</div>

	<div class="woo-custom-cart__footer">
		<?php if ( wc_coupons_enabled() ) { ?>
			<div class="coupon">
				<label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label>
				<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" />
				<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
				<?php do_action( 'woocommerce_cart_coupon' ); ?>
			</div>
		<?php } ?>

		<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

		<?php do_action( 'woocommerce_cart_actions' ); ?>
		<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
	</div>

	<?php do_action( 'woocommerce_after_cart_contents' ); ?>
</div>

	
	
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>
		
</div>
</div>
<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	?>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>



<div class="step-main-wrapper choose-plan-tabs-wrap step" style="display:block;">
    <div class="choose-plan-tabs-inner">
		<div class="cart-header-c">
			<span>CHOOSE YOUR PLAN</span>
			<h2>
				Change Mind?
		</h2>
	</div>
     
        <div class="pricing-plans-tabs choose-plan-tabs">
            <ul class="tab-header">
                <li class="active"><a href="#monthly">Monthly Payment</a></li>
                <li><a href="#3month">Jumpstart (3-months)</a></li>
            </ul>
            <div class="tab-content">
                <!-- Monthly Membership Content -->
                <div id="monthly" class="tab-grid tab-pane active">
                    <div class="tab-inner-content">
                        <div class="choose-plan-upper">
                            <h4>Semaglutide Program</h4>
                            <p class="pricing-amount">$297/mo</p>
                            <p class="pricing-discount">-$100.00 off your 1st month</p>
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-Semaglutide-1-bottle-1-1.png" alt="">
							<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
    <input type="hidden" name="add-to-cart" value="343" /> <!-- semag-1 -->
    <input type="submit" value="Continue" />
</form>

                           
                        </div>
                        <ul class="membership-features">
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Same active ingredients as Ozempic® and Wegovy®</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Once weekly injections</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Doctor’s visits included</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Unlimited provider support</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Same price regardless of dosage</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Pause or cancel your membership anytime</span>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-inner-content">
                        <div class="choose-plan-upper">
                            <h4>Oral Semaglutide <br> Program</h4>
                            <p class="pricing-amount">$249/mo</p>
                            <p class="pricing-discount">-$100.00 off your 1st month</p>
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/Revised-BlueRidge-Oral-Semaglutide-1-2.png" alt="">
                                   					<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
    <input type="hidden" name="add-to-cart" value="355" /> <!-- semag-1 -->
    <input type="submit" value="Continue" />
</form>
                        </div>
                        <ul class="membership-features">
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Same active ingredients as Ozempic® and Wegovy®</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Once weekly injections</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Doctor’s visits included</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Unlimited provider support</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Same price regardless of dosage</span>
                            </li>
                            <li class="feature-item">
                                <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                                <span class="feature-text">Pause or cancel your membership anytime</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 3 Month Membership Content -->
                <div id="3month" class="tab-grid tab-pane">
					<div class="tab-inner-content">
                    <div class="choose-plan-upper">
                        <h4>Semaglutide Program</h4>
                        <p class="pricing-amount">$747</p>
                        <p class="pricing-discount">-$100.00 off your 1st purchase</p>
                        <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-Semaglutide-1-bottle-1.png" alt="">
                                          					<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
    <input type="hidden" name="add-to-cart" value="352" /> <!-- semag-1 -->
    <input type="submit" value="Continue" />
</form>
                    </div>
                    <ul class="membership-features">
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Same active ingredients as Ozempic® and Wegovy®</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Once weekly injections</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Doctor’s visits included</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Unlimited provider support</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Same price regardless of dosage</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Pause or cancel your membership anytime</span>
                        </li>
                    </ul>                    
                </div>
                <div class="tab-inner-content">
                    <div class="choose-plan-upper">
                        <h4>Tirzepatide Program</h4>
                        <p class="pricing-amount">$1,047</p>
                        <p class="pricing-discount">-$100.00 off your 1st purchase</p>
                        <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/Layer-5-1.png" alt="">
                             					<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
    <input type="hidden" name="add-to-cart" value="354" /> <!-- semag-1 -->
    <input type="submit" value="Continue" />
</form>
                    </div>
                    <ul class="membership-features">
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Same active ingredients as Ozempic® and Wegovy®</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Once weekly injections</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Doctor’s visits included</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Unlimited provider support</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Same price regardless of dosage</span>
                        </li>
                        <li class="feature-item">
                            <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/tick-light-blue.png" alt="Tick icon">
                            <span class="feature-text">Pause or cancel your membership anytime</span>
                        </li>
                    </ul>                    
                </div>
				</div>
            </div>
        </div>
    </div>
<!-- 			<div class="contact-wrap">
                <div class="top-img">
                    <img src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/09/BlueRidge-logo-small.png" alt="">
                </div>
                <div class="contact-details">
                    <p>Reach Out</p>
                    <a href="tel:+18552952538">855-295-BLUE (2538)</a>
                    <a href="mailto:Ask@blueridgemeds.com">Ask@blueridgemeds.com</a>
                    <a href="https://www.blueridgemeds.com">https://www.blueridgemeds.com</a>
                </div>
            </div> -->
</div>