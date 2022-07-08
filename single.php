<?php

/**
 * The template to diplay all basic pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage vdnetblog
 * @since vdnetblog 1.0
 */

get_header();
?>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col mt-4">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', ['class' => 'img-fluid rounded d-block float-lg-start me-2']);
                    }
            ?>
                    <h1><?php the_title(); ?></h1>
            <?php
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<div class="album py-5 bg-light">
    <div class="container">
        <h2>Nos derniers articles :</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php $the_query = new WP_Query('posts_per_page=3');
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
