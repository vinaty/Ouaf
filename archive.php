<?php

/**
 * The template to diplay archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage fimtheme
 * @since fimtheme 1.0
 */

get_header();
?>
<!-- SUBMENU H1 -->
<div class="container-fluid p-0 mt-4 text-center submenu">
    <h1>ARCHIVE</h1>
</div>
<!-- IMG + H1 END -->

<!-- PAGE CONTENT -->
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col mb-4">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();

                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<!-- PAGE CONTENT END -->


<?php
get_template_part('template-parts/content-banner');
get_footer();
