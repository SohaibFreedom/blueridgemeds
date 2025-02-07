<?php /* Template Name: Shipping Policy */ ?>
<?php get_header(); ?>

<section class="page-content-header shipping-policy-header">
    <div class="container">
        <div class="header-content-box">
            <?php 
                $shipping_policy = get_field('shipping_details');
                $heading = $shipping_policy['heading'] ?? '';  
                $description = $shipping_policy['description'] ?? '';
            ?>

            <?php if ($heading): ?>
                <h2><?php echo $heading; ?></h2>
            <?php endif; ?>

            <?php if ($description): ?>
                <p><?php echo $description; ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="page-content-wrap shipping-policy-content">
    <div class="container">
        <div class="page-content-inner">
            <p>Our services are presently accessible throughout the U.S., except in Alabama, Arkansas, California, and Mississippi. Once approved for the weight management program through our partnering provider network, you may receive your prescribed treatment within 5-10 business days. Your treatment will only be processed and dispatched after you've completed an online visit with a medical providers and have been cleared for treatment. We do not ship internationally at this time.</p>
            <p>Please note that BlueRidge Meds is not liable for incorrectly entered delivery addresses. Kindly verify your provided delivery address on your portal, and reach out to us at <a href="mailto:ask@blueridgemeds.com">ask@blueridgemeds.com</a> if you need assistance.</p>
        </div>
    </div>
</section>

<section class="live-support-section">
    <div class="container">
        <div class="support-content-wrap">
            <div class="support-info">
                <h3>Do you still have questions?</h3>
                <p>Call us for LIVE support now!</p>
                <a href="tel:1-855-295-2583">1-855-295-BLUE (2583)</a>
            </div>
            <div class="support-action">
                <a class="chat-with-us" href="/contact-us" title="Chat with us">Chat with us</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>