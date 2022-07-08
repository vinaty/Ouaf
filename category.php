<?php

/**
 * The page to display all categories.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage vdnetblog
 * @since vdnetblog 1.3
 */
get_header();
$term = get_queried_object();
?>
<div class="album py-5 bg-light">
    <div class="container mt-2">
        <h2>Nos articles <?php single_cat_title();?> :</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => $term->slug,
                'posts_per_page' => 9,
            );
            $the_query = new WP_Query($args);
            // Start our WP Query
            while ($the_query->have_posts()) : $the_query->the_post();
                // Display the Post Title with Hyperlink
            ?>
                <div class="col">
                    <a class="card" href="<?php the_permalink() ?>">
                        <div class="card shadow-sm">
                            <?php the_post_thumbnail('custom-thumb', ['class' => 'img-fluid rounded d-block float-lg-start w-100 custo']) ?>

                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h2><?php the_title(); ?></h2>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Lire</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            // Repeat the process and reset once it hits the limit
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
