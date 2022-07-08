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
            <?php
            if (is_front_page()) :
                get_template_part('template-parts/landing');
            else :
                get_template_part('template-parts/basic_page');
            endif;
            ?>
<?php
get_footer();
