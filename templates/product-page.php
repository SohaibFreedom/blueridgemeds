<?php /* Template Name: Product Page Template */ ?>
<?php get_header(); ?>


<section class="product-page-wrapper">
    <div class="product-page-inner">
        <?php 
            $product_page = get_field('product_main_content');
            $product_img = $product_page['product_img'];
            $product_title = $product_page['product_title'];
            $price = $product_page['price'];
            $product_description = $product_page['product_description'];
            $product_additional_content = $product_page['product_additional_content'];
        ?>
        <div class="product-img">
            <?php if ($product_img): ?>
                <img src="<?php echo $product_img; ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="product-details">
            <?php if ($product_title): ?>
                <h3 class="product-title"><?php echo $product_page['product_title']; ?></h3>
            <?php endif; ?>
            <?php if ($price): ?>
                <span class="product-price"><?php echo $product_page['price']; ?></span>
            <?php endif; ?>
            <?php if ($product_description): ?>
                <p class="product-description"><?php echo $product_page['product_description']; ?></p>
            <?php endif; ?>
			<?php
			$link = get_field('product_link');
			$link_text = get_field('link_text');
			if( $link ): ?>
				<div class="product-button-wrap">
					<a href="<?php echo esc_url( $link ); ?>">
						<?php echo $link_text; ?>
					</a>
				</div>
			<?php endif; ?>
            <?php if ( have_rows('single_product_accordion') ): ?>
                <div class="product-accordion-wrap">
                    <?php while ( have_rows('single_product_accordion') ): the_row(); ?>
                        <div class="product-accordion-box">
                            <div class="Acc-Heading">
                                <h3><?php the_sub_field('acc_heading'); ?></h3>
                            </div>
                            <div class="Acc-Content">
                                <?php the_sub_field('acc_content'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php if ($product_additional_content): ?>
                <div class="product-additional-content"><?php echo $product_page['product_additional_content']; ?></div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer() ?>