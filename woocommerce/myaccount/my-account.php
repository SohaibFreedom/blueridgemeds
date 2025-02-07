<?php
/**
 * My Account page
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
?>

<?php
// Get the current endpoint
$current_endpoint = WC()->query->get_current_endpoint();

// Create a dynamic class based on the current endpoint
$endpoint_class = ! empty( $current_endpoint ) ? 'endpoint-' . sanitize_html_class( $current_endpoint ) : 'dashboard';
?>

<div class="account-dashboard-wrap <?php echo esc_attr( $endpoint_class ); ?>">
    <div class="account-header">
        <div class="profile-name">
            <?php
            if ( is_user_logged_in() ) {
                $current_user = wp_get_current_user();
                echo '<p>Hello, ' . esc_html( $current_user->display_name ) . '</p>';
            }
            ?>
        </div>
        <a href="<?php echo esc_url( wc_get_account_endpoint_url( 'customer-logout' ) ); ?>" class="signout-btn">Sign out</a>

    </div>

    <?php do_action( 'woocommerce_account_navigation' ); ?>

    <div class="woocommerce-MyAccount-Wrap">

        <?php
        // Fetch the endpoint titles dynamically
        $endpoint_titles = wc_get_account_menu_items();

        // Check for the current endpoint and set the title
        if ( ! empty( $current_endpoint ) && $current_endpoint !== 'dashboard' ) {
            // Special case for 'add-payment-method' endpoint
            if ( $current_endpoint === 'add-payment-method' ) {
                $title = esc_html__( 'Add Payment Method', 'woocommerce' );
            } 
            // Special case for 'view-subscription' endpoint
            elseif ( $current_endpoint === 'view-subscription' ) {
                global $wp;
                if ( isset( $wp->query_vars['view-subscription'] ) ) {
                    $subscription_id = intval( $wp->query_vars['view-subscription'] );
                    $title = esc_html__( 'Subscription #' . $subscription_id, 'woocommerce' );
                } else {
                    $title = esc_html__( 'Subscription', 'woocommerce' );
                }
            }
            // Special case for 'view-order' endpoint
            elseif ( $current_endpoint === 'view-order' ) {
                global $wp;
                if ( isset( $wp->query_vars['view-order'] ) ) {
                    $order_id = intval( $wp->query_vars['view-order'] );
                    $title = esc_html__( 'Order #' . $order_id, 'woocommerce' );
                } else {
                    $title = esc_html__( 'Order', 'woocommerce' );
                }
            } 
            // Default case for other endpoints
            else {
                $title = isset( $endpoint_titles[ $current_endpoint ] ) ? $endpoint_titles[ $current_endpoint ] : '';
            }

            if ( ! empty( $title ) ) {
                echo '<h3 class="my-account-page-title">' . esc_html( $title ) . '</h3>';
            }
        }
        ?>

        <div class="woocommerce-MyAccount-content">
            <?php
            if ( empty( $current_endpoint ) || $current_endpoint === 'dashboard' ) {
                ?>
                <div class="woocommerce-MyAccount-custom">
                    <img class="myaccount-logo-img" src="https://blueridgemeds.com/wp-content/uploads/2024/08/KxBL8CTz1ZiDbTn8PeRg1JLSW4.avif" alt="Logo">
                    <p>Welcome to your BlueRidge Meds account dashboard. From <br> here you can view current orders and subscriptions. You <br>can also update payment methods and addresses.</p>
                </div>
                <?php
            } else {
                // Display default content for other My Account pages
                do_action( 'woocommerce_account_content' );
            }
            ?>
        </div>
    </div>
</div>
