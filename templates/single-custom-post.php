<?php
/**
 * Template Name: Custom Blog Post Template
 * Template Post Type: post
 */

get_header(); 
?>

<div id="primary" class="content-area blog-container">
	<div class="custom-blog-wrap">
		<div class="blog-sidebar-wrap">
		<div class="ready-transfrom-wrap">
			<h3>Ready <br> to transform your <br> health</h3>
			<p>Unlock access to expert guidance and a weight loss plan crafted just for you</p>
			<a href="/get-started/" title="Get Started">Get Started</a>
		</div>
		<div class="latest-post-wrap">
			<h2>Read Next</h2>
			<div class="post-inner">
					<?php
				// Query for the latest posts
				$latest_post_query = new WP_Query( array(
					'posts_per_page' => 3, // Get only the latest 3 posts
					'post_status'    => 'publish'
				) );

				if ( $latest_post_query->have_posts() ) :
					while ( $latest_post_query->have_posts() ) : $latest_post_query->the_post();
						?>
						<div class="latest-post-thumbnail">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'medium' ); ?>
								</a>
							<?php endif; ?>
							<h3 class="latest-post-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();
				else :
					echo '<p>No recent posts available.</p>';
				endif;
				?>
			</div>
		</div>
	</div>
	
	<!-- Main Content -->
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <div class="category-wrap">
					<div class="category-left">
						<?php
						// Get the first category assigned to the post
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
							echo '<p class="category-label">' . esc_html( $categories[0]->name ) . '</p>';
						} else {
							echo '<p class="category-label">Uncategorized</p>';
						}
						?>
						<p class="post-update">Updated on <?php the_modified_date(); ?></p>
					</div>
					<div class="icons-box">
						<a href="#">
							<img src="https://blueridgemeds.com/wp-content/uploads/2024/10/facebook-app-symbol_20837-2.png" alt="facebook" />
						</a>
						<a href="#">
							<img src="https://blueridgemeds.com/wp-content/uploads/2024/10/instagram_733614-1.png" alt="instagram" />
						</a>
						<a href="#">
							<img src="https://blueridgemeds.com/wp-content/uploads/2024/10/twitter_5968958-1.png" alt="twitter" />
						</a>
					</div>
                </div>
				
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>
				
				<!-- Excerpt Section -->
				<?php if( get_field('excerpt') ): ?>
                    <div class="post-excerpt">
                        <?php echo wpautop( get_field('excerpt') ); ?>
                    </div>
                <?php endif; ?>
				
<!-- 				<div class="user-avatar-title">
					<img src="https://blueridgemedev.wpenginepowered.com/wp-content/uploads/2024/10/Ellipse-108-2.png" alt="" />
					<span>
						Lorem Ipsum
					</span>
				</div> -->
				
				<div class="author-wrap">
					<a href="/">
						<img src="https://blueridgemeds.com/wp-content/uploads/2024/08/KxBL8CTz1ZiDbTn8PeRg1JLSW4.avif" alt="blueridgemeds" />
					</a>
					<span>
						blueridgemeds
					</span>
				</div>
				
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="featured-image">
						<?php the_post_thumbnail( 'large' ); // Use 'large', 'medium', or custom sizes ?>
					</div>
				<?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
				
            </article>
            <?php
        endwhile;
        ?>
		
    </main>
	</div>
</div>

<!-- Similar Articles Section -->
<div class="similar-article-wrap">
	<div class="blog-container">
		<h2>Similar Articles</h2>
	<div class="blog-post-list">
		<?php
			// Query to get all posts
			$all_posts_query = new WP_Query( array(
				'posts_per_page' => -1, // Use -1 to display all posts
				'post_status'    => 'publish'
			) );

			if ( $all_posts_query->have_posts() ) :
				while ( $all_posts_query->have_posts() ) : $all_posts_query->the_post();
					?>
					<div class="post-item">
						<div class="post-thumbnail">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'medium' ); ?>
								</a>
							<?php endif; ?>
						</div>
						<div class="post-info">
							<h3 class="post-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
						<a class="post-read-more" href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			else :
				echo '<p>No recent posts available.</p>';
			endif;
		?>
	</div>
	<div class="ready-transfrom-wrap ready-tranform-bottom">
		<h3>Ready to transform your health?</h3>
		<p>Unlock access to expert guidance and a weight core plan <br> crafted just for you</p>
		<a href="/get-started/" title="Get Started">Get Started</a>
	</div>
	</div>
</div>

<script>
    jQuery(document).ready(function($) {
        $('.blog-post-list').slick({
            slidesToShow: 4.2,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
			infinite:false,
            responsive: [
				{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3.2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2.2,
                    }
                },
				{
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1.2,
                    }
                },
            ]
        });
    });
</script>

<?php get_footer(); ?>
