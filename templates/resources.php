<?php
/**
 * Template Name: Blog resources
 */
get_header();
?>

<style>
.resource-blog-wrap {
    padding: 35px 0 70px;
}

.resource-blog-wrap .resource-heading {
    font-size: 80px;
    text-align: center;
    color: var(--blue-light);
    margin-bottom: 24px;
    line-height: 95px;
}

.resource-description {
    font-size: 18px;
    color: var(--blue-light);
    text-align: center;
    line-height: 27px;
}

.resource-blog-wrap .resource-heading span {
    color: var(--blue-shadow);
}

.resource-blog-wrap .resource-post-list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 50px;
    padding-top: 70px;
}

.resource-post-list .post-thumbnail {
    margin-bottom: 20px;
}

.resource-post-list .resources-post-thumbnail img {
    display: block;
}

.resource-post-list .post-tag {
    font-size: 14px;
    color: #7c99a9;
    text-transform: capitalize;
    line-height: 14px;
    display: inline-block;
    position: relative;
}

.resource-post-list .post-tag::after {
    content: "";
    height: 10px;
    width: 1px;
    background: #ccc;
    display: inline-block;
    margin: 0 6px;
    vertical-align: middle;
}

.resource-post-list .post-tag:last-child::after {
    display: none;
}

.resource-post-title a {
    font-size: 18px;
    color: var(--black-color);
    display: block;
    margin: 10px 0 20px;
}

.resource-post-list .author-info-wrap {
    display: flex;
    align-items: center;
    gap: 10px;
}

.resource-post-list .author-info-wrap img {
    max-width: 50px;
}

.author-text .author-title {
    font-size: 14px;
    font-weight: 600;
    display: block;
    line-height: 22px;
}

.author-text .post-date {
    font-size: 12px;
    font-weight: 400;
    display: block;
    line-height: 12px;
}

@media only screen and (max-width: 1024px) {
    .resource-blog-wrap .resource-post-list {
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 30px;
        padding-top: 35px;
    }
    .resource-blog-wrap .resource-heading {
        font-size: 50px;
        line-height: 60px;
    }
    .resource-description {
        font-size: 16px;
        line-height: 25px;
    }
    .resource-blog-wrap {
        padding: 35px 0;
    }
}

@media only screen and (max-width: 768px) {
    .resource-blog-wrap .resource-post-list {
        grid-gap: 20px;
    }
    .resource-post-title a {
        font-size: 14px;
        margin: 8px 0 15px;
    }
    .resource-post-list .post-tag {
        font-size: 12px;
        line-height: 12px;
    }
    .resource-post-list .post-thumbnail {
        margin-bottom: 10px;
    }
    .author-text .author-title {
        font-size: 11px;
        line-height: 18px;
    }
    .author-text .post-date {
        font-size: 11px;
    }
    .resource-post-list .author-info-wrap img {
        max-width: 40px;
    }
    .resource-blog-wrap .resource-heading {
        font-size: 30px;
        line-height: 40px;
        margin-bottom: 15px;
    }
    .resource-description {
        font-size: 14px;
        line-height: 23px;
    }
}

@media only screen and (max-width: 480px) {
    .resource-blog-wrap .resource-post-list {
        grid-template-columns: repeat(1, 1fr);
    }
}
</style>

<div class="resource-blog-wrap">
    <div class="container">
        <h2 class="resource-heading">
            BlueRidge <span>Resource</span> Center
        </h2>
        <p class="resource-description">
            Explore BlueRidge Meds essential resources to enhance your lifestyle and optimize your diet, boosting the effectiveness of your Semaglutide or Tirzepatide weight management program. Discover expert tips and curated articles designed to help you achieve a healthier you.
        </p>
        <div class="resource-post-list">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'category_name'  => 'resources-blog', // Check this slug
            );

            $query = new WP_Query($args);

            // Debug: Print the query result
            if (!$query->have_posts()) {
                echo '<p>No posts found. Please check the category slug or ensure posts are assigned to the "Resources" category.</p>';
                var_dump($query->request); // Outputs the SQL query for debugging
            }

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <div class="resource-post-item">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail resources-post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <?php
                        $tags = get_the_tags();
                        if ($tags) {
                            echo '<div class="post-tags">';
                            foreach ($tags as $tag) {
                                echo '<span class="post-tag">' . esc_html($tag->name) . '</span>';
                            }
                            echo '</div>';
                        }
                        ?>

                        <h4 class="resource-post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <div class="author-info-wrap">
                            <img src="https://blueridgemeds.com/wp-content/uploads/2024/08/KxBL8CTz1ZiDbTn8PeRg1JLSW4.avif" alt="author" />
                            <div class="author-text">
                                <span class="author-title">blueridgemeds</span>
                                <span class="post-date"><?php echo get_the_date(); ?></span>
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


<?php get_footer(); ?>
