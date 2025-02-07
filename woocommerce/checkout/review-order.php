<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="shop_table woocommerce-checkout-review-order-table custom-review-order-checkout-sec">

	<div class="tbody">
	<?php
	do_action( 'woocommerce_review_order_before_cart_contents' );

	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
		$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

		if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
			?>
			<div class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
				<div class="product-image">
					<?php echo wp_get_attachment_image( $_product->get_image_id(), 'medium' ); // Display product thumbnail ?>
				</div>
				<div class="product-name">
					<?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) ) . '&nbsp;'; ?>
					<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times;&nbsp;%s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
					<?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>
				</div>
				<div class="product-total">
					<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
				</div>
			</div>
			<?php
		}
	}

	do_action( 'woocommerce_review_order_after_cart_contents' );
	?>
</div>

	<div class="tfoot order-review-specs">
		

		<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			<div class="cart-discount d-flex-order-review coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
				<div><?php wc_cart_totals_coupon_label( $coupon ); ?></div>
				<div><?php wc_cart_totals_coupon_html( $coupon ); ?></div>
			</div>
		<?php endforeach; ?>
		
		<div class="d-flex-order-review liscence-provider">
			<div class="d-flex-left-item">
				Licensed provider review
			</div>
				<div class="d-flex-right-item">
				Included
			</div>
		</div>
		
				<div class="d-flex-order-review shipping-provider">
			<div class="d-flex-left-item">
				Standard shipping
			</div>
				<div class="d-flex-right-item">
				Included
			</div>
		</div>
		
				<div class="d-flex-order-review care-provider">
			<div class="d-flex-left-item">
				On-demand care with a provider
			</div>
				<div class="d-flex-right-item">
				Included
			</div>
		</div>
		
			<div class="d-flex-order-review total-provider">
			<div class="d-flex-left-item">
				Total due if prescribed
			</div>
<div class="d-flex-right-item">
    <div>
        <?php if ( WC()->cart->get_coupons() ) : ?>
            <s><?php wc_cart_totals_subtotal_html(); ?></s>
        <?php endif; ?>
        <?php wc_cart_totals_order_total_html(); ?>
    </div>
    
    <?php if ( WC()->cart->get_coupons() ) : ?>
        <p class="you-saved-text red-text"><?php echo sprintf( __( 'You are saving %s', 'woocommerce' ), wc_price( WC()->cart->get_discount_total() ) ); ?></p>
    <?php endif; ?>
</div>



		</div>
			<div class="d-flex-order-review due-today-provider">
			<div class="d-flex-left-item">
				Due Today
			</div>
				<div class="d-flex-right-item">
				$0
			</div>
		</div>
		
		
		<div class="hide-order-review" style="display:none;">
			<div class="cart-subtotal">
			<div><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></div>
			<div><?php wc_cart_totals_subtotal_html(); ?></div>
		</div>

		<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>

			<?php do_action( 'woocommerce_review_order_before_shipping' ); ?>

			<?php wc_cart_totals_shipping_html(); ?>

			<?php do_action( 'woocommerce_review_order_after_shipping' ); ?>

		<?php endif; ?>

		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<div class="fee">
				<div><?php echo esc_html( $fee->name ); ?></div>
				<div><?php wc_cart_totals_fee_html( $fee ); ?></div>
			</div>
		<?php endforeach; ?>

		<?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
			<?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
				<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
					<div class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
						<div><?php echo esc_html( $tax->label ); ?></div>
						<div><?php echo wp_kses_post( $tax->formatted_amount ); ?></div>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
				<div class="tax-total">
					<div><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></div>
					<div><?php wc_cart_totals_taxes_total_html(); ?></div>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

		<div class="order-total">
			<div><?php esc_html_e( 'Total', 'woocommerce' ); ?></div>
			<div><?php wc_cart_totals_order_total_html(); ?></div>
		</div>
			<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>
		</div>
		

		

	</div>
</div>

