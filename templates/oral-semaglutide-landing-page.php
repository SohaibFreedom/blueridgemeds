<?php /* Template Name: Oral Semaglutide Landing Page */ ?>
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

<?php if (have_rows('logo_images')): ?>
	<div class="product-marquee blue-ridge-slider">
		<section class="enable-animation">
			<div class="marquee">
				<ul class="marquee__content">
					<?php while (have_rows('logo_images')): the_row();
					$image = get_sub_field('image');
					?>
					<li>
						<div class="marquee_img strike">
							<img src="<?php echo $image; ?>" alt="">
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
				<ul class="marquee__content">
					<?php while (have_rows('logo_images')): the_row();
					    $image = get_sub_field('image');
					?>
					<li>
						<div class="marquee_img strike">
							<img src="<?php echo $image; ?>" alt="">
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
                <ul class="marquee__content">
					<?php while (have_rows('logo_images')): the_row();
					    $image = get_sub_field('image');
					?>
					<li>
						<div class="marquee_img strike">
							<img src="<?php echo $image; ?>" alt="">
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
                <ul class="marquee__content">
					<?php while (have_rows('logo_images')): the_row();
					    $image = get_sub_field('image');
					?>
					<li>
						<div class="marquee_img strike">
							<img src="<?php echo $image; ?>" alt="">
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</section>
	</div>
<?php endif; ?>


