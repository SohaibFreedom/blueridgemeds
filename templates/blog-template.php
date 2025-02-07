<?php
/**
 * Template Name: Custom Blog Template
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
		
        <!-- Blog Header Section -->
        <div class="blog-top-wrap">
            <h2>Blogs</h2>
            <p>Dive into the world of obesity medicine and explore helpful <br> resources written by health experts.</p>
            <?php get_search_form(); ?>
        </div>
		
        <!-- Featured Posts Section -->
        <div class="featured-post-wrap">
            <h3 class="feature-heading">Featured Reads</h3>
            <div class="featured-post-list">
                <?php
                // Query posts from the 'Featured Blog Posts' category
                $featured_args = array(
                    'category_name'  => 'featured-post', // Category slug
                    'posts_per_page' => -1, // Show all posts in this category
                    'post_status'    => 'publish'
                );

                $featured_query = new WP_Query( $featured_args );

                if ( $featured_query->have_posts() ) :
                    while ( $featured_query->have_posts() ) : $featured_query->the_post();
                        ?>
                        <div class="featured-post-item">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="featured-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'medium' ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
							
                            <div class="featured-post-details">
								<img class="post-arrow" src="https://blueridgemedev.wpenginepowered.com/wp-content/uploads/2024/10/arrow-vector.png" alt="" />
                                <h4 class="featured-post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <a class="featured-read-more" href="<?php the_permalink(); ?>">Read More</a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata(); // Reset after custom query
                else :
                    echo '<p>No featured posts available.</p>';
                endif;
                ?>
            </div>
        </div>
	
        <!-- Category Tabs and Posts -->
        <div class="blog-category-tab-wrap">
            <div class="category-tabs">
                <!-- Tab Headers -->
                <ul class="tab-header">
                    <li class="active"><a href="#all" data-category="all">All</a></li>
                    <li><a href="#medications" data-category="medications">Medications</a></li>
                    <li><a href="#nutrition" data-category="nutrition">Nutrition</a></li>
                    <li><a href="#weightloss" data-category="weightloss">Weight Loss</a></li>
                    <li><a href="#women-health" data-category="women-health">Women’s Health</a></li>
                </ul>
            </div>

            <!-- Tab Content Area -->
            <div class="tab-content">
                <div class="category-post-list">
                    <?php
                    // Fetch all posts
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => -1,
                        'post_status'    => 'publish',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            $categories = get_the_category();
                            $category_slugs = [];
                            foreach ($categories as $category) {
                                $category_slugs[] = $category->slug;
                            }
                            ?>
                            <div class="category-post-item" data-category="<?php echo implode(' ', $category_slugs); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('large'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="category-post-deatils">
                                    <img class="post-arrow" src="https://blueridgemedev.wpenginepowered.com/wp-content/uploads/2024/10/arrow-vector.png" alt="" />
                                    <h4 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <p><?php the_excerpt(); ?></p>
                                    <a class="category-read-more" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p>No posts available.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </main>
</div>

<!-- JavaScript for Slick Slider and Category Tabs -->
<script>
    jQuery(document).ready(function($) {
        // Slick Slider for Featured Posts
        $('.featured-post-list').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            infinite: false,
            responsive: [
                { breakpoint: 1024, settings: { slidesToShow: 3 }},
                { breakpoint: 768, settings: { slidesToShow: 2 }},
                { breakpoint: 550, settings: { slidesToShow: 1 }}
            ]
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const tabLinks = document.querySelectorAll(".tab-header a");
        const posts = document.querySelectorAll(".category-post-item");

        tabLinks.forEach(link => {
            link.addEventListener("click", function (event) {
                event.preventDefault();

                // Update active tab
                tabLinks.forEach(link => link.parentElement.classList.remove("active"));
                this.parentElement.classList.add("active");

                // Filter posts by selected category
                const selectedCategory = this.getAttribute("data-category");

                posts.forEach(post => {
                    const postCategories = post.getAttribute("data-category").split(" ");
                    post.style.display = (selectedCategory === "all" || postCategories.includes(selectedCategory)) ? "block" : "none";
                });
            });
        });
    });
</script>

<?php get_footer(); ?>
