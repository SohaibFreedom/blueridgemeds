<?php
/**
 * Payment methods
 * Div-based version with "Visa" only in Method column and Title removed.
 */

defined( 'ABSPATH' ) || exit;

$saved_methods = wc_get_customer_saved_methods_list( get_current_user_id() );
$has_methods   = (bool) $saved_methods;
$types         = wc_get_account_payment_methods_types();

// Remove the Title column from the list of columns
$columns = wc_get_account_payment_methods_columns();
unset( $columns['title'] );

do_action( 'woocommerce_before_account_payment_methods', $has_methods ); ?>

<?php if ( $has_methods ) : ?>

    <div class="woocommerce-MyAccount-paymentMethods account-payment-methods-container">
        <div class="payment-methods-header">
            <?php foreach ( $columns as $column_id => $column_name ) : ?>
                <div class="payment-header-text payment-method-<?php echo esc_attr( $column_id ); ?>">
                    <p><?php echo esc_html( $column_name ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="payment-method-list">
            <?php foreach ( $saved_methods as $type => $methods ) : ?>
                <?php foreach ( $methods as $method ) : ?>
                    <div class="payment-method-item<?php echo ! empty( $method['is_default'] ) ? ' default-payment-method' : ''; ?>">
                        <?php foreach ( $columns as $column_id => $column_name ) : ?>
                            <div class="payment-item-text payment-method-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
                                <p class="payment-label"><?php echo esc_html( $column_name ); ?>:</p>
                                <?php
                                if ( has_action( 'woocommerce_account_payment_methods_column_' . $column_id ) ) {
                                    do_action( 'woocommerce_account_payment_methods_column_' . $column_id, $method );
                                } elseif ( 'method' === $column_id ) {
                                    echo '<p class="method-text">' . esc_html__( 'Visa', 'woocommerce' ) . '</p>';
                                } elseif ( 'expires' === $column_id ) {
                                    echo '<p class="method-text">' . esc_html( $method['expires'] ) . '</p>';
                                } elseif ( 'actions' === $column_id ) {
                                    foreach ( $method['actions'] as $key => $action ) {
                                        echo '<a href="' . esc_url( $action['url'] ) . '" class="button ' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a>';
                                    }
                                }
                                ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>

<?php else : ?>

    <?php wc_print_notice( esc_html__( 'No saved methods found.', 'woocommerce' ), 'notice' ); ?>

<?php endif; ?>

<?php do_action( 'woocommerce_after_account_payment_methods', $has_methods ); ?>

<?php if ( WC()->payment_gateways->get_available_payment_gateways() ) : ?>
    <a class="button add-payment-methods" href="<?php echo esc_url( wc_get_endpoint_url( 'add-payment-method' ) ); ?>">
        <?php esc_html_e( 'Add payment method', 'woocommerce' ); ?>
    </a>
<?php endif; ?>