<section id="weightlossprograms" class="invest-guidance-wrap">
        <?php 
            $invest_guidance = get_field('guidance_details');
        ?>
    <div class="container">
        <div class="guidance-details-box">
            <h3 class="new-style-heading"><?php echo $invest_guidance['heading'] ?? ''; ?></h3>
            <p><?php echo $invest_guidance['guide_description'] ?? ''; ?></p>
        
            <?php if (have_rows('medicine_guidance_block')): ?>
                <div class="guidance-inner-content">
                    <?php while (have_rows('medicine_guidance_block')): the_row();
                        $image = get_sub_field('image'); 
                        $pricing_starting_at = get_sub_field('pricing_starting_at');
                        $medication_option = get_sub_field('medication_option');
						$link_get_started = get_sub_field('link_get_started');
						$get_started_text = get_sub_field('text_get_started');
						$link_learn_more = get_sub_field('link_learn_more');
						$learn_more_text = get_sub_field('text_learn_more');
                        ?>
                        
                        <div class="guidance-box">
                            <?php if ($image): ?>
                                <img src="<?php echo $image; ?>" alt="">
                            <?php endif; ?>

                            <?php if ($pricing_starting_at): ?>
                                <span><?php echo $pricing_starting_at; ?></span>
                            <?php endif; ?>

                            <?php if ($medication_option): ?>
                                <p><?php echo $medication_option; ?></p>
                            <?php endif; ?>
							
							<div class="button-wrapper">
								<a class="button button--primary" href="<?php echo esc_url( $link_get_started ); ?>">
										<?php echo $get_started_text; ?>
								</a>
								<a class="button button--secondary" href="<?php echo esc_url( $link_learn_more ); ?>">
										<?php echo $learn_more_text; ?>
								</a>
							</div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="pricing" class="pricing-plans-tab-wrap">
    <?php 
        $pricing_plans_tabs = get_field('pricing_details');
        $heading = $pricing_plans_tabs['heading'];
        $short_description = $pricing_plans_tabs['short_description'];
		$link_text = $pricing_plans_tabs['link_text'];
		$link = $pricing_plans_tabs['link'];
    ?>
    <div class="container">
        <?php if ($heading): ?>
            <h3 class="new-style-heading"><?php echo $heading; ?></h3>
        <?php endif; ?>
        <?php if ($short_description): ?>
            <p class="top-description"><?php echo $short_description; ?></p>
        <?php endif; ?>
        <div class="pricing-plans-tabs">
            <ul class="tab-header">
                <li class="active"><a href="#monthly">Monthly Membership</a></li>
                <li><a href="#3month">3 Month Membership</a></li>
            </ul>
            <div class="tab-content">
                <!-- Monthly Membership Content -->
                <?php if (have_rows('monthly_tab_content')): ?>
                    <div id="monthly" class="tab-grid tab-pane active">
                            <?php while (have_rows('monthly_tab_content')): the_row(); 
                                $membership_plan = get_sub_field('membership_plan');
                                $plan_name = get_sub_field('plan_name');
                                $plan_amount = get_sub_field('plan_amount');
                            ?>
                            <div class="tab-inner-content">
                                <?php if ($membership_plan): ?>
                                    <h4><?php echo $membership_plan; ?></h4>
                                <?php endif; ?>
                                <div class="box-content">
                                    <?php if ($plan_name): ?>
                                        <p class="monthly"><?php echo $plan_name; ?></p>
                                    <?php endif; ?>
                                    <?php if ($plan_amount): ?>
                                        <p class="amount"><?php echo $plan_amount; ?></p>
                                    <?php endif; ?>
                                    <?php if (have_rows('membership_features')): ?>
                                        <ul>
                                            <?php while (have_rows('membership_features')): the_row(); 
                                                $image = get_sub_field('image'); 
                                                $membership_text = get_sub_field('membership_text');
                                            ?>
                                            <li>
                                                <?php if ($image): ?>
                                                    <img src="<?php echo $image; ?>" alt="">
                                                <?php endif; ?>
                                                <?php if ($membership_text): ?>
                                                    <span><?php echo $membership_text; ?></span>
                                                <?php endif; ?>
                                            </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- Monthly Membership Content -->
                <?php if (have_rows('3_monthly_tab_content')): ?>
                    <div id="3month" class="tab-grid tab-pane">
                            <?php while (have_rows('3_monthly_tab_content')): the_row(); 
                                $membership_plan = get_sub_field('membership_plan');
                                $plan_name = get_sub_field('plan_name');
                                $plan_amount = get_sub_field('plan_amount');
                                $save_amount = get_sub_field('save_amount');
                                $prepared_3_months = get_sub_field('prepared_3_months');
                            ?>
                            <div class="tab-inner-content">
                                <?php if ($membership_plan): ?>
                                    <h4><?php echo $membership_plan; ?></h4>
                                <?php endif; ?>
                                <div class="box-content">
                                    <?php if ($plan_name): ?>
                                        <p class="monthly"><?php echo $plan_name; ?></p>
                                    <?php endif; ?>
                                    <?php if ($plan_amount): ?>
                                        <p class="amount"><?php echo $plan_amount; ?></p>
                                    <?php endif; ?>
                                    <?php if ($save_amount): ?>
                                        <p class="save-amount"><?php echo $save_amount; ?></p>
                                    <?php endif; ?>
                                    <?php if (have_rows('membership_features')): ?>
                                        <ul>
                                            <?php while (have_rows('membership_features')): the_row(); 
                                                $image = get_sub_field('image'); 
                                                $membership_text = get_sub_field('membership_text');
                                            ?>
                                            <li>
                                                <?php if ($image): ?>
                                                    <img src="<?php echo $image; ?>" alt="">
                                                <?php endif; ?>
                                                <?php if ($membership_text): ?>
                                                    <span><?php echo $membership_text; ?></span>
                                                <?php endif; ?>
                                            </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <?php if ($prepared_3_months): ?>
                                        <p class="prepared-amount"><?php echo $prepared_3_months; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="tabs-button-wrapper">
                <a class="button button--secondary" href="<?php echo $pricing_plans_tabs['link']; ?>" title="Get Started">
					<?php echo $pricing_plans_tabs['link_text']; ?>
				</a>
            </div>
        </div>
    </div>
</section>

<section id="howitworks" class="how-to-started-wrap">
    <div class="container">
        <?php 
            $how_to_get_started = get_field('started_details');
			$link_text = get_field('link_text');
			$link = get_field('link');
        ?>
        <h3 class="new-style-heading"><?php echo $how_to_get_started['heading'] ?? ''; ?></h3>
        
        <?php if (have_rows('started_inner_block')): ?>
            <div class="start-inner-wrap">
                <?php while (have_rows('started_inner_block')): the_row();
                    $image = get_sub_field('image'); 
                    $info_text = get_sub_field('info_text');
                    ?>
                    
                    <div class="start-inner-box">
                        <?php if ($image): ?>
                            <img src="<?php echo $image ?>" alt="">
                        <?php endif; ?>
                        <?php if ($info_text): ?>
                            <p class="brd-description"><?php echo $info_text; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
		<?php endif; ?>
            <div class="button-wrapper">
                <a class="button button--secondary" href="<?php echo $how_to_get_started['link']; ?>" title="Get Started">
					<?php echo $how_to_get_started['link_text']; ?>
				</a>
            </div>
    </div>
</section>

