<?php
/**
 * Template Name: Blog nutrafol
 */
get_header();
?>
<style>
    .unique-featured-post-item{
        display: flex;
        width: 100%;
    }
    .unique-featured-thumbnail{
        width: 70%;
    }
	.blog-category-tab-wrap {
    padding: 0;
}
    .unique-featured-thumbnail > a{
        width: 100%;
        height: 100%;
    }
    .unique-featured-thumbnail > a > img{
        width: 100%;
        height: 100%;
    }
    .unique-featured-post-details{
        padding: 50px;
    }
    .unique-featured-post-details{
        padding: 50px;
        background: #eaf2f1;
        width: 50%;
    }
    .unique-cat-acf{
        display: flex;
        align-items: center;
		margin-top: 15px;
    }
    .unique-cat-acf > p{
        font-size: 14px;
        line-height: 20px;
        color: #1E1E1E;
        opacity: 0.8;
        margin: 0;
        font-family: "Roboto", sans-serif;
    }
    .unique-separate-slash{
        margin-left: 10px;
        width: 10px;
        border-left: 1px solid rgb(115, 114, 115);
        height: 15px;
        align-items: center;
    }
    .unique-featured-post-title > a{
        text-align: left;
        color: rgb(45, 45, 45);
        font-size: 32px;
        font-weight: 300;
        line-height: 43px;
		margin-bottom:1rem;
    }
    .unique-category-post-deatils{
        padding: 20px 0px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        height: 150px;
        display: flex;
        flex-direction: column;
    }
	.unique-post-thumbnail img{
		border-top-left-radius: 0px !important;
        border-top-right-radius: 0px !important;
	}
	.unique-category-post-deatils .post-title a{
		font-weight: 300 !important;
		padding-bottom: 0px;
	}
	@media (max-width: 1024px) {
    .unique-site-main .category-post-list {
        padding: 30px 15px 5px;
    }
}
	@media only screen and (max-width: 1024px){
		.unique-featured-post-title > a{
			font-size: 24px;
		}
	}
    @media only screen and (max-width: 767px){
		.unique-featured-post-title > a{
			font-size: 24px;
		}
        .unique-featured-post-item{
            flex-direction: column;
        }
        .unique-featured-post-details{
            order: 2;
            width: 100%;
            margin-top: -9px;
			padding: 10px 24px;
            padding-bottom: 50px;
            background: #eaf2f1;
        }
        .unique-featured-thumbnail{
            order: 1;
            width: 100%;
        }
    }
</style>
<div id="primary" class="content-area">
    <main id="main" class="site-main unique-site-main">
		
		
  <!-- Unique Featured Posts Section -->
<div class="unique-featured-post-wrap">
    <div class="unique-featured-post-list">
        <?php
        // Query a single post from the 'Featured Blog Posts' category with the 'main_feature_blog' tag
        $unique_featured_args = array(
            'category_name'  => 'featured-post', // Category slug
            'tag'            => 'main_feature_blog', // Tag slug
            'posts_per_page' => 1, // Show only one post
            'post_status'    => 'publish'
        );

        $unique_featured_query = new WP_Query( $unique_featured_args );

        if ( $unique_featured_query->have_posts() ) :
            while ( $unique_featured_query->have_posts() ) : $unique_featured_query->the_post();
                ?>
                <div class="unique-featured-post-item">
              
                    
                    <div class="unique-featured-post-details">
                        <h4 class="unique-featured-post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <div class="unique-cat-acf">
                        <?php
                        // Display category name
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) :
                            echo '<p class="unique-post-category">' . esc_html( $categories[0]->name ) . '</p>';
                        endif;
                        ?>
                       <span class="unique-separate-slash"></span>
                        <?php
                        // Display "Mins read" ACF field
                        $mins_read = get_field('mins_read'); // Replace 'mins_read' with your ACF field name
                        if ( $mins_read ) :
                            echo '<p class="unique-post-mins-read">' . esc_html( $mins_read ) . '</p>';
                        endif;
                        ?>
                        </div>
                    
                    </div>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="unique-featured-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'medium' ); ?>
                            </a>
                        </div>
                    <?php endif; ?>
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
                                    <div class="post-thumbnail unique-post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('large'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <div class="unique-category-post-deatils">
                                    <img class="post-arrow" src="https://blueridgemedev.wpenginepowered.com/wp-content/uploads/2024/10/arrow-vector.png" alt="" />
                                    <h4 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <div class="unique-cat-acf"> 
                                    <?php
                        // Display category names
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) :
                            echo '<p class="post-category">' . esc_html( $categories[0]->name ) . '</p>';
                        endif;
                        ?>
                        <span class="unique-separate-slash"></span>
                                    <?php
                        // Display "Mins read" ACF field
                        $mins_read = get_field('mins_read'); // Replace 'mins_read' with your ACF field name
                        if ( $mins_read ) :
                            echo '<p class="post-mins-read">' . esc_html( $mins_read ) . '</p>';
                        endif;
                        ?>
                        </div>
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



<?php get_footer(); ?>
