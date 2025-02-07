<?php /* Template Name: Returns Policy */ ?>
<?php get_header(); ?>


<section class="page-content-header returns-policy-header">
    <div class="container">
        <div class="header-content-box">
            <?php 
                $returns_policy_header_content = get_field('returns_policy_content');
                $heading = $returns_policy_header_content['heading'] ?? '';  
                $description = $returns_policy_header_content['description'] ?? '';
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

<section class="page-content-wrap returns-policy-content">
    <div class="container">
        <div class="page-content-inner">
            <p>If you have any concerns or dissatisfaction with the services provided through BlueRidge Meds, we encourage you to reach out to us at <a href="mailto:ask@blueridgemeds.com">ask@blueridgemeds.com</a>.</p>
            <p>Please note that due to the unique nature of our operations, we are unable to accommodate returns. Once your healthcare provider has submitted your prescription for fulfillment, the transaction is considered final.
            </p>
            <p>There are situations where we may offer replacements, particularly in the case of damaged during delivery. Your satisfaction and well-being remain our top priorities, and we are committed to addressing any issues you may encounter with our services.</p>
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