<section class="client-feedback-wrap">
    <div class="container">
        <div class="feedback-box">
            <div class="content-box">
                <?php 
                    $client_feedback_details = get_field('client_feedback_details');
                    $image = $client_feedback_details['image'] ?? '';  
                    $description = $client_feedback_details['description'] ?? '';
                ?>
                <img class="start-quote" src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/quote-start.png">
                <?php if ($description): ?>
                    <p><?php echo $description; ?></p>
                <?php endif; ?>
                <img class="end-quote" src="https://blueridgemeds.wpenginepowered.com/wp-content/uploads/2024/08/quote-end.png">
            </div>
            <div class="img-box">
                <?php if ($image): ?>
                    <img src="<?php echo $image; ?>" alt="">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="expertly-supervised-wrap">
    <div class="container">
        <?php 
            $expertly_supervised_content = get_field('expertly_supervised_content');
            $heading = $expertly_supervised_content['heading'] ?? '';
            $image = $expertly_supervised_content['image'] ?? '';
        ?>
        <div class="expertly-supervised-content">
            <?php if ($heading): ?>
                <h3 class="new-style-heading"><?php echo $heading; ?></h3>
            <?php endif; ?>
            <div class="medication-details">
                <?php if (have_rows('medication_timeline_section')): ?>
                    <div class="medication-content">
                        <?php while (have_rows('medication_timeline_section')): the_row(); 
                            $medication_heading = get_sub_field('medication_heading');
                            $medication_description = get_sub_field('medication_description');
                        ?>
                        <div class="medication-timeline-section timeline">
                            <div class="timeline-item left">
                                <div class="content">
                                    <?php if ($medication_heading): ?>
                                        <h4><?php echo $medication_heading; ?></h4>
                                    <?php endif; ?>
                                    <?php if ($medication_description): ?>
                                        <p><?php echo $medication_description; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <div class="medication-img">
                    <?php if ($image): ?>
                        <img src="<?php echo $image; ?>" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="weight-loss-wrap">
    <div class="container">
        <?php 
            $weight_loss_details = get_field('weight_loss_details');
            $heading = $weight_loss_details['top_heading_weight'] ?? '';
            $image = $weight_loss_details['image'] ?? '';   
            ?>
        <div class="experience-weight-content">
            <?php if ($heading): ?>
                <h3 class="new-style-heading"><?php echo $heading; ?></h3>
            <?php endif; ?>
            <?php if (have_rows('weight_loss_list')): ?>
                <div class="weight-loss-list">
                    <?php while (have_rows('weight_loss_list')): the_row();
                        $check_image = get_sub_field('check_image');
                        $text = get_sub_field('text');
                        ?>
                        
                        <div class="list-text">
                            <?php if ($image): ?>
                                <img src="<?php echo $check_image ?>" alt="">
                            <?php endif; ?>
                            <?php if ($text): ?>
                                <p><?php echo $text; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="weight-loss-img">
                <?php if ($image): ?>
                    <img src="<?php echo $image; ?>" alt="">
                <?php endif; ?>
            </div>

            <?php if (have_rows('member_success_stats')): ?>
                <div class="stat-wrap">
                    <?php while (have_rows('member_success_stats')): the_row();
                        $stat_heading = get_sub_field('stat_heading');
                        $stat_description = get_sub_field('stat_description');
                        ?>
                        <div class="member-success-stats">
                            <?php if ($stat_heading): ?>
                                <h4><?php echo $stat_heading; ?></h4>
                            <?php endif; ?>
                            <?php if ($stat_description): ?>
                                <p><?php echo $stat_description; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="faq" class="Frequently-asked-question">
        <?php 
            $frequently_asked_question = get_field('frequently_question_details');
            $heading = $frequently_asked_question['heading'] ?? '';
        ?>
    <div class="container">
        <?php if ($heading): ?>
            <h3 class="new-style-heading">Frequently Asked Questions</h3>
        <?php endif; ?>
        <?php if (have_rows('frequently_asked_accordion')): ?>
            <div class="Frequently-accordion">
                <?php while (have_rows('frequently_asked_accordion')): the_row();
                    $acc_heading = get_sub_field('acc_heading');
                    $acc_content = get_sub_field('acc_content');
                ?>
                <div class="Accordion-box">
                    <div class="Acc-Heading">
                        <?php if ($acc_heading): ?>
                            <h3><?php echo $acc_heading; ?></h3>
                        <?php endif; ?>
                    </div>
                    <div class="Acc-Content">
                        <?php if ($acc_content): ?>
                            <p><?php echo $acc_content; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer() ?>