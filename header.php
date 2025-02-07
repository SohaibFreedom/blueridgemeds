<?php
/**
 * The template for displaying the header.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	
	<script src="https://cdn.attn.tv/blueridgemeds/dtag.js"></script>
	
	<!-- Reddit Pixel -->
<script>
!function(w,d){if(!w.rdt){var p=w.rdt=function(){p.sendEvent?p.sendEvent.apply(p,arguments):p.callQueue.push(arguments)};p.callQueue=[];var t=d.createElement("script");t.src="https://www.redditstatic.com/ads/pixel.js",t.async=!0;var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(t,s)}}(window,document);rdt('init','a2_fy5jzd79az5x');rdt('track', 'PageVisit');
</script>
<!-- DO NOT MODIFY UNLESS TO REPLACE A USER IDENTIFIER -->
<!-- End Reddit Pixel -->
	
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2QTKPH1WTT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2QTKPH1WTT');
</script>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBTJSGDC');</script>
<!-- End Google Tag Manager -->
	
	
	<script async src="https://www.googletagmanager.com/gtag/js?id=GTM-WBTJSGDC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'GTM-WBTJSGDC');
</script>

	
	
    <meta charset="<?php bloginfo('charset'); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php generate_do_microdata('body'); ?>>
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBTJSGDC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	
    <?php
    /**
     * GeneratePress before_header hook.
     *
     * @since 0.1
     */
    do_action('generate_before_header');
    ?>

	<div class="main-announcement-bar">
		<a href="/get-started/" style="text-decoration:none;">Valentine’s Day special Sale | $50 OFF Any Dosage | $100 Off for New GLP-1 Users</a>
	</div>
    <header id="masthead" class="site-header">
        <div class="container">

            <div class="inside-header grid-container grid-parent">

                <!-- Custom Logo Section -->
                <div class="site-logo">
                    <?php if (has_custom_logo()): ?>
                        <?php the_custom_logo(); ?>
                    <?php else: ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <?php bloginfo('name'); ?>
                            </a>
                        </h1>
                    <?php endif; ?>
                </div>
                <div class="header-content-wrapper">

                    <div class="mobile-cross-button">
                    <div class="toggle-cross-icon">
                        <span></span>
                        <span></span>
                    </div>
                    </div>
               



                    <!-- Custom Navigation Menu -->
                    <nav id="site-navigation" class="main-navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_id' => 'primary-menu',
                        ));
                        ?>
                    </nav><!-- #site-navigation -->

                    <!-- Custom Header Widgets or Social Links -->
                    <div class="header-widgets">
                        <?php if (is_active_sidebar('header-widget')): ?>
                            <?php dynamic_sidebar('header-widget'); ?>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="toggle-menu-icon" id="icon-toggle-mob">
                    <div class="hamburger-toggle-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>



            </div><!-- .inside-header -->

        </div>
    </header><!-- #masthead -->

    <?php
    /**
     * GeneratePress after_header hook.
     *
     * @since 0.1
     */
    do_action('generate_after_header');
    ?>

    <div <?php generate_do_attr('page'); ?>>
        <?php
        /**
         * generate_inside_site_container hook.
         *
         * @since 2.4
         */
        do_action('generate_inside_site_container');
        ?>
        <div <?php generate_do_attr('site-content'); ?>>
            <?php
            /**
             * generate_inside_container hook.
             *
             * @since 0.1
             */
            do_action('generate_inside_container');